<?php

class Validator
{
    protected static $trueValues = array('1', 'on', 'true', 't', 'yes', 'y');
    protected static $falseValues = array('0', 'off', 'false', 'f', 'no', 'n');

    protected static $maleValues = array('Α', 'M');
    protected static $femaleValues = array('Γ', 'F');

    /**
     * 
     * Validates that value has exist.
     * 
     *  Use php get_object_vars function that returns NULL if the object isn't an object
     *  Use php array_key_exists function that checks if the given key or index exists in the array.
     * 
     * @return bool True on success, false on failure.
     * 
     */
    public static function IsExists($param) {
        //$params = get_object_vars( loadParameters() );
       $params = loadParameters();
    return array_key_exists($param, $params);
    }
    
    /**
     * 
     * Validates that value has exist from params list.
     * 
     *  Use php array_key_exists function that checks if the given key or index exists in the array.
     * 
     * @return bool True on success, false on failure.
     * 
     */
    public static function Exists($param, $params) {
        return array_key_exists($param, $params);
    }

    /**
     * 
     * Validates that value has missing from params list.
     * 
     * @return bool True if exist, false if not.
     * 
     */
    public static function Missing($param, $params) {
        return ! self::Exists($param, $params);
    }


    /**
     * 
     * Validates that the value is a boolean representation.
     * 
     * @return bool True if valid, false if not.
     * 
     */
    public static function isBoolean($value)
    {
        if ($value === true || $value === false) {
            return true;
        }

        $lower = strtolower(trim($value));
        if (in_array($lower, self::$trueValues, true)) {
            return true;
        } elseif (in_array($lower, self::$falseValues, true)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 
     * Validate if value is true
     * 
     * @return bool True if true, false if not
     * 
     */ 
    public static function isTrue($value)
    {
        if ($value === true) {
            return true;
        }

        $lower = strtolower(trim($value));
        if (in_array($lower, self::$trueValues, true)) {
            return true;
        }

        return false;
    }

    /**
     * 
     * Forces the value to a boolean.
     * 
     * Note that this recognizes $this->trueValues and $this->falseValues values.
     * 
     * @return bool Always true.
     * 
     */
    public static function toBoolean($value)
    {
        // PHP booleans
        if ($value === true )
            return true;
        else if ($value === false )
            return false;

        $lower = strtolower(trim($value));
        if (in_array($lower, self::$trueValues, true)) {
            return true;
        } elseif (in_array($lower, self::$falseValues, true)) {
            return false;
        } else {
            return null;
        }
        
        return true;
    }
    
    /**
     * 
     * Validates that the value has the right representation of type sex.
     * 
     * @return bool True if valid, false if not.
     * 
     */
    public static function isSex($value)
    {
        $lower = strtolower(trim($value));
        if (in_array($lower, self::$maleValues, true)) {
            return true;
        } elseif (in_array($lower, self::$femaleValues, true)) {
            return true;
        } else {
            return false;
        }
    }
    
    /**
     * 
     * Forces the value to the right representation of type sex .
     * 
     * Note that this recognizes $this->$maleValues and $this->$femaleValues values.
     * 
     * @return ("Α" or "Γ") True if valid, null if not.
     * 
     */
    public static function toSex($value)
    {
        $lower = strtolower(trim($value));
        if (in_array($lower, self::$maleValues, true)) {
            return 'Α';
        } elseif (in_array($lower, self::$femaleValues, true)) {
            return 'Γ';
        } else {
            return null;
        }
        
        return true;
    }
    
    /**
     * 
     * Validates that the value is null, or is a string composed only of
     * whitespace.
     * 
     * Non-strings and non-nulls never validate as blank; this includes
     * integers, floats, numeric zero, boolean true and false, any array with
     * zero or more elements, and all objects and resources.
     * 
     * @return bool True if valid, false if not.
     * 
     */
    public static function isNull($value)
    {
        // nulls are blank
        if (is_null($value)) {
            return true;
        }
        
        // strings with 'null' means blanks
        if (strtolower(trim($value)) == "null" ) {
            return true;
        }

        // non-strings are not blank: int, float, object, array, resource, etc
        if (! is_string($value)) {
            return false;
        }
        
        // strings that trim down to exactly nothing are blank
        return trim($value) === '';
    }

    /**
     * 
     * Set value to null
     * 
     * @return bool Always true.
     * 
     */
    public static function toNull($value)
    {
        return null;
    }
    
    /**
     * 
     * Validates that the value is an array representation.
     * 
     * @return bool True if valid, false if not.
     * 
     */
    public static function isArray($value)
    {
        return ( count( explode(",", $value) ) > 1 );
    }

    /**
     * 
     * Forces the value to an array.
     * 
     * @return array Array if true, null if false.
     * 
     */
    public static function toArray($value, $separator = ",")
    {
        //if (!self::IsArray($value))
        //    return null;

        return array_map('trim', explode($separator, $value));
    }

    /**
     * 
     * Validates that the value is a integer representation.
     * 
     * info  
     * 32-bit builds of PHP:
     *   Integers can be from -2147483648 to 2147483647
     * 64-bit builds of PHP:
     *   Integers can be from -9223372036854775808 to 9223372036854775807
     *
     * if value is out of the above limits then 
     * 1) $value became float
     * 2 )value == (int)$value break 
     * and return false
     * 
     * @return bool True if valid, false if not.
     * 
     */
    public static function isInteger($value) {
        if (! is_scalar($value)) {
            return false;
        }

        return ( is_int($value) || (is_numeric($value) && $value == (int)$value) );
    }

    /**
     * 
     * Forces the value to integer.
     * 
     * @return int Value as integer if true, null if false.
     * 
     */
    public static function toInteger($value) {
        return (int)$value;
    }

    /**
     * 
     * Check if a value is greater than another value.
     * 
     * params $value -> the value to check
     *        $max -> the value for compare
     *        $maxIncluded -> default false " > ", set true to " >= " 
     * 
     * @return bool True if valid, false if not.
     * 
     */
    public static function isGreaterThan($value, $max, $maxIncluded = false) {
        if (! is_scalar($value)) {
            return false;
        }

        return (self::isInteger($value) && ($maxIncluded ? $value >= $max : $value > $max));
    }

    /**
     * 
     * Check if a value is lower than another value.
     * 
     * params $value -> the value to check
     *        $max -> the value for compare
     *        $minIncluded -> default false " < ", set true to " <= " 
     * 
     * @return bool True if valid, false if not.
     * 
     */
    public static function isLowerThan($value, $min, $minIncluded = false) {
        if (! is_scalar($value)) {
            return false;
        }

        return (self::isInteger($value) &&  ($minIncluded ? $value <= $min : $value < $min));
    }

    /**
     * 
     * Check if a value is equal to another value.
     * 
     * params $value -> the value to check
     *        $val -> the value for compare
     * 
     * @return bool True if valid, false if not.
     * 
     */
    public static function isEqualTo($value, $val) {
        if (! is_scalar($value)) {
            return false;
        }

        return (self::isInteger($value) &&  ($value == $val));
    }

    /**
     * 
     * Validates that the value is an number. 
     *
     * info  
     * 32-bit builds of PHP:
     *   Integers can be from -2147483648 to 2147483647
     * 64-bit builds of PHP:
     *   Integers can be from -9223372036854775808 to 9223372036854775807
     *
     * if value is out of the above limits then 
     * 1) $value became float
     * 2 )value == (int)$value break 
     * and return false
     *  
     * @return bool True if valid, false if not.
     * 
     * 
     */
    public static function isNumeric($value)
    {
        if (! is_scalar($value)) {
            return false;
        }
        
        return ( is_int($value) || (is_numeric($value) && $value == (int) $value) );
    }
    
    /**
     * 
     * Forces the value to numeric.
     * 
     * @return int Value as integer if true, null if false.
     * 
     */
    public static function toNumeric($value)
    {
        if (!self::IsNumeric($value))
            return null;
        
        return (int)$value;
    }
    
    /**
     * 
     * Validates that the value is a positive number, and mean an ID representation .
     * 
     * info  
     * 32-bit builds of PHP:
     *   Integers can be from -2147483648 to 2147483647
     * 64-bit builds of PHP:
     *   Integers can be from -9223372036854775808 to 9223372036854775807
     *
     * if value is out of the above limits then 
     * 1) $value became float
     * 2 )value == (int)$value break 
     * and return false
     * 
     * @return bool True if valid, false if not.
     * 
     */
    public static function isID($value)
    {
        if (! is_scalar($value)) {
            return false;
        }
        
        return ( is_int($value) || (is_numeric($value) && $value == (int) $value) )  && ( $value > 0 );
    }
    
    /**
     * 
     * Forces the value to ID integer format.
     * 
     * @return int Value as ID integer if true, null if false.
     * 
     */  
    public static function toID($value)
    {
        if (!self::IsID($value))
            return null;
        
        //return (int)$value;
        return $value;
    }
    
    /**
     * 
     * Validates that the value is a value representation with regular_expressions
     * '/[A-Z]|[a-z]|[Α-Ω]|[α-ω]|[0-9]|[\-\/@#$;?_%^&*!,. ]/' .
     * 
     * Use php preg_match function that returns 1 if the pattern matches given subject,
     * 0 if it does not, or FALSE if an error occurred
     * 
     * @return mixed 1,0,FALSE if valid, false if null or boolean of 0 or 1.
     * 
     */
    public static function isValue($value)
    {
        if ( self::IsNull($value) )
            return false;
        
        if (!in_array($value, array(0, 1)))
        {
            if ( self::IsBoolean($value) )
            return false;
        }
                
        return preg_match('/[A-Z]|[a-z]|[Α-Ω]|[α-ω]|[0-9]|[\-\/@#$;?_%^&*!,. ]/', $value);
        //return preg_match("/^[a-zA-Z\p{Greek}0-9\s\-]+$/u", $value);
    }
    
    /**
     * 
     * Forces the value to string format with trim property.
     * 
     * @return string Value as trimmed string if true, null if false.
     * 
     */   
    public static function toValue($value)
    {
        if (!self::IsValue($value))
            return null;
        
        return (string)trim($value);
    }

    /**
     * 
     * Forces the value to integer format.
     * 
     * @return string Value as integer if true, null if false.
     * 
     */  
    public static function toIntVal($value) {
        return isset($value) ? (int)$value : null;
    }

    /**
     * 
     * Forces the value to boolean format.
     * 
     * @return string Value as boolean if true, null if false.
     * 
     */  
    public static function toBoolVal($value) {
        return isset($value) ? (bool)$value : null;
    }

    /**
     * 
     * Validates that the value is a negative number.
     * 
     * @return bool True if valid, false if not.
     * 
     * info  
     * 32-bit builds of PHP:
     *   Integers can be from -2147483648 to 2147483647
     * 64-bit builds of PHP:
     *   Integers can be from -9223372036854775808 to 9223372036854775807
     *
     * if value is out of the above limits then 
     * 1) $value became float
     * 2 )value == (int)$value break 
     * and return false
     * 
     */
    public static function IsNegative($value)
    {
        if (! is_scalar($value)) {
            return false;
        }

        return ( is_int($value) || (is_numeric($value) && $value == (int) $value) )  && ( $value <= 0 );
    }
    
    /**
     * 
     * Validates that the value has valid IP format.
     * 
     * @return bool True if valid, false if not.
     */
    public static function IsIp($value){
         return inet_pton($value) !== false;
    }
     
    /**
     * 
     * Validates that the value has valid mask format.
     * 
     * @return bool True if valid, false if not.
     */
    public static function IsValidMask($ip,$mask){
     
        if( filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) ){

            if ($mask[0] == '/') {       
               (int)$mask_num = ltrim ($mask,'/');  
               
                if ($mask_num >= 8 && $mask_num <= 32) {               
                    return $mask_num;
                } else {
                    return false;
                }   
                
            } else {
                return false;
            }
            
        } else if( filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) ){
           if ($mask[0] == '/') {       
               (int)$mask_num = ltrim ($mask,'/');  
               
                if ($mask_num >= 1 && $mask_num <= 128) {               
                    return $mask_num;
                } else {
                    return false;
                }   
                
            } else {
                return false;
            }
        } else {
            return false;
        }
            
    }
    
    /**
     * 
     * Validates that the value is a date type representation of various format
     * 
     * 
     * Use system date.php functions that returns true if date type found,
     *  or false if an error occurred
     * 
     * Function found by http://php.net/checkdate post by glavic
     * Examples :
     * var_dump(IsDate('2012-02-28 12:12:12')); # true
     * var_dump(IsDate('2012-02-30 12:12:12')); # false
     * var_dump(IsDate('28/02/2012', 'd/m/Y')); # true
     * var_dump(IsDate(14, 'H')); # true
     * var_dump(IsDate('2012-02-28T12:12:12+02:00', DateTime::ATOM)); # true
     * var_dump(IsDate('Tue, 28 Feb 2012 12:12:12 +0200', 'D, d M Y H:i:s O')); # true
     * 
     * @return bool True if valid, false if not. 
     */ 
   public static function IsDate($date, $format = 'Y-m-d H:i:s')
    {
        $date=date($format, trim(strtotime($date)));
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }
    
    /**
     * 
     * Forces the value to year format with trim property.
     * 
     * @return string Value as trimmed year type if true, null if false.
     * 
     */ 
    public static function ToDate($date, $format = 'Y-m-d H:i:s')
    {   

        return date($format, trim(strtotime($date)));
    }
    
    /**
     * 
     * Validates that the value has valid year-range.
     * 
     * Use php strtotime function to compare date by user with currentDate and startDate
     * true condition must have startDate < date < currentDate
     * 
     * @return bool True if valid, false if not.  
     */
    public static function IsValidDate($date, $format = 'Y-m-d H:i:s')
    {

      $startDate="1975-1-1";   //min date value
      $currentDate=date($format);  //max date value
      $formatDate = date($format, strtotime($date));
     
     if ( (strtotime($formatDate) > strtotime($startDate) ) && (strtotime($formatDate) <= strtotime($currentDate) ) ){
          return true;  
        } else {
          return false;
        }

    }
    
    /**
     * 
     * Forces the string to lowercase.
     * 
     * @return string Lowercase string.
     * 
     */
    public static function ToLower($value){     
        return (strtolower($value));        
    }
    
    /**
     * 
     * Forces the string to uppercase.
     * 
     * @return string Uppercase string.
     * 
     */
    public static function ToUpper($value){
        return (strtoupper($value));        
    }

}
?>
