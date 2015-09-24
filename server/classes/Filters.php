<?php

class Filters {
    
    /**
     * Set SearchType filter
     * 
     * @param string $searchtype The name of SearchType filter. Default value is `containall`.
     * @param array $params Contain all input parameter by user.
     * 
     * @return string The name of SearchType filter
     * @throws ExceptionMessages::'InvalidSearchType' , ExceptionCodes::'InvalidSearchType'
     */
    public static function getSearchType($searchtype, $params) {
         
        if ( Validator::Missing('searchtype', $params) )
            $searchtype = SearchEnumTypes::ContainAll ;
        else if ( SearchEnumTypes::isValidValue( $searchtype ) || SearchEnumTypes::isValidName( $searchtype ) )
            $searchtype = SearchEnumTypes::getValue($searchtype);
        else
            throw new Exception(ExceptionMessages::InvalidSearchType." : ".$searchtype, ExceptionCodes::InvalidSearchType);
        
        return $searchtype;
    }
       
    /**
     * Set OrderType filter
     * 
     * @param string $ordertype The name of OrderType filter. Default value is `ASC`.
     * @param array $params Contain all input parameter by user.
     * 
     * @return string The name of OrderType filter
     * @throws ExceptionMessages::'InvalidOrderType' , ExceptionCodes::'InvalidOrderType'
     */
    public static function getOrderType($ordertype, $params) {
         
        if ( Validator::Missing('ordertype', $params) )
            $ordertype = OrderEnumTypes::ASC ;
        else if ( OrderEnumTypes::isValidValue( $ordertype ) || OrderEnumTypes::isValidName( $ordertype ) )
            $ordertype = OrderEnumTypes::getValue($ordertype);
        else
            throw new Exception(ExceptionMessages::InvalidOrderType." : ".$ordertype, ExceptionCodes::InvalidOrderType);
        
        return $ordertype;
    }
    
    /**
     * Set ExportType filter
     * 
     * @param string $export The name of ExportType filter. Default value is `JSON`.
     * @param array $params Contain all input parameter by user.
     * 
     * @return string The name of ExportType filter
     * @throws ExceptionMessages::'InvalidExportType' , ExceptionCodes::'InvalidExportType'
     */
    public static function getExportType($export, $params) {
        
        if ( Validator::Missing('export', $params) )
            $export = ExportDataEnumTypes::JSON;
        else if ( ExportDataEnumTypes::isValidValue( $export ) || ExportDataEnumTypes::isValidName( $export ) ) {
            $export = ExportDataEnumTypes::getValue($export);
        } else
            throw new Exception(ExceptionMessages::InvalidExportType." : ".$export, ExceptionCodes::InvalidExportType);
        
        return $export;
    }
}

?>