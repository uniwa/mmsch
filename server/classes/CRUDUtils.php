<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package CLASSES
 */

class CRUDUtils {

    /**
     * It converted string like “to_camel_case” into Camel Case: “ToCamelCase”.
     * 
     *  @param string String to converted
     *  @param boolean True if want to capitalise first character or false if not
     * 
     *  @return string Camel Case string
     */
    private static function to_camel_case($str, $capitalise_first_char = false) {
        if($capitalise_first_char) {
            $str[0] = strtoupper($str[0]);
        }
        
        $func = create_function('$c', 'return strtoupper($c[1]);');
        return preg_replace_callback('/_([a-z])/', $func, $str);
    }
    
    /**
     * Set doctrine query builder with filters
     * 
     * @param DoctrineQueryBuilder $qb The doctrine query builder.
     * @param array $filter_param Values of input parameter by user.
     * @param string $table_name The database table name is used. 
     * @param string $table_column_id The primary id field name is used. 
     * @param string $table_column_name The name of column field is used.  
     * @param array $filter_validators The names of filters by user. Allowed names are : null, id, value, numeric, date, greater, lower, contain, startWith, endWith, boolean.
     * @param string $ex_message Exception name message.
     * @param string $ex_code Exception code message. 
     *
     * @return mixed The doctrine query builder with filters or throwException
     * @throws ExceptionMessages::$ex_message , ExceptionCodes::$ex_code
     */ 
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
              elseif (in_array('boolean', $validators, true) && Validator::IsBoolean($values))
                    $orx->add($qb->expr()->eq($table_name.".".$table_column_name, $db->quote(Validator::ToBoolean($values))));
              else
                  throw new Exception($ex_message . " : " . $values, $ex_code);
         }

    $qb->andWhere($orx);
                            
    }  
    
    /**
     * Set doctrine query builder with search filters
     * 
     * @param DoctrineQueryBuilder $qb The doctrine query builder.
     * @param array $filter_param Values of input parameter by user.
     * @param string $table_name The database table name is used. 
     * @param string $table_column_name The name of column field is used.  
     * @param string $searchtype The name of search filters bu user.Allowed search filters exact, contain, containall, containany, startwith, endwith .
     * @param string $ex_message Exception name message.
     * @param string $ex_code Exception code message. 
     *
     * @return mixed The doctrine query builder with search filters or throwException
     * @throws ExceptionMessages::$ex_message , ExceptionCodes::$ex_code 
     */ 
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
    
    /**
     * Set doctrine entity association parameter
     * Remember if user set Value and not Id
     * then table db field must be `name`
     * 
     * @param DoctrineEntity $entity The doctrine entity.
     * @param mixed[string|integer] $param Value of input parameter by user.
     * @param string $repo Dotrine Entity class.
     * @param string $doctrineField Name of parameter used by doctrine Entity.It converted string like “uppercase” into Upper Case: “Uppercase”.
     * @param string $exceptionType Short name of input parameter used by ExceptionMessages and ExceptionCodes.
     * @param array $params Contain all input parameter by user. Created by loadParameters() function and use $userField param
     * @param string $userField Name of input parameter by user.
     * @param boolean $required Set true if parameter must required or false if not. Default value is true.
     * @param boolean $is_nullable Set true if parameter can be null or false if not. Default value is false.
     * @param boolean $only_id Set true if want to check parameter only for id value. Default value is false.
     * 
     * @return mixed The doctrine entity with set.'$field' or throwException
     * @throws ExceptionMessages::'Missing'.$exceptionType.'Param' , ExceptionCodes::'Missing'.$exceptionType.'Param'
     * @throws ExceptionMessages::'Missing'.$exceptionType.'Value' , ExceptionCodes::'Missing'.$exceptionType.'Value'
     * @throws ExceptionMessages::'Invalid'.$exceptionType.'Type' , ExceptionCodes::'Invalid'.$exceptionType.'Type'
     * @throws ExceptionMessages::'Invalid'.$exceptionType.'Value' , ExceptionCodes::'Invalid'.$exceptionType.'Value'
     * @throws ExceptionMessages::'Duplicated'.$exceptionType.'UniqueValue' , ExceptionCodes::'Duplicated'.$exceptionType.'UniqueValue'
     */
    public static function entitySetAssociation(&$entity, $param, $repo, $doctrineField, $exceptionType, $params, $userField, $required = true, $is_nullable = false, $only_id = false ) {
        global $entityManager;
        $missingParam = 'Missing'.$exceptionType.'Param';
        $missingValue = 'Missing'.$exceptionType.'Value';
        $invalidType = 'Invalid'.$exceptionType.'Type';
        $invalidValue = 'Invalid'.$exceptionType.'Value';
        $duplicateValue = 'Duplicated'.$exceptionType.'UniqueValue';

        if (Validator::Missing($userField, $params) ){
            if (!$required) { return; }
            throw new Exception(constant('ExceptionMessages::'.$missingParam)." : ".$param, constant('ExceptionCodes::'.$missingParam));
        } else if ( Validator::IsNull($param) ) {
            if (!$is_nullable) {
                throw new Exception(constant('ExceptionMessages::'.$missingValue)." : ".$param, constant('ExceptionCodes::'.$missingValue));                 
            } else {
                $method = 'set'.ucfirst($doctrineField);
                $entity->$method(Validator::ToNull($param));
                return;
            }   
        } else if ( Validator::IsID($param) )
            $retrievedObject = $entityManager->getRepository($repo)->find(Validator::ToID($param));
        else if ( Validator::IsValue($param) && ($only_id == false) )
            $retrievedObject = $entityManager->getRepository($repo)->findOneBy(array('name' => Validator::ToValue($param)));
        else
            throw new Exception(constant('ExceptionMessages::'.$invalidType)." : ".$param, constant('ExceptionCodes::'.$invalidType));
        
        
        if ( !isset($retrievedObject) )
            throw new Exception(constant('ExceptionMessages::'.$invalidValue)." : ".$param, constant('ExceptionCodes::'.$invalidValue));
        else if (count($retrievedObject)>1)
            throw new Exception(constant('ExceptionMessages::'.$duplicateValue)." : ".$param, constant('ExceptionCodes::'.$duplicateValue));
        else
        {
            $method = 'set'.ucfirst($doctrineField);
            $entity->$method($retrievedObject);
        }
    } 
    
    /**
     * Set doctrine entity parameter
     * 
     * @param DoctrineEntity $entity The doctrine entity.
     * @param mixed[string|integer] $param Value of input parameter by user.   
     * @param string $exceptionType Short name of input parameter used by ExceptionMessages and ExceptionCodes.
     * @param string $field Name of parameter used by doctrine Entity.It converted string like “to_camel_case” into Camel Case: “ToCamelCase”.
     * @param array $params Contain all input parameter by user. Created by loadParameters() function and use $field param.
     * @param boolean $required Set true if parameter must required or false if not. Default value is true.
     * @param boolean $is_nullable Set true if parameter can be null or false if not. Default value is false.
     * @param boolean $only_numeric Set true if want to check parameter only for numeric value. Default value is false.
     *
     * @return mixed The doctrine entity with set.'$field' or throwException
     * @throws ExceptionMessages::'Missing'.$exceptionType.'Param' , ExceptionCodes::'Missing'.$exceptionType.'Param'
     * @throws ExceptionMessages::'Missing'.$exceptionType.'Value' , ExceptionCodes::'Missing'.$exceptionType.'Value'
     * @throws ExceptionMessages::'Invalid'.$exceptionType.'Type' , ExceptionCodes::'Invalid'.$exceptionType.'Type'
     */ 
    public static function entitySetParam(&$entity, $param, $exceptionType, $field, $params, $required = true, $is_nullable = false, $only_numeric = false ) {
        
        $missingParam = 'Missing'.$exceptionType.'Param';
        $missingValue = 'Missing'.$exceptionType.'Value';
        $invalidType = 'Invalid'.$exceptionType.'Type'; 
      
        if (Validator::Missing($field, $params) ){
            if (!$required) { return; }
            throw new Exception(constant('ExceptionMessages::'.$missingParam)." : ".$param, constant('ExceptionCodes::'.$missingParam));
        } 
        else if ( Validator::IsNull($param) )
            if (!$is_nullable) { 
                throw new Exception(constant('ExceptionMessages::'.$missingValue)." : ".$param, constant('ExceptionCodes::'.$missingValue));
            }else{
                $method = 'set'.self::to_camel_case($field, true);
                $entity->$method(Validator::ToNull($param));
            }
        else if ( Validator::IsValue($param) )
        {
 
            if ($only_numeric == true){
                if (!Validator::isNumeric($param)) throw new Exception(constant('ExceptionMessages::'.$invalidType)." : ".$param, constant('ExceptionCodes::'.$invalidType));
            }
            
            $method = 'set'.self::to_camel_case($field, true);
            $entity->$method(Validator::ToValue($param));
        }
        else
            throw new Exception(constant('ExceptionMessages::'.$invalidType)." : ".$param, constant('ExceptionCodes::'.$invalidType));
    }
    
    /**
     * Set doctrine entity Date parameter
     * 
     * @param DoctrineEntity $entity The doctrine entity.
     * @param mixed[string|integer] $param Value of input parameter by user.   
     * @param string $exceptionType Short name of input parameter used by ExceptionMessages and ExceptionCodes.
     * @param string $field Name of parameter used by doctrine Entity.It converted string like “to_camel_case” into Camel Case: “ToCamelCase”.
     * @param array $params Contain all input parameter by user. Created by loadParameters() function and use $field param.
     * @param boolean $required Set true if parameter must required or false if not. Default value is true.
     * @param boolean $is_nullable Set true if parameter can be null or false if not. Default value is false.
     * @param boolean $dateFormat Set date format. Default value is 'Y-m-d H:i:s'.
     *
     * @return mixed The doctrine entity with set.'$field' or throwException
     * @throws ExceptionMessages::'Missing'.$exceptionType.'Param' , ExceptionCodes::'Missing'.$exceptionType.'Param'
     * @throws ExceptionMessages::'Missing'.$exceptionType.'Value' , ExceptionCodes::'Missing'.$exceptionType.'Value'
     * @throws ExceptionMessages::'Invalid'.$exceptionType.'Type' , ExceptionCodes::'Invalid'.$exceptionType.'Type'
     * @throws ExceptionMessages::'Invalid'.$exceptionType.'ValidType' , ExceptionCodes::'Invalid'.$exceptionType.'ValidType'
     */ 
    public static function entitySetDate(&$entity, $param, $exceptionType, $field, $params, $required = true, $is_nullable = false, $dateFormat = 'Y-m-d H:i:s' ) {
        
        $missingParam = 'Missing'.$exceptionType.'Param';
        $missingValue = 'Missing'.$exceptionType.'Value';
        $invalidType = 'Invalid'.$exceptionType.'Type';
        $invalidValidType = 'Invalid'.$exceptionType.'ValidType'; 
      
        if (Validator::Missing($field, $params) ){
            if (!$required) { return; }
            throw new Exception(constant('ExceptionMessages::'.$missingParam)." : ".$param, constant('ExceptionCodes::'.$missingParam));
        } 
        else if ( Validator::IsNull($param) )
            if (!$is_nullable) { 
                throw new Exception(constant('ExceptionMessages::'.$missingValue)." : ".$param, constant('ExceptionCodes::'.$missingValue));
            }else{
                $method = 'set'.self::to_camel_case($field, true);
                $entity->$method(Validator::ToNull($param));
            }
        else if (! Validator::IsValidDate($param) )
            throw new Exception(constant('ExceptionMessages::'.$invalidValidType)." : ".$param, constant('ExceptionCodes::'.$invalidValidType));
        else if ( Validator::IsDate($param, $dateFormat) )
        {         
            $method = 'set'.self::to_camel_case($field, true);
            $entity->$method(new \DateTime( Validator::ToDate($param) ));
        }
        else
            throw new Exception(constant('ExceptionMessages::'.$invalidType)." : ".$param, constant('ExceptionCodes::'.$invalidType));
    }
    
    /**
     * Check ID (primary key)
     * 
     * @param string $field Name of input parameter by user.
     * @param array $params Contain all input parameter by user. Created by loadParameters() function and use $userField param
     * @param integer $param Value of input parameter by user.
     * @param string $exceptionType Short name of input parameter used by ExceptionMessages and ExceptionCodes.
     * 
     * @return mixed ID integer format or throwException
     * @throws ExceptionMessages::'Missing'.$exceptionType.'Param' , ExceptionCodes::'Missing'.$exceptionType.'Param'
     * @throws ExceptionMessages::'Missing'.$exceptionType.'Value' , ExceptionCodes::'Missing'.$exceptionType.'Value'
     * @throws ExceptionMessages::'Invalid'.$exceptionType.'Type' , ExceptionCodes::'Invalid'.$exceptionType.'Type'
     * @throws ExceptionMessages::'Invalid'.$exceptionType.'Array' , ExceptionCodes::'Invalid'.$exceptionType.'Array'
     */
    public static function checkIDParam($field, $params, $param, $exceptionType ){

        $missingParam = 'Missing'.$exceptionType.'Param';
        $missingValue = 'Missing'.$exceptionType.'Value';
        $invalidArray = 'Invalid'.$exceptionType.'Array';
        $invalidType = 'Invalid'.$exceptionType.'Type';
        
        if (Validator::Missing($field, $params))
            throw new Exception(constant('ExceptionMessages::'.$missingParam)." : ".$param, constant('ExceptionCodes::'.$missingParam));       
        else if (Validator::IsNull($param))
            throw new Exception(constant('ExceptionMessages::'.$missingValue)." : ".$param, constant('ExceptionCodes::'.$missingValue));
        else if (Validator::IsArray($param))
            throw new Exception(constant('ExceptionMessages::'.$invalidArray)." : ".$param, constant('ExceptionCodes::'.$invalidArray));   
        else if (Validator::IsID($param))
            return Validator::ToID($param);
        else
          throw new Exception(constant('ExceptionMessages::'.$invalidType)." : ".$param, constant('ExceptionCodes::'.$invalidType));
          
    }  
    
    /**
     * Find ID (primary key)
     * 
     * @param integer $param Value of input parameter by user.
     * @param string $repo Dotrine Entity class.
     * @param string $exceptionType Short name of input parameter used by ExceptionMessages and ExceptionCodes.
     * 
     * @return mixed The doctrine entity of ID or throwException
     * @throws ExceptionMessages::'Invalid'.$exceptionType.'Value' , ExceptionCodes::'Invalid'.$exceptionType.'Value'
     * @throws ExceptionMessages::'Duplicated'.$exceptionType.'UniqueValue' , ExceptionCodes::'Duplicated'.$exceptionType.'UniqueValue'
     */
    public static function findIDParam ($param, $repo, $exceptionType){        
        
        global $entityManager;
             
        $invalidValue = 'Invalid'.$exceptionType.'Value';
        $duplicateValue = 'Duplicated'.$exceptionType.'UniqueValue';
 
        $retrievedObject = $entityManager->find($repo, $param);
        
        if(!isset($retrievedObject))
            throw new Exception(constant('ExceptionMessages::'.$invalidValue)." : ".$param, constant('ExceptionCodes::'.$invalidValue));
        else if (count($retrievedObject) > 1)
            throw new Exception(constant('ExceptionMessages::'.$duplicateValue)." : ".$param, constant('ExceptionCodes::'.$duplicateValue));           
        else   
            return $retrievedObject;
    }
    
}

?>