<?php

class UserRoles {

    private static $Permissions = array(

    //    'school_committees'   => array(
    //                                        'GET' => array('USER', 'ADMIN'),
    //                                        'POST' => array('ADMIN'),
    //                                        'PUT' => array('ADMIN'),
    //                                        'DELETE' => array('ADMIN'),
    //                                        ) ,
    //    'circuit_types'      => array(
    //                                        'GET' => array('USER', 'ADMIN'),
    //                                        'POST' => array('ADMIN'),
    //                                        'PUT' => array('ADMIN'),
    //                                        'DELETE' => array('ADMIN')
    //                                        ) ,
        'sources'                       => array(
                                                    'GET' => array('USER', 'ADMIN'),
                                                    'POST' => array('ADMIN'),
                                                    'PUT' => array('ADMIN'),
                                                    'DELETE' => array('ADMIN')
                                                 ),
        'states'                         => array(
                                                    'GET' => array('USER', 'ADMIN'),
                                                    'POST' => array('ADMIN'),
                                                    'PUT' => array('ADMIN'),
                                                    'DELETE' => array('ADMIN')
                                                 ),
        'relation_types'                 => array(
                                                    'GET' => array('USER', 'ADMIN'),
                                                    'POST' => array('ADMIN'),
                                                    'PUT' => array('ADMIN'),
                                                    'DELETE' => array('ADMIN')
                                                 ),
        'categories'                     => array(
                                                    'GET' => array('USER', 'ADMIN'),
                                                    'POST' => array('ADMIN'),
                                                    'PUT' => array('ADMIN'),
                                                    'DELETE' => array('ADMIN')
                                                 ),
        'prefectures'                    => array(
                                                    'GET' => array('USER', 'ADMIN'),
                                                    'POST' => array('ADMIN'),
                                                    'PUT' => array('ADMIN'),
                                                    'DELETE' => array('ADMIN')
                                                 ),
        'tax_offices'                    => array(
                                                    'GET' => array('USER', 'ADMIN'),
                                                    'POST' => array('ADMIN'),
                                                    'PUT' => array('ADMIN'),
                                                    'DELETE' => array('ADMIN')
                                                 ),
        'special_types'                  => array(
                                                    'GET' => array('USER', 'ADMIN'),
                                                    'POST' => array('ADMIN'),
                                                    'PUT' => array('ADMIN'),
                                                    'DELETE' => array('ADMIN')
                                                 ),
        'legal_characters'               => array(
                                                    'GET' => array('USER', 'ADMIN'),
                                                    'POST' => array('ADMIN'),
                                                    'PUT' => array('ADMIN'),
                                                    'DELETE' => array('ADMIN')
                                                 ),
        'orientation_types'              => array(
                                                    'GET' => array('USER', 'ADMIN'),
                                                    'POST' => array('ADMIN'),
                                                    'PUT' => array('ADMIN'),
                                                    'DELETE' => array('ADMIN')
                                                 ),
        'operation_shifts'               => array(
                                                    'GET' => array('USER', 'ADMIN'),
                                                    'POST' => array('ADMIN'),
                                                    'PUT' => array('ADMIN'),
                                                    'DELETE' => array('ADMIN')
                                                 ),
        'unit_types'                     => array(
                                                    'GET' => array('USER', 'ADMIN'),
                                                    'POST' => array('ADMIN'),
                                                    'PUT' => array('ADMIN'),
                                                    'DELETE' => array('ADMIN')
                                                 ),
        'education_levels'               => array(
                                                    'GET' => array('USER', 'ADMIN'),
                                                    'POST' => array('ADMIN'),
                                                    'PUT' => array('ADMIN'),
                                                    'DELETE' => array('ADMIN')
                                                 ),
        'region_edu_admins'              => array(
                                                    'GET' => array('USER', 'ADMIN'),
                                                    'POST' => array('ADMIN'),
                                                    'PUT' => array('ADMIN'),
                                                    'DELETE' => array('ADMIN')
                                                 ),
        'implementation_entities'        => array(
                                                    'GET' => array('USER', 'ADMIN'),
                                                    'POST' => array('ADMIN'),
                                                    'PUT' => array('ADMIN'),
                                                    'DELETE' => array('ADMIN')
                                                 ),
        'cpes'                           => array(
                                                    'GET' => array('USER', 'ADMIN')
                                                 ),
        'ldaps'                          => array(
                                                    'GET' => array('USER', 'ADMIN')
                                                 ),
        'edu_admins'                     => array(
                                                    'GET' => array('USER', 'ADMIN'),
                                                    'POST' => array('ADMIN'),
                                                    'PUT' => array('ADMIN'),
                                                    'DELETE' => array('ADMIN')
                                                 ),
        'worker_specializations'         => array(
                                                    'GET' => array('USER', 'ADMIN'),
                                                    'POST' => array('ADMIN'),
                                                    'PUT' => array('ADMIN'),
                                                    'DELETE' => array('ADMIN')
                                                 ),
        'worker_positions'               => array(
                                                    'GET' => array('USER', 'ADMIN'),
                                                    'POST' => array('ADMIN'),
                                                    'PUT' => array('ADMIN'),
                                                    'DELETE' => array('ADMIN')
                                                 ),
        'transfer_areas'                 => array(
                                                    'GET' => array('USER', 'ADMIN'),
                                                    'POST' => array('ADMIN'),
                                                    'PUT' => array('ADMIN'),
                                                    'DELETE' => array('ADMIN')
                                                 ),
        'municipalities'                 => array(
                                                    'GET' => array('USER', 'ADMIN'),
                                                    'POST' => array('ADMIN'),
                                                    'PUT' => array('ADMIN'),
                                                    'DELETE' => array('ADMIN')
                                                 ),
        'municipality_communities'       => array(
                                                    'GET' => array('USER', 'ADMIN'),
                                                    'POST' => array('ADMIN'),
                                                    'PUT' => array('ADMIN'),
                                                    'DELETE' => array('ADMIN')
                                                 ),
        'workers'                        => array(
                                                    'GET' => array('USER', 'ADMIN'),
                                                    'POST' => array('ADMIN'),
                                                    'PUT' => array('ADMIN'),
                                                    //'DELETE' => array('ADMIN')
                                                 ),
        'transfer_area_municipalities'   => array(
                                                    'GET' => array('USER', 'ADMIN'),
                                                    'POST' => array('ADMIN'),
                                                    'PUT' => array('ADMIN'),
                                                    'DELETE' => array('ADMIN'),
                                                 ),
    //    'circuits'       => array(
    //                                        'GET' => array('USER', 'ADMIN'),
    //                                        'POST' => array('ADMIN'),
    //                                        'PUT' => array('ADMIN'),
    //                                        'DELETE' => array('ADMIN'),
    //                                        ) ,
        'unit_workers'                   => array(
                                                    'GET' => array('USER', 'ADMIN'),
                                                    'POST' => array('ADMIN'),
                                                    'PUT' => array('ADMIN'),
                                                    'DELETE' => array('ADMIN')
                                                 ),
        'relations'                      => array(
                                                    'GET' => array('USER', 'ADMIN'),
                                                    'POST' => array('ADMIN'),
                                                    'PUT' => array('ADMIN'),
                                                    'DELETE' => array('ADMIN')
                                                 ),
    //    'connections'    => array(
    //                                        'GET' => array('USER', 'ADMIN'),
    //                                        'POST' => array('USER', 'ADMIN'),
    //                                        'PUT' => array('USER', 'ADMIN'),
    //                                        'DELETE' => array('USER', 'ADMIN'),
    //                                        ) ,
        'units'                          => array(
                                                    'GET' => array('USER', 'ADMIN', 'GUEST'),
                                                    'POST' => array('ADMIN'),
                                                    'PUT' => array('ADMIN'),
                                                    //'DELETE' => array('ADMIN')
                                                 ),
    //    'levels'        => array(
    //                                        'GET' => array('USER', 'ADMIN'),
    //                                        'POST' => array('ADMIN'),
    //                                        'PUT' => array('ADMIN'),
    //                                        'DELETE' => array('ADMIN'),
    //                                        ) ,
    //    'groups' => array(
    //                                        'GET' => array('USER', 'ADMIN'),
    //                                        'POST' => array('ADMIN'),
    //                                        'PUT' => array('ADMIN'),
    //                                        'DELETE' => array('ADMIN'),
    //                                        ) ,

        'unit_dns'                       => array(
                                                    'GET' => array('USER', 'ADMIN'),
                                                    'POST' => array('ADMIN'),
                                                    'PUT' => array('ADMIN'),
                                                    'DELETE' => array('ADMIN')
                                                 ),
    //    'unit_network_subnet_types' => array(
    //                                        'GET' => array('USER', 'ADMIN'),
    //                                        'POST' => array('ADMIN'),
    //                                        'PUT' => array('ADMIN'),
    //                                        'DELETE' => array('ADMIN'),
    //                                        ) ,
    //    'unit_network_subnets' => array(
    //                                        'GET' => array('USER', 'ADMIN'),
    //                                        'POST' => array('ADMIN'),
    //                                        'PUT' => array('ADMIN'),
    //                                        'DELETE' => array('ADMIN'),
    //                                        ) ,
    //    'unit_network_objects' => array(
    //                                        'GET' => array('USER', 'ADMIN'),
    //                                        'POST' => array('ADMIN'),
    //                                        'PUT' => array('ADMIN'),
    //                                        'DELETE' => array('ADMIN'),
    //                                        ) ,
    //    'connection_unit_network_subnets' => array(
    //                                        'GET' => array('USER', 'ADMIN'),
    //                                        'POST' => array('USER', 'ADMIN'),
    //                                        'PUT' => array('USER', 'ADMIN'),
    //                                        'DELETE' => array('USER', 'ADMIN'),
    //                                        ) ,
        'statistic_units'                => array(
                                                    'GET' => array('USER', 'ADMIN')                                   
                                                 ),
        'ext_log_entries'                => array(
                                                    'GET' => array('USER', 'ADMIN')                                   
                                                 ),
        'check_required_values'          => array(
                                                    'GET' => array('USER', 'ADMIN')                                   
                                                 ),
        'crm_data'                       => array(
                                                    'GET' => array('USER', 'ADMIN')                                   
                                                 ),
        'ldap_entries'                   => array(
                                                    'GET' => array('USER', 'ADMIN')                                   
                                                 ),
    //    'units_old'                    => array(
    //                                              'GET' => array('USER', 'ADMIN', 'GUEST')                                   
    //                                           ),
        'del_ext_log'                    => array(
                                                    'GET' => array('ADMIN')                                   
                                                 ),
        );

    /**
     * Check if user has role permissions to method(GET,POST,PUT,DELETE) and functions(api_route_name) 
     * 
     * @param type $controller The controller set by user.
     * @param string $method The method set by user.
     * @param array $user Ldap user attributes.
     * 
     * @return boolean True if user has roles permission False if not
     * @throws Exception(ExceptionMessages::UserNoPermissions , ExceptionCodes::UserNoPermissions)
     */
    public static function checkUserRolePermissions($controller, $method, $user){

       if (array_key_exists($controller, UserRoles::$Permissions)) {
            if ( in_array( UserRoles::getRole($user) , UserRoles::$Permissions[$controller][$method] ) ) {
                //return UserRoles::$Permissions[$controller][$method];
                return true;
            } else {
                throw new Exception(ExceptionMessages::UserNoPermissions, ExceptionCodes::UserNoPermissions);
            }
       }
       return false;
   }

    /**
     * Set user role
     * 
     * @param array $user Ldap user attributes
     * 
     * @return string The user role (GUEST|ADMIN|USER)
     */
     public static function getRole($user) { 
        $admin_uid = array("ktsiolis","sus_ws","crm_ws","dns_ws");
        //var_dump($user['memberof'][0]);

        if(!isset($user)) {
            return 'GUEST';
        } else if(isset($user['memberof']) && isset($user['uid']) && str_replace(' ', '', $user['memberof'][0]) == 'cn=Admins,ou=teiath,ou=partners,ou=units,dc=sch,dc=gr' && in_array($user['uid'][0],$admin_uid)) {
           return 'ADMIN';
        }
        return 'USER';
    }

}
?>
