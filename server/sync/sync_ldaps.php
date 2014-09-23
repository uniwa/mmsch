<?php
require_once('system/includes.php');

class LdapSync {
    public function syncLdaps() {
        global $ldapOptions, $entityManager;
        $ldap = new \Zend\Ldap\Ldap($ldapOptions);
        //$routers = $ldap->search('(&(objectClass=*)(UMDOBJECT=router))', null, \Zend\Ldap\Ldap::SEARCH_SCOPE_ONE);
        $this->performOfficialAccSearch($ldap);
        echo 'search'; die();
    }

    protected function performOfficialAccSearch($ldap) {
        $pageSize = 100;
        $count = 0;
        $cookie = '';
        do {
            ldap_control_paged_result($ldap->getResource(), $pageSize, true, $cookie);
            //$officialAccts = $ldap->search('(&(objectClass=*)(physicalDeliveryOfficeName=ΕΠΙΣΗΜΟΣ ΛΟΓΑΡΙΑΣΜΟΣ))', null, \Zend\Ldap\Ldap::SEARCH_SCOPE_ONE);
            $result  = ldap_search($ldap->getResource(), null, '(&(objectClass=*)(physicalDeliveryOfficeName=ΕΠΙΣΗΜΟΣ ΛΟΓΑΡΙΑΣΜΟΣ))');
            $entries = ldap_get_entries($ldap->getResource(), $result);
            var_dump($entries);
            foreach ($entries as $e) {
                $count++;
            }
            //$ldapUnit = $ldap->getEntry($acc['l'][0]);
            ldap_control_paged_result_response($ldap->getResource(), $result, $cookie);
        } while($cookie !== null && $cookie != '');
        var_dump($count); die();
    }
}
?>