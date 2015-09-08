<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DEPRECATED
 */

/**
 * **Διαγραφή Log Συγχρονισμού**
 *
 * 
 */
function DeleteExtLog() {
    
    global $entityManager, $app;

    $qb = $entityManager->createQueryBuilder();
    $result = array();  

    $result["data"] = array();
    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();    

    try {

//$page - $pagesize - $ordertype - $orderby ====================================
       $page = 1;
       $pagesize = 1000;
       $ordertype =  Filters::getOrderType($ordertype, $params);
       $orderby = "el.id";

//DELETION CASE1 (lastUpdate)

        //lastUpdate============================================================
        CRUDUtils::setSearchFilter($qb, 'a:1:{s:10:"lastUpdate"', "el", "data", 'STARTWITH', ExceptionMessages::InvalidUnitLastUpdateType, ExceptionCodes::InvalidUnitLastUpdateType);    
  
//DELETION CASE2 (studentsCount,groupsCount,levelsCount)

        //studentsCount=========================================================
        //CRUDUtils::setSearchFilter($qb, 'a:3:{s:13:"studentsCount"', "el", "data", 'STARTWITH', ExceptionMessages::InvalidUnitStudentsCountType, ExceptionCodes::InvalidUnitStudentsCountType);    

        //groupsCount===========================================================
        //CRUDUtils::setSearchFilter($qb, 's:11:"groupsCount"', "el", "data", 'CONTAINALL', ExceptionMessages::InvalidUnitGroupsCountType, ExceptionCodes::InvalidUnitGroupsCountType);  

        //levelsCount===========================================================
        //CRUDUtils::setSearchFilter($qb, 's:11:"levelsCount"', "el", "data", 'CONTAINALL', ExceptionMessages::InvalidUnitLevelsCountType, ExceptionCodes::InvalidUnitLevelsCountType); 
    
//DELETION CASE3 (studentsCount,groupsCount,levelsCount,lastUpdate)

        //studentsCount=========================================================
        //CRUDUtils::setSearchFilter($qb, 'a:4:{s:13:"studentsCount"', "el", "data", 'STARTWITH', ExceptionMessages::InvalidUnitStudentsCountType, ExceptionCodes::InvalidUnitStudentsCountType);

        //groupsCount===========================================================
        //CRUDUtils::setSearchFilter($qb, 's:11:"groupsCount"', "el", "data", 'CONTAINALL', ExceptionMessages::InvalidUnitGroupsCountType, ExceptionCodes::InvalidUnitGroupsCountType);  

        //levelsCount===========================================================
        //CRUDUtils::setSearchFilter($qb, 's:11:"levelsCount"', "el", "data", 'CONTAINALL', ExceptionMessages::InvalidUnitLevelsCountType, ExceptionCodes::InvalidUnitLevelsCountType);  

        //lastUpdate============================================================
        //CRUDUtils::setSearchFilter($qb, 's:10:"lastUpdate"', "el", "data", 'CONTAINALL', ExceptionMessages::InvalidUnitLastUpdateType, ExceptionCodes::InvalidUnitLastUpdateType); 
    
//DELETION CASE5 (areaTeamNumber,studentsCount,groupsCount,levelsCount,lastUpdate)
        
        //areaTeamNumber========================================================
        //CRUDUtils::setSearchFilter($qb, 'a:5:{s:14:"areaTeamNumber"', "el", "data", 'STARTWITH', ExceptionMessages::InvalidUnitAreaTeamNumberType, ExceptionCodes::InvalidUnitAreaTeamNumberType);
        
        //studentsCount=========================================================
        //CRUDUtils::setSearchFilter($qb, 's:13:"studentsCount"', "el", "data", 'CONTAINALL', ExceptionMessages::InvalidUnitStudentsCountType, ExceptionCodes::InvalidUnitStudentsCountType);

        //groupsCount===========================================================
        //CRUDUtils::setSearchFilter($qb, 's:11:"groupsCount"', "el", "data", 'CONTAINALL', ExceptionMessages::InvalidUnitGroupsCountType, ExceptionCodes::InvalidUnitGroupsCountType);  

        //levelsCount===========================================================
        //CRUDUtils::setSearchFilter($qb, 's:11:"levelsCount"', "el", "data", 'CONTAINALL', ExceptionMessages::InvalidUnitLevelsCountType, ExceptionCodes::InvalidUnitLevelsCountType);  

        //lastUpdate============================================================
        //CRUDUtils::setSearchFilter($qb, 's:10:"lastUpdate"', "el", "data", 'CONTAINALL', ExceptionMessages::InvalidUnitLastUpdateType, ExceptionCodes::InvalidUnitLastUpdateType); 

       
//execution=====================================================================
        $qb->select('el');
        $qb->from('ExtLogEntries','el');
        $qb->orderBy($orderby, $ordertype);

//pagination and results========================================================      
        $results = new Doctrine\ORM\Tools\Pagination\Paginator($qb->getQuery());
        $result["total"] = count($results);
        $results->getQuery()->setFirstResult($pagesize * ($page-1));
        $results->getQuery()->setMaxResults($pagesize);
        echo $result["SQL"] =  trim(preg_replace('/\s\s+/', ' ', $qb->getQuery()->getSQL()));
                
//data results==================================================================
        $count = 0;
        $entries = array();

        foreach ($results as $extlog)
        {
            $unit_data = unserialize($extlog->getData());
            
      if ((count($unit_data)== 1) && (key_exists('lastUpdate', $unit_data))) {
//      if ((count($unit_data)== 3) && (count(array_diff(array("studentsCount","groupsCount","levelsCount"), array_keys($unit_data))) == 0)) { 
//      if ((count($unit_data)== 4) && (count(array_diff(array("studentsCount","groupsCount","levelsCount","lastUpdate"), array_keys($unit_data))) == 0)) { 
//      if ((count($unit_data)== 5) && (count(array_diff(array("areaTeamNumber","studentsCount","groupsCount","levelsCount","lastUpdate"), array_keys($unit_data))) == 0)) { 
           
            $result["data"][] = array(
                                        "id"            => $extlog->getId(),
                                        "action"        => $extlog->getAction(),
                                        "logged_at"     => $extlog->getLoggedAt() instanceof \DateTime ? $extlog->getLoggedAt()->format('Y-m-d H:i:s') : null,
                                        "object_id"     => $extlog->getObjectId(),
                                        "object_class"  => $extlog->getObjectClass(),
                                        "version"       => $extlog->getVersion(),
                                        "data"          => unserialize($extlog->getData()),
                                        "username"      => $extlog->getUsername(),
                                        "ip"            => $extlog->getIp()
                                    );
            
            $entries[] = $extlog->getId(); 
          
            $count++;
           }
        }
        $result["count"] = $count;
        
//delete ext log entries========================================================
       foreach ($entries as $entry){
           $result["comments"][] = 'Delete entry with id = '.$entry;
           $DeleteExtLogEntry = $entityManager->find('ExtLogEntries', $entry);
           //delete from db=====================================================
//           $entityManager->remove($DeleteExtLogEntry);
//           $entityManager->flush($DeleteExtLogEntry);
       }
        
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