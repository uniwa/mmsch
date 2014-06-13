<?php

class UserRoles {

private static $Permissions = array(

    'school_committees'            => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'circuit_types'      => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'sources'        => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'states'           => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'relation_types'     => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'categories'          => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'prefectures'     => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'tax_offices'        => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'special_types'                => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'legal_characters'   => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'orientation_types'              => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'operation_shifts'         => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'unit_types'    => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'education_levels'      => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'region_edu_admins'  => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'implementation_entities'       => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'cpes'                  => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'ldaps'=> array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'edu_admins'   => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'worker_specializations'               => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'worker_positions'             => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'transfer_areas'=> array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'municipalities'         => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'workers'        => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'transfer_area_municipalities'           => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'circuits'       => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'unit_workers'           => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'relations'   => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'transitions'           => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'connections'    => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'units'         => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'levels'        => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    'groups' => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,

    'unit_dns' => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,

    'unit_network_subnet_types' => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,

    'unit_network_subnets' => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,

    'unit_network_objects' => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,

    'connection_unit_network_subnets' => array(
                                        'GET' => array('ANY'),
                                        'POST' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'PUT' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        'DELETE' => array('ΠΡΟΣΩΠΙΚΟ ΠΣΔ'),
                                        ) ,
    );


 public static function checkUserRolePermissions($controller,$method,$user_role){

    if (array_key_exists($controller, UserRoles::$Permissions)) {
         if (in_array( 'ANY' , UserRoles::$Permissions[$controller][$method] ) ||
                 in_array( $user_role , UserRoles::$Permissions[$controller][$method] ) ) {
             //return UserRoles::$Permissions[$controller][$method];
             return true;
         } else {
             throw new Exception(ExceptionMessages::UserNoPermissions, ExceptionCodes::UserNoPermissions);
         }
    }
    return false;
}

}
?>