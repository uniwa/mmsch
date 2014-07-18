<?php
header("Content-Type: text/html; charset=utf-8");
header('Content-Type: application/json');

enableCORS();

chdir("../server");

require_once('system/includes.php');
require_once('libs/Slim/Slim.php');

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->config('debug', true);

$app->map('/school_committees', Authentication, UserRolesPermission, SchoolCommitteesController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/circuit_types', Authentication, UserRolesPermission, CircuitTypesController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/sources', Authentication, UserRolesPermission, SourcesController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/states', Authentication, UserRolesPermission, StatesController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/relation_types', Authentication, UserRolesPermission, RelationTypesController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/categories', Authentication, UserRolesPermission, CategoriesController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/prefectures', Authentication, UserRolesPermission, PrefecturesController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/tax_offices', Authentication, UserRolesPermission, TaxOfficesController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/special_types', Authentication, UserRolesPermission, SpecialTypesController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/legal_characters', Authentication, UserRolesPermission, LegalCharactersController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/orientation_types', Authentication, UserRolesPermission, OrientationTypesController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/operation_shifts', Authentication, UserRolesPermission, OperationShiftsController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/unit_types', Authentication, UserRolesPermission, UnitTypesController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/education_levels', Authentication, UserRolesPermission, EducationLevelsController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/region_edu_admins', Authentication, UserRolesPermission, RegionEduAdminsController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/implementation_entities', Authentication, UserRolesPermission, ImplementationEntitiesController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/cpes', Authentication, UserRolesPermission, CpesController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/ldaps', Authentication, UserRolesPermission, LDapsController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/edu_admins', Authentication, UserRolesPermission, EduAdminsController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/worker_specializations', Authentication, UserRolesPermission, WorkerSpecializationsController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/worker_positions', Authentication, UserRolesPermission, WorkerPositionsController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/transfer_areas', Authentication, UserRolesPermission, TransferAreasController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/municipalities', Authentication, UserRolesPermission, MunicipalitiesController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/workers', Authentication, UserRolesPermission, WorkersController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/transfer_area_municipalities', Authentication, UserRolesPermission, TransferAreaMunicipalitiesController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/circuits', Authentication, UserRolesPermission, CircuitsController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/unit_workers', Authentication, UserRolesPermission, UnitWorkersController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/relations', Authentication, UserRolesPermission, RelationsController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/transitions', Authentication, UserRolesPermission, TransitionsController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/connections', Authentication, UserRolesPermission, ConnectionsController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/units', Authentication, UserRolesPermission, UnitsController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/levels', Authentication, UserRolesPermission, LevelsController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/groups', Authentication, UserRolesPermission, GroupsController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/unit_dns', Authentication, UserRolesPermission, UnitDnsController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/unit_network_subnet_types', Authentication, UserRolesPermission, UnitNetworkSubnetTypesController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/unit_network_subnets', Authentication, UserRolesPermission, UnitNetworkSubnetsController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/unit_network_objects', Authentication, UserRolesPermission, UnitNetworkObjectsController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);
$app->map('/connection_unit_network_subnets', Authentication, UserRolesPermission, ConnectionUnitNetworkSubnetsController)
    ->via(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE);

$app->get('/docs/*', function () use ($app) {
    $app->redirect("http://mmsch.teiath.gr/docs/");
});

$app->notFound(function () use ($app)
{
    $controller = $app->environment();
    $controller = substr($controller["PATH_INFO"], 1);
    
    try
    {
       if ( !in_array( strtoupper($app->request()->getMethod()), array(MethodTypes::GET, MethodTypes::POST, MethodTypes::PUT, MethodTypes::DELETE)))
            throw new Exception(ExceptionMessages::MethodNotFound, ExceptionCodes::MethodNotFound);
        else
            throw new Exception(ExceptionMessages::MethodNotFound, ExceptionCodes::MethodNotFound);
    }
    catch (Exception $e)
    {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$app->request()->getMethod()."][".$controller."]:".$e->getMessage();
    }

    echo toGreek( json_encode( $result ) );
});

$app->run();

//==============================================================================

function enableCORS() {
    if (isset($_SERVER['HTTP_ORIGIN'])) {
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400'); // cache for 1 day
    }
    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

    }
}

function PrepareResponse()
{
    global $app;

    $app->contentType('application/json');
    $app->response()->headers()->set('Content-Type', 'application/json; charset=utf-8');
    $app->response()->headers()->set('X-Powered-By', 'ΤΕΙ Αθήνας');
    $app->response()->setStatus(200);
}

function urlToArray($params)
{
    $items = array();
    foreach (explode('&', $params) as $chunk) {
        $param = explode("=", $chunk);
        $items = array_merge($items, array($param[0] => urldecode($param[1])));
    }
    return $items;

}

function loadParameters()
{
    global $app;

    if ($app->request->getBody())
    {
        if ( is_array( $app->request->getBody() ) )
            $params = $app->request->getBody();
        else if ( json_decode( $app->request->getBody() ) )
            $params = get_object_vars( json_decode($app->request->getBody(), false) );
        else
            $params = urlToArray($app->request->getBody() );
    }
    else
    {
        if ( json_decode( key($_REQUEST) ) )
            $params = get_object_vars( json_decode(key($_REQUEST), false) );
        else
            $params = $_REQUEST;
    }


    // array to object
    //$params = json_decode (json_encode ($params), FALSE);

    //var_dump($params);

    return $params;
}

function Authentication()
{
    global $app;
    global $ldapOptions;

    try
    {
        if(isset($app->request->headers['Php-Auth-User']) && isset($app->request->headers['Php-Auth-Pw']) && $app->request->headers['Php-Auth-User'] != 'anonymous') {
            $apcKey = 'mm_auth_'.md5($app->request->headers['Php-Auth-User'].$app->request->headers['Php-Auth-Pw']);
            if(!($userObj = apc_fetch($apcKey))) {
                $ldap = new \Zend\Ldap\Ldap($ldapOptions);
                $ldap->bind('uid='.$app->request->headers['Php-Auth-User'].',ou=people,dc=sch,dc=gr', $app->request->headers['Php-Auth-Pw']);
                $result = $ldap->search('(&(objectClass=*)(uid='.$app->request->headers['Php-Auth-User'].'))', null, \Zend\Ldap\Ldap::SEARCH_SCOPE_ONE);
                if($result->count() == 1) {
                    $userObj = $result->getFirst();
                    apc_store($apcKey, $userObj, 3600); // Cache for 1 hour to prevent requests on every call
                } else {
                    throw new Exception(ExceptionMessages::UserAccesDenied, ExceptionCodes::UserAccesDenied); // Multiple users with this username?? Fail
                }
            }
            // userObj has all the user attributes now - We can check roles
            $app->request->user = $userObj;
        } else {
            // Guest access
        }
    }
    catch (Exception $e)
    {
        if($e instanceof \Zend\Ldap\Exception\LdapException) {
            $result["message"] = "[".$app->request()->getMethod()."][".__FUNCTION__."]:Invalid credentials";
        } else {
            $result["message"] = "[".$app->request()->getMethod()."][".__FUNCTION__."]:".$e->getMessage();
        }
        $result["status"] = $e->getCode();

        echo json_encode($result ? $result : array());

        $app->stop();
    }
}

function UserRolesPermission(){

    global $app;

    $controller = substr($app->request()->getPathInfo(),1);
    $method = $app->request()->getMethod();

    try {

        $check = UserRoles::checkUserRolePermissions($controller,$method,$app->request->user);
        $app->request->userRoles = UserRoles::getRole($app->request->user);

        if ($check!==true){
                    throw new Exception(ExceptionMessages::Unauthorized, ExceptionCodes::Unauthorized);
        }

    }
    catch (Exception $e)
    {
        $result["user"] = $app->request->user['uid'];
        $result["user_role"] = UserRoles::getRole($app->request->user);
        $result["status"] = $e->getCode();
        $result["message"] = "[".$method."][".$controller."]:".$e->getMessage();

        PrepareResponse();
        $app->response()->setBody( toGreek( json_encode( $result ) ) );
        $app->stop();
    }

}

function replace_unicode_escape_sequence($match) {
    return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UCS-2BE');
}

function toGreek($value)
{
    return preg_replace_callback('/\\\\u([0-9a-f]{4})/i', 'replace_unicode_escape_sequence', $value ? $value : array());
}

//======================================================================================================================
//= Functions
//======================================================================================================================

function SchoolCommitteesController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetSchoolCommittees(
                $params["school_committee"],
                $params["education_level"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}

function CircuitTypesController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetCircuitTypes(
                $params["circuit_type"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
        case MethodTypes::POST :
            $result = PostCircuitTypes(
                $params["circuit_type"]
            );
            break;
        case MethodTypes::PUT :
            $result = PutCircuitTypes(
                $params["circuit_type_id"],
                $params["circuit_type"]
            );
            break;
        case MethodTypes::DELETE :
            $result = DeleteCircuitTypes(
                $params["circuit_type_id"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}


function SourcesController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetSources(
                $params["source"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}


function StatesController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetStates(
                $params["state"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}



function RelationTypesController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetRelationTypes(
                $params["relation_type"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}



function CategoriesController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetCategories(
                $params["category"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}



function PrefecturesController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetPrefectures(
                $params["prefecture"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}



function TaxOfficesController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetTaxOffices(
                $params["tax_office"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}


function SpecialTypesController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetSpecialTypes(
                $params["special_type"],
                $params["category"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}


function LegalCharactersController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetLegalCharacters(
                $params["legal_character"],
                $params["category"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}


function OrientationTypesController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetOrientationTypes(
                $params["orientation_type"],
                $params["category"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}


function OperationShiftsController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetOperationShifts(
                $params["orientation_shift"],
                $params["category"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}



function UnitTypesController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetUnitTypes(
                $params["unit_type"],
                $params["category"],
                $params["education_level"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}


function EducationLevelsController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetEducationLevels(
                $params["education_level"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}



function RegionEduAdminsController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetRegionEduAdmins(
                $params["region_edu_admin"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}


function ImplementationEntitiesController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetImplementationEntities(
                $params["implementation_entity"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}


function CpesController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetCpes(
                $params["cpe"],
                $params["unit"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}



function LDapsController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetLDaps(
                $params["ldap"],
                $params["unit"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}


function EduAdminsController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetEduAdmins(
                $params["edu_admin"],
                $params["region_edu_admin"],
                $params["implementation_entity"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}


function WorkerSpecializationsController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetWorkerSpecializations(
                $params["worker_specialization"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}


function WorkerPositionsController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetWorkerPositions(
                $params["worker_position"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}


function TransferAreasController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetTransferAreas(
                $params["transfer_area"],
                $params["edu_admin"],
                $params["region_edu_admin"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}


function MunicipalitiesController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetMunicipalities(
                $params["municipality"],
                $params["prefecture"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}


function WorkersController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetWorkers(
                $params["worker"],
                $params["registry_no"],
                $params["worker_specialization"],
                $params["source"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
        case MethodTypes::POST :
            $parameters = array_keys($params);
            $result = PostWorkers(
                $params["registry_no"],
                $params["lastname"],
                $params["firstname"],
                $params["fathername"],
                $params["sex"],
                $params["tax_number"],
                $params["worker_specialization"],
                $params["source"]
            );
            break;
        case MethodTypes::PUT :
            $parameters = array_keys($params);
            $result = PutWorkers(
                $params["worker_id"],
                $params["registry_no"],
                $params["lastname"],
                $params["firstname"],
                $params["fathername"],
                $params["sex"],
                $params["tax_number"],
                $params["worker_specialization"],
                $params["source"]
            );
            break;
    }

    $app->response()->setStatus(200);
    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}



function TransferAreaMunicipalitiesController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetTransferAreaMunicipalities(
                $params["transfer_area"],
                $params["municipality"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}


function CircuitsController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetCircuits(
                $params["circuit"],
                $params["circuit_type"],
                $params["phone_number"],
                $params["unit"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
        case MethodTypes::POST :
            $result = PostCircuits(
                $params["mm_id"],
                $params["circuit_type_id"],
                $params["phone_number"],
                $params["status"],
                $params["activated_date"],
                $params["updated_date"],
                $params["deactivated_date"],
                $params["bandwidth"],
                $params["readspeed"],
                $params["paid_by_psd"]
            );
            break;
        case MethodTypes::PUT :
            $result = PutCircuits(
                $params["circuit_id"],
                $params["mm_id"],
                $params["circuit_type_id"],
                $params["phone_number"],
                $params["status"],
                $params["activated_date"],
                $params["updated_date"],
                $params["deactivated_date"],
                $params["bandwidth"],
                $params["readspeed"],
                $params["paid_by_psd"]
            );
            break;
        case MethodTypes::DELETE :
            $result = DeleteCircuits(
                $params["circuit_id"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}



function UnitWorkersController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetUnitWorkers(
                $params["unit"],
                $params["worker"],
                $params["worker_registry_no"],
                $params["worker_position"],
                $params["worker_specialization"],
                $params["source"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
        case MethodTypes::POST :
            $result = PostUnitWorkers(
                $params["mm_id"],
                $params["worker"],
                $params["worker_position"]
            );
            break;
        case MethodTypes::PUT :
            $result = PutUnitWorkers(
                $params["unit_worker_id"],
                $params["mm_id"],
                $params["worker"],
                $params["worker_position"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}


function RelationsController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetRelations(
                $params["host_unit"],
                $params["guest_unit"],
                $params["relation_type"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
// case MethodTypes::POST :
// $result = PostRelations(
// $params["host_mm_id,
// $params["guest_mm_id,
// $params["relation_state,
// $params["true_date,
// $params["true_fek,
// $params["false_date,
// $params["false_fek,
// $params["relation_type
// );
// break;
// case MethodTypes::PUT :
// $result = PutRelations(
// $params["relation_id,
// $params["host_mm_id,
// $params["guest_mm_id,
// $params["relation_state,
// $params["true_date,
// $params["true_fek,
// $params["false_date,
// $params["false_fek,
// $params["relation_type
// );
// break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}


function TransitionsController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetTransitions(
                $params["unit"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"]
            );
            break;
// case MethodTypes::POST :
// $result = PostTransitions(
// $params["mm_id"],
// $params-
// $params["transition_date,
// $params["from_state"],
// $params["to_state
// );
// break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}



function ConnectionsController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetConnections(
                $params["unit"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
        case MethodTypes::POST :
            $result = PostConnections(
                $params["mm_id"],
                $params["cpe_id"],
                $params["ldap_id"],
                $params["circuit_id"]
            );
            break;
        case MethodTypes::PUT :
            $result = PutConnections(
                $params["connection_id"],
                $params["cpe_id"],
                $params["ldap_id"],
                $params["circuit_id"]
            );
            break;
        case MethodTypes::DELETE :
            $result = DeleteConnections(
                $params["connection_id"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}



function LevelsController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetLevels(
                $params["level"],
                $params["unit"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}



function GroupsController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetGroups(
                $params["group"],
                $params["unit"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}


function UnitsController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetUnits(
                $params["mm_id"],
                $params["registry_no"],
                $params["gluc"],
                $params["source"],
                $params["name"],
                $params["special_name"],
                $params["state"],
                $params["region_edu_admin"],
                $params["edu_admin"],
                $params["implementation_entity"],
                $params["transfer_area"],
                $params["prefecture"],
                $params["municipality"],
                $params["education_level"],
                $params["phone_number"],
                $params["email"],
                $params["fax_number"],
                $params["street_address"],
                $params["postal_code"],
                $params["tax_number"],
                $params["tax_office"],
                $params["area_team_number"],
                $params["category"],
                $params["unit_type"],
                $params["operation_shift"],
                $params["legal_character"],
                $params["orientation_type"],
                $params["special_type"],
                $params["levels_count"],
                $params["groups_count"],
                $params["students_count"],
                $params["latitude"],
                $params["longitude"],
                $params["positioning"],
                $params["last_update"],
                $params["last_sync"],
                $params["comments"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
        case MethodTypes::POST :
            $parameters = array_keys($params);
            $result = PostUnits(
                in_array ("registry_no", $parameters) ? $params["registry_no"] : _MISSED_,
                in_array ("gluc", $parameters) ? $params["gluc"] : _MISSED_,
                in_array ("source", $parameters) ? $params["source"] : _MISSED_,
                in_array ("name", $parameters) ? $params["name"] : _MISSED_,
                in_array ("special_name", $parameters) ? $params["special_name"] : _MISSED_,
                in_array ("state", $parameters) ? $params["state"] : _MISSED_,
                in_array ("region_edu_admin", $parameters) ? $params["region_edu_admin"] : _MISSED_,
                in_array ("edu_admin", $parameters) ? $params["edu_admin"] : _MISSED_,
                in_array ("implementation_entity", $parameters) ? $params["implementation_entity"] : _MISSED_,
                in_array ("transfer_area", $parameters) ? $params["transfer_area"] : _MISSED_,
                in_array ("prefecture", $parameters) ? $params["prefecture"] : _MISSED_,
                in_array ("municipality", $parameters) ? $params["municipality"] : _MISSED_,
                in_array ("education_level", $parameters) ? $params["education_level"] : _MISSED_,
                in_array ("phone_number", $parameters) ? $params["phone_number"] : _MISSED_,
                in_array ("email", $parameters) ? $params["email"] : _MISSED_,
                in_array ("fax_number", $parameters) ? $params["fax_number"] : _MISSED_,
                in_array ("street_address", $parameters) ? $params["street_address"] : _MISSED_,
                in_array ("postal_code", $parameters) ? $params["postal_code"] : _MISSED_,
                in_array ("tax_number", $parameters) ? $params["tax_number"] : _MISSED_,
                in_array ("tax_office", $parameters) ? $params["tax_office"] : _MISSED_,
                in_array ("area_team_number", $parameters) ? $params["area_team_number"] : _MISSED_,
                in_array ("category", $parameters) ? $params["category"] : _MISSED_,
                in_array ("unit_type", $parameters) ? $params["unit_type"] : _MISSED_,
                in_array ("operation_shift", $parameters) ? $params["operation_shift"] : _MISSED_,
                in_array ("legal_character", $parameters) ? $params["legal_character"] : _MISSED_,
                in_array ("orientation_type", $parameters) ? $params["orientation_type"] : _MISSED_,
                in_array ("special_type", $parameters) ? $params["special_type"] : _MISSED_,
                in_array ("levels_count", $parameters) ? $params["levels_count"] : _MISSED_,
                in_array ("groups_count", $parameters) ? $params["groups_count"] : _MISSED_,
                in_array ("students_count", $parameters) ? $params["students_count"] : _MISSED_,
                in_array ("latitude", $parameters) ? $params["latitude"] : _MISSED_,
                in_array ("longitude", $parameters) ? $params["longitude"] : _MISSED_,
                in_array ("positioning", $parameters) ? $params["positioning"] : _MISSED_,
                in_array ("last_update", $parameters) ? $params["last_update"] : _MISSED_,
                in_array ("last_sync", $parameters) ? $params["last_sync"] : _MISSED_,
                in_array ("comments", $parameters) ? $params["comments"] : _MISSED_,
                in_array ("fek", $parameters) ? $params["fek"] : _MISSED_
            );
            break;
        case MethodTypes::PUT :
            $parameters = array_keys($params);
            $result = PutUnits(
                in_array ("mm_id", $parameters) ? $params["mm_id"] : _MISSED_,
                in_array ("registry_no", $parameters) ? $params["registry_no"] : _MISSED_,
                in_array ("gluc", $parameters) ? $params["gluc"] : _MISSED_,
                in_array ("source", $parameters) ? $params["source"] : _MISSED_,
                in_array ("name", $parameters) ? $params["name"] : _MISSED_,
                in_array ("special_name", $parameters) ? $params["special_name"] : _MISSED_,
                in_array ("state", $parameters) ? $params["state"] : _MISSED_,
                in_array ("region_edu_admin", $parameters) ? $params["region_edu_admin"] : _MISSED_,
                in_array ("edu_admin", $parameters) ? $params["edu_admin"] : _MISSED_,
                in_array ("implementation_entity", $parameters) ? $params["implementation_entity"] : _MISSED_,
                in_array ("transfer_area", $parameters) ? $params["transfer_area"] : _MISSED_,
                in_array ("prefecture", $parameters) ? $params["prefecture"] : _MISSED_,
                in_array ("municipality", $parameters) ? $params["municipality"] : _MISSED_,
                in_array ("education_level", $parameters) ? $params["education_level"] : _MISSED_,
                in_array ("phone_number", $parameters) ? $params["phone_number"] : _MISSED_,
                in_array ("email", $parameters) ? $params["email"] : _MISSED_,
                in_array ("fax_number", $parameters) ? $params["fax_number"] : _MISSED_,
                in_array ("street_address", $parameters) ? $params["street_address"] : _MISSED_,
                in_array ("postal_code", $parameters) ? $params["postal_code"] : _MISSED_,
                in_array ("tax_number", $parameters) ? $params["tax_number"] : _MISSED_,
                in_array ("tax_office", $parameters) ? $params["tax_office"] : _MISSED_,
                in_array ("area_team_number", $parameters) ? $params["area_team_number"] : _MISSED_,
                in_array ("category", $parameters) ? $params["category"] : _MISSED_,
                in_array ("unit_type", $parameters) ? $params["unit_type"] : _MISSED_,
                in_array ("operation_shift", $parameters) ? $params["operation_shift"] : _MISSED_,
                in_array ("legal_character", $parameters) ? $params["legal_character"] : _MISSED_,
                in_array ("orientation_type", $parameters) ? $params["orientation_type"] : _MISSED_,
                in_array ("special_type", $parameters) ? $params["special_type"] : _MISSED_,
                in_array ("levels_count", $parameters) ? $params["levels_count"] : _MISSED_,
                in_array ("groups_count", $parameters) ? $params["groups_count"] : _MISSED_,
                in_array ("students_count", $parameters) ? $params["students_count"] : _MISSED_,
                in_array ("latitude", $parameters) ? $params["latitude"] : _MISSED_,
                in_array ("longitude", $parameters) ? $params["longitude"] : _MISSED_,
                in_array ("positioning", $parameters) ? $params["positioning"] : _MISSED_,
                in_array ("last_update", $parameters) ? $params["last_update"] : _MISSED_,
                in_array ("last_sync", $parameters) ? $params["last_sync"] : _MISSED_,
                in_array ("comments", $parameters) ? $params["comments"] : _MISSED_,
                in_array ("fek", $parameters) ? $params["fek"] : _MISSED_
            );
            break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}

//##########################################################################################################################
// IP/DNS
//##########################################################################################################################

function UnitDnsController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetUnitDns(
                $params["unit_dns"],
                $params["unit_ext_dns"],
                $params["unit"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
        break;
        case MethodTypes::POST :
            $result = PostUnitDns(
                $params["unit_dns"],
                $params["unit_ext_dns"],
                $params["mm_id"]
            );
        break;
        case MethodTypes::PUT :
               $result = PutUnitDns(
                $params["unit_dns_id"],
                $params["unit_dns"],
                $params["unit_ext_dns"],
                $params["mm_id"]
            );
        break;
        case MethodTypes::DELETE :
               $result = DeleteUnitDns(
                $params["unit_dns_id"]
            );
        break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}

function UnitNetworkSubnetTypesController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetUnitNetworkSubnetTypes(
                $params["subnet_type"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
        break;
        case MethodTypes::POST :
            $result = PostUnitNetworkSubnetTypes(
                $params["subnet_type"]
            );
        break;
        case MethodTypes::PUT :
            $result = PutUnitNetworkSubnetTypes(
                $params["unit_network_subnet_type_id"],
                $params["subnet_type"]
            );
        break;
        case MethodTypes::DELETE :
            $result = DeleteUnitNetworkSubnetTypes(
                $params["unit_network_subnet_type_id"]
            );
        break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}

function UnitNetworkSubnetsController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetUnitNetworkSubnets(
                $params["unit_network_subnet"],
                $params["subnet_name"],
                $params["subnet_ip"],
                $params["subnet_default_router"],
                $params["mask"],
                $params["unit"],
                $params["unit_network_subnet_type"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
        break;
        case MethodTypes::POST :
            $result = PostUnitNetworkSubnets(
                $params["subnet_name"],
                $params["subnet_ip"],
                $params["subnet_default_router"],
                $params["mask"],
                $params["mm_id"],
                $params["unit_network_subnet_type_id"]
            );
        break;
        case MethodTypes::PUT :
            $result = PutUnitNetworkSubnets(
                $params["unit_network_subnet_id"],
                $params["subnet_name"],
                $params["subnet_ip"],
                $params["subnet_default_router"],
                $params["mask"],
                $params["mm_id"],
                $params["unit_network_subnet_type_id"]
            );
        break;
        case MethodTypes::DELETE :
            $result = DeleteUnitNetworkSubnets(
                $params["unit_network_subnet_id"]
            );
        break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}

function UnitNetworkObjectsController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetUnitNetworkObjects(
                $params["unit_network_object"],
                $params["ip"],
                $params["object_dns_name"],
                $params["unit_network_subnet"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
        break;
        case MethodTypes::POST :
            $result = PostUnitNetworkObjects(
                $params["ip"],
                $params["object_dns_name"],
                $params["description"],
                $params["unit_network_subnet_id"]
            );
        break;
        case MethodTypes::PUT :
            $result = PutUnitNetworkObjects(
                $params["unit_network_object_id"],
                $params["ip"],
                $params["object_dns_name"],
                $params["description"],
                $params["unit_network_subnet_id"]
            );
        break;
        case MethodTypes::DELETE :
            $result = DeleteUnitNetworkObjects(
                $params["unit_network_object_id"]
            );
        break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}

function ConnectionUnitNetworkSubnetsController()
{
    global $app;

    $params = loadParameters();

    switch ( strtoupper( $app->request()->getMethod() ) )
    {
        case MethodTypes::GET :
            $result = GetConnectionUnitNetworkSubnets(
                $params["connection_unit_network_subnet"],
                $params["unit_network_subnet"],
                $params["connection"],
                $params["pagesize"],
                $params["page"],
                $params["orderby"],
                $params["ordertype"],
                $params["searchtype"]
            );
            break;
        case MethodTypes::POST :
            $result = PostConnectionUnitNetworkSubnets(
                $params["connection_id"],
                $params["unit_network_subnet_id"]
            );
        break;
        case MethodTypes::PUT :
            $result = PutConnectionUnitNetworkSubnets(
                $params["connection_unit_network_subnet_id"],
                $params["connection_id"],
                $params["unit_network_subnet_id"]
            );
        break;
        case MethodTypes::DELETE :
            $result = DeleteConnectionUnitNetworkSubnets(
                $params["connection_unit_network_subnet_id"]
            );
        break;
    }

    PrepareResponse();

    $app->response()->setBody( toGreek( json_encode( $result ) ) );
}

?>