<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package GET
 */
 
header("Content-Type: text/html; charset=utf-8");


function GetLdapEntries( $mm_id ) {
    
    global  $app, $ldapOptions;
    $result = array();  

    $result["data"] = array();
    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
   
    try {
        
        //$mm_id================================================================
        $fMMID = CRUDUtils::checkIDParam('mm_id', $params, $mm_id, 'UnitMMID');

        //ldap query found unit=================================================
        $ldap = new \Zend\Ldap\Ldap($ldapOptions);
        $lresult = $ldap->search('(gsnRegistryCode='.$fMMID.')', 'dc=sch,dc=gr', \Zend\Ldap\Ldap::SEARCH_SCOPE_SUB);
        
        if ($lresult->count() == 1)
             $result["ldap_gsnRegistryCode_found"] = 'yes';
        else if ($lresult->count() == 0) 
            throw new Exception(ExceptionMessages::NotFoundLdapEntryMMIDValue, ExceptionCodes::NotFoundLdapEntryMMIDValue); 
        else 
            throw new Exception(ExceptionMessages::DuplicateLdapEntryMMIDValue, ExceptionCodes::DuplicateLdapEntryMMIDValue);
        
        //check if unit has l attribute
        $rows = iterator_to_array($lresult);
        if (Validator::IsNull($rows[0]["dn"])) {
           throw new Exception(ExceptionMessages::NotFoundLdapEntryDnAttributeValue, ExceptionCodes::NotFoundLdapEntryDnAttributeValue);
        } else {
           $dn = $rows[0]["dn"];
        }
        
//        $result["data"][] = array ( "description" => $rows[0]["description"][0],
//                                    "gsnRegistryCode" => $rows[0]["gsnregistrycode"][0],
//                                    "dn" => $dn );
                
        //ldap query found entries==============================================
        $filter = '(&(l='.$dn.')(|(physicalDeliveryOfficeName=ΕΠΙΣΗΜΟΣ ΛΟΓΑΡΙΑΣΜΟΣ)(physicalDeliveryOfficeName;lang-en=EPISIMOS LOGARIASMOS)(UMDOBJECT=Router)(UMDOBJECT=ADSLaccount)))';
        $lresult = $ldap->search($filter, 'dc=sch,dc=gr', \Zend\Ldap\Ldap::SEARCH_SCOPE_SUB);
        $rows = iterator_to_array($lresult);

            $rows = array_map(function($prow) {
                                                $row = array();
                                                $row['cn'] = $prow['cn'][0];
                                                $row['uid'] = $prow['uid'][0];
                                                return $row;
                                              }, $rows);

        foreach ($rows as $row)
        {
            $result["data"][] = array(
                    "ldap_entry_cn"           => $row["cn"],
                    "ldap_entry_uid"          => $row["uid"]
                );
        }

//result_messages===============================================================      
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    } 
    return $result;
}
?>