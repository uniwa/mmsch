<?php
class CRUDUtils {
    public static function entitySetAssociation(&$entity, $param, $repo, $field, $exceptionType, $required = true) {
        global $entityManager;
        $missingParam = 'Missing'.$exceptionType.'Param';
        $missingValue = 'Missing'.$exceptionType.'Value';
        $invalidType = 'Invalid'.$exceptionType.'Type';
        $invalidValue = 'Invalid'.$exceptionType.'Value';

        if ( $param === _MISSED_ ) {
            if(!$required) { return; }
            throw new Exception(constant('ExceptionMessages::'.$missingParam), constant('ExceptionCodes::'.$missingParam));
        } else if ( Validator::IsNull($param) ) {
            if(!$required) { return; }
            throw new Exception(constant('ExceptionMessages::'.$missingValue), constant('ExceptionCodes::'.$missingValue));
        } else if ( Validator::IsID($param) )
            $retrievedObject = $entityManager->getRepository($repo)->find(Validator::ToID($param));
        else if ( Validator::IsValue($param) )
            $retrievedObject = $entityManager->getRepository($repo)->findOneBy(array('name' => Validator::ToValue($param)));
        else
            throw new Exception(constant('ExceptionMessages::'.$invalidType), constant('ExceptionCodes::'.$invalidType));

        if ( !isset($retrievedObject) )
            throw new Exception(constant('ExceptionMessages::'.$invalidValue), constant('ExceptionCodes::'.$invalidValue));
        else
        {
            $method = 'set'.ucfirst($field);
            $entity->$method($retrievedObject);
        }
    }

    public static function entitySetParam(&$entity, $param, $exceptionType, $field) {
        if ( $param === _MISSED_ )
        { } //throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
        else if ( Validator::IsNull($param) )
        { } //throw new Exception(ExceptionMessages::MissingNameValue, ExceptionCodes::MissingNameValue);}
        else if ( Validator::IsValue($param) )
        {
            $method = 'set'.self::to_camel_case($field, true);
            $entity->$method(Validator::ToValue($param));
        }
        else
            throw new Exception($exceptionType." : ".$param, $exceptionType);
    }

    private static function to_camel_case($str, $capitalise_first_char = false) {
        if($capitalise_first_char) {
        $str[0] = strtoupper($str[0]);
        }
        $func = create_function('$c', 'return strtoupper($c[1]);');
        return preg_replace_callback('/_([a-z])/', $func, $str);
    }
    
    public static function setFilter ($qb, $filter_param, $table_name, $table_column_id, $table_column_name, $filter_validators, $ex_message, $ex_code) {
     global $db;

     $param = Validator::toArray($filter_param);
     $validators = Validator::toArray($filter_validators);  

     $orx = $qb->expr()->orX();

         foreach ($param as $values)
         {
              if (in_array('null', $validators, true) && Validator::isNull($values) ) 
                   $orx->add($qb->expr()->isNull($table_name.".".$table_column_id));
              elseif (in_array('id', $validators, true) && Validator::IsID($values)) 
                  $orx->add($qb->expr()->eq($table_name.".".$table_column_id, $db->quote(Validator::toID($values))));
              elseif (in_array('value', $validators, true) && Validator::IsValue($values) ) 
                  $orx->add($qb->expr()->eq($table_name.".".$table_column_name, $db->quote(Validator::toValue($values))));
              elseif (in_array('numeric', $validators, true) && Validator::IsNumeric($values)) 
                  $orx->add($qb->expr()->eq($table_name.".".$table_column_name, $db->quote(Validator::ToNumeric($values))));
              elseif (in_array('date', $validators, true) && Validator::IsDate($values,'Y-m-d'))
                    $orx->add($qb->expr()->like($table_name.".".$table_column_name, $db->quote('%'.Validator::ToDate($values,'Y-m-d').'%' )));
              elseif (in_array('greater', $validators, true) && Validator::IsDate($values,'Y-m-d')) 
                   $orx->add($qb->expr()->gte($table_name.".".$table_column_name, $db->quote(Validator::ToDate($values,'Y-m-d'))));
              elseif (in_array('lower', $validators, true) && Validator::IsDate($values,'Y-m-d'))  
                   $orx->add($qb->expr()->lte($table_name.".".$table_column_name, $db->quote(Validator::ToDate($values,'Y-m-d'))));
              elseif (in_array('contain', $validators, true) && Validator::IsValue($values))  
                   $orx->add($qb->expr()->like($table_name.".".$table_column_name, $db->quote('%'.Validator::toValue($values).'%')));
              elseif (in_array('startWith', $validators, true) && Validator::IsValue($values))  
                   $orx->add($qb->expr()->like($table_name.".".$table_column_name, $db->quote(Validator::toValue($values).'%')));
              elseif (in_array('endWith', $validators, true) && Validator::IsValue($values))  
                   $orx->add($qb->expr()->like($table_name.".".$table_column_name, $db->quote('%'.Validator::toValue($values))));
              else
                  throw new Exception($ex_message . " : " . $values, $ex_code);
         }

    $qb->andWhere($orx);
        
    }  
    
    public static function setSearchFilter ($qb, $filter_param, $table_name, $table_column_name, $searchtype, $ex_message, $ex_code) {
        global $db;
            
        $param = Validator::toArray($filter_param);
  
        foreach ($param as $values)
        {
          $orx = $qb->expr()->orX();
          $andx = $qb->expr()->andX();

            if ( Validator::isNull($values) )
                 $andx->add($qb->expr()->isNull($table_name.".".$table_column_name));
            else if ( Validator::IsValue($values) )
            {
                if ( $searchtype == SearchEnumTypes::Exact )
                    $orx->add($qb->expr()->eq($table_name.".".$table_column_name, $db->quote(Validator::toValue($values))));
                else if ( $searchtype == SearchEnumTypes::Contain )
                    $orx->add($qb->expr()->like($table_name.".".$table_column_name, $db->quote('%'.Validator::toValue($values).'%')));
                else
                {
                    $words = Validator::toArray($values, " ");

                    foreach ($words as $word)
                    {
                        switch ($searchtype)
                        {
                            case SearchEnumTypes::ContainAll :
                                $andx->add($qb->expr()->like($table_name.".".$table_column_name, $db->quote('%'.Validator::toValue($word).'%')));
                                break;
                            case SearchEnumTypes::ContainAny :
                                $orx->add($qb->expr()->like($table_name.".".$table_column_name, $db->quote('%'.Validator::toValue($word).'%')));
                                break;
                            case SearchEnumTypes::StartWith :
                                $orx->add($qb->expr()->like($table_name.".".$table_column_name, $db->quote(Validator::toValue($word).'%')));
                                break;
                            case SearchEnumTypes::EndWith :
                                 $orx->add($qb->expr()->like($table_name.".".$table_column_name, $db->quote('%'.Validator::toValue($word))));
                                break;
                        }
                    }
                }
            }
            else
                throw new Exception($ex_message . " : " . $values, $ex_code);
  
            switch ($searchtype)
            {
                case SearchEnumTypes::ContainAll :
                    $qb->andWhere($andx);
                    break;
                default :
                    $qb->andWhere($orx);
                    break;
            }
                            
        }
    } 
    
}
?>
