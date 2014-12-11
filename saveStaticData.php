<?php
header("Content-Type: text/html; charset=utf-8");
require_once ('server/config.php');
require_once ('server/libs/phpCAS/CAS.php');
if(!isset($_GET['auth']) || $_GET['auth'] != '0') {
    if(!isset($casOptions["NoAuth"]) || $casOptions["NoAuth"] != true) {
        // initialize phpCAS using SAML
        phpCAS::client(SAML_VERSION_1_1,$casOptions["Url"],$casOptions["Port"],'');
        // no SSL validation for the CAS server, only for testing environments
        phpCAS::setNoCasServerValidation();
        // handle backend logout requests from CAS server
        phpCAS::handleLogoutRequests(array($casOptions["Url"]));
        if(isset($_GET['logout']) && $_GET['logout'] == 'true') {
            phpCAS::logoutWithRedirectService($casOptions["LogoutURL"]);
            exit();
        } else {
            // force CAS authentication
            if (!phpCAS::checkAuthentication())
              phpCAS::forceAuthentication();
        }
        // at this step, the user has been authenticated by the CAS server and the user's login name can be read with //phpCAS::getUser(). for this test, simply print who is the authenticated user and his attributes.
        $user = phpCAS::getAttributes();
    } else {
        $user = array(
            'uid' => $frontendOptions['backendUsername'],
            'mail' => $frontendOptions['backendUsername'].'@sch.gr',
            'title' => 'ΠΡΟΣΩΠΙΚΟ ΠΣΔ',
            'ou' => 'ΤΕΙ ΑΘΗΝΑΣ',
            'cn' => 'ΝΙΚΟΥΔΗΣ ΔΗΜΟΣΘΕΝΗΣ',
            'gsnBranch' => 'ΠΕ20',
            'edupersonorgunitdn' => array(
                'ou=teiath,ou=partners,ou=units,dc=sch,dc=gr',
                'ou=partners,ou=units,dc=sch,dc=gr'
            ),
            'l' => 'ou=teiath,ou=partners,ou=units,dc=sch,dc=gr',
            'memberof' => '',
            'umdobject' => 'Personel',
        );
    }
    $user['backendAuthorizationHash'] = base64_encode($frontendOptions['backendUsername'].':'.$frontendOptions['backendPassword']);
} else {
    $user = array();
    $user['edupersonorgunitdn'] = array('ou=null');
    $user['backendAuthorizationHash'] = base64_encode('anonymous:anonymous');
}
if (isset($user['uid'])) 
	$isAnonymous = 0;
else
	$isAnonymous = 1;

$isFY = 0;
$FY = '';
if (isset($user["l"])){
	$pattern = '/ou=([^,]+)/';
	preg_match_all($pattern, $user["l"], $matches);
	if ($matches[1][1]=="partners"){
		$isFY=1;
		$FY=$matches[1][0];
		if ($FY == "episey") $FY = "ntua";
	}
}
//*************************************************************************************************************
define('OK', 0);
define('URL_EMPTY', 1);
define('WRITING_PROBLEMS',2);
define('OTHER_PROBLEM', 3);

if (isset($_POST) && isset($_POST['staticData']) ){

	$fileName = "client/static.data.js";
	$fileContent = 'var staticData = ' . $_POST['staticData'] . ';';

	if (is_writable($fileName)) {

		$r = file_put_contents($fileName, $fileContent);

		if ($r)
			echo "OK";
		else
			echo "OTHER_PROBLEM";
	}
	else {
		echo "WRITING_PROBLEMS - File is not writable";
	}
}