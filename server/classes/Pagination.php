<?php
class Pagination
{
    
    public static function getMaxPage($total, $page, $pagesize)
    {
        if ($pagesize > 0 && $total > 0 ) {
            $maxPage = ceil($total / $pagesize);
        } else {
            $maxPage = 1;   
        }
        
        if ($page > $maxPage || $maxPage < 1 ){
            throw new Exception(ExceptionMessages::InvalidMaxPageNumber." : ".$maxPage, ExceptionCodes::InvalidMaxPageNumber);
        } else {
           return $maxPage; 
        }
        
    }
    
    public static function getPage($page, $params) {
           if ( Validator::Missing('page', $params) )
            $page = Parameters::DefaultPage;
        else if ( Validator::isNull($page) )
            throw new Exception(ExceptionMessages::MissingPageValue, ExceptionCodes::MissingPageValue);
        else if ( Validator::isArray($page) )
            throw new Exception(ExceptionMessages::InvalidPageArray, ExceptionCodes::InvalidPageArray);
        else if (!Validator::IsInteger($page) )
            throw new Exception(ExceptionMessages::InvalidPageType, ExceptionCodes::InvalidPageType);
        else if (Validator::isLowerThan($page, 0, true) )
            throw new Exception(ExceptionMessages::InvalidPageNumber, ExceptionCodes::InvalidPageNumber);
        else
            return Validator::toInteger($page);

        return $page;
    }
    
    public static function getPageSize($pagesize, $params, $useAllPageSize = false) { 
        
        if ( Validator::Missing('pagesize', $params) )
        $pagesize = $useAllPageSize == true ? Parameters::AllPageSize : Parameters::DefaultPageSize;
        else if ( Validator::isNull($pagesize) )
        throw new Exception(ExceptionMessages::MissingPageSizeValue, ExceptionCodes::MissingPageSizeValue);
        else if ( Validator::isArray($pagesize) )
        throw new Exception(ExceptionMessages::InvalidPageSizeArray, ExceptionCodes::InvalidPageSizeArray);
        else if (!Validator::IsInteger($pagesize))
        throw new Exception(ExceptionMessages::InvalidPageSizeType, ExceptionCodes::InvalidPageSizeType);
        else if ( Validator::isLowerThan($pagesize, 0, true) )
        throw new Exception(ExceptionMessages::MissingPageSizeNegativeValue, ExceptionCodes::MissingPageSizeNegativeValue);
        else if ( Validator::isGreaterThan($pagesize, Parameters::MaxPageSize) )
        throw new Exception(ExceptionMessages::InvalidPageSizeNumber, ExceptionCodes::InvalidPageSizeNumber);
        else
        $pagesize = Validator::toInteger($pagesize);

        return $pagesize;
    }
    
}
?>