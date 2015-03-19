<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package GET
 */
 
header("Content-Type: text/html; charset=utf-8");

function GetMunicipalityCommunities( $municipality_community_id, $name, $municipality,
                                     $pagesize, $page, $searchtype, $ordertype, $orderby ) {
  
    global $entityManager, $app;

    $qb = $entityManager->createQueryBuilder();
    $result = array();  

    $result["data"] = array();
    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    
    try {
 
//user permissions==============================================================
//not required 
           
//$page - $pagesize - $searchtype - $ordertype =================================
       $page = Pagination::getPage($page, $params);
       $pagesize = Pagination::getPagesize($pagesize, $params, true);     
       $searchtype = Filters::getSearchType($searchtype, $params);
       $ordertype =  Filters::getOrderType($ordertype, $params);
    
 //$orderby=====================================================================
       $columns = array(
                            "mc.municipalityCommunityId"   => "municipality_community_id",
                            "mc.name"                      => "name",
                            "m.municipalityId"             => "municipality_id",
                            "m.name"                       => "municipality_name"
                        );
       
       if ( Validator::Missing('orderby', $params) )
            $orderby = "municipality_community_id";
        else
        {   
            $orderby = Validator::ToLower($orderby);
            if (!in_array($orderby, $columns))
                throw new Exception(ExceptionMessages::InvalidOrderBy." : ".$orderby, ExceptionCodes::InvalidOrderBy);
        } 
        
//$municipality_community_id====================================================
        if (Validator::Exists('municipality_community_id', $params)){
            CRUDUtils::setFilter($qb, $municipality_community_id, "mc", "municipalityCommunityId", "municipalityCommunityId", "id", ExceptionMessages::InvalidMunicipalityCommunityIDType, ExceptionCodes::InvalidMunicipalityCommunityIDType);
        } 

//$name=========================================================================
        if (Validator::Exists('name', $params)){
            CRUDUtils::setSearchFilter($qb, $name, "mc", "name", $searchtype, ExceptionMessages::InvalidMunicipalityCommunityNameType, ExceptionCodes::InvalidMunicipalityCommunityNameType);    
        }  

//$municipality=================================================================
        if (Validator::Exists('municipality', $params)){
            CRUDUtils::setFilter($qb, $municipality, "m", "municipalityId", "name", "id,value", ExceptionMessages::InvalidMunicipalityType, ExceptionCodes::InvalidMunicipalityType);
        } 
        
//execution=====================================================================
        $qb->select('mc');
        $qb->from('MunicipalityCommunities', 'mc');
        $qb->leftjoin('mc.municipality', 'm');
        $qb->orderBy(array_search($orderby, $columns), $ordertype);

//pagination and results========================================================      
        $results = new Doctrine\ORM\Tools\Pagination\Paginator($qb->getQuery());
        $result["total"] = count($results);
        $results->getQuery()->setFirstResult($pagesize * ($page-1));
        $pagesize!==Parameters::AllPageSize ? $results->getQuery()->setMaxResults($pagesize) : null;

//data results==================================================================       
        $count = 0;
        
        foreach ($results as $municipalityCommunity)
        {

            $result["data"][] = array(
                                        "municipality_community_id"         => $municipalityCommunity->getMunicipalityCommunityId(),
                                        "municipality_community"            => $municipalityCommunity->getName(),
                                        "myschoolMunicipalityCommunityId"   => $municipalityCommunity->getMyschoolMunicipalityCommunityId(),    
                                        "municipality_id"                   => Validator::IsNull($municipalityCommunity->getMunicipality()) ? Validator::ToNull() : $municipalityCommunity->getMunicipality()->getMunicipalityId(),
                                        "municipality_name"                 => Validator::IsNull($municipalityCommunity->getMunicipality()) ? Validator::ToNull() : $municipalityCommunity->getMunicipality()->getName()
                                     );
            $count++;
        }
        $result["count"] = $count;
   
//pagination results============================================================     
        $maxPage = Pagination::getMaxPage($result["total"],$page,$pagesize);
        $pagination = array( "page" => $page,   
                             "maxPage" => $maxPage, 
                             "pagesize" => $pagesize 
                            );    
        $result["pagination"]=$pagination;
        
//result_messages===============================================================      
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    } 
    
//debug=========================================================================
   if ( Validator::IsTrue( $params["debug"]  ) )
   {
        $result["DQL"] =  trim(preg_replace('/\s\s+/', ' ', $qb->getDQL()));
        $result["SQL"] =  trim(preg_replace('/\s\s+/', ' ', $qb->getQuery()->getSQL()));
   }
    
    return $result;
    
}

?>