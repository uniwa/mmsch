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
            $method = 'set'.$this->to_camel_case($field, true);
            $entity->$method(Validator::ToValue($param));
        }
        else
            throw new Exception($exceptionType." : ".$param, $exceptionType);
    }

    private function to_camel_case($str, $capitalise_first_char = false) {
        if($capitalise_first_char) {
        $str[0] = strtoupper($str[0]);
        }
        $func = create_function('$c', 'return strtoupper($c[1]);');
        return preg_replace_callback('/_([a-z])/', $func, $str);
    }
}
?>
