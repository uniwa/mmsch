<?php
if(!isset($_SESSION)) {
	session_start();
}

defined("DS") 			|| define("DS", DIRECTORY_SEPARATOR);

defined("ROOT_PATH") 	|| define("ROOT_PATH", realpath(dirname(__FILE__) . DS."..".DS). DS);

defined("M_ROOT_PATH") 	|| define("M_ROOT_PATH", realpath(dirname(__FILE__) . DS));

defined("PAGES_DIR") 	|| define("PAGES_DIR", "pages");

defined("TEMPLATE_DIR") || define("TEMPLATE_DIR", "templates");

defined("MOD_DIR") || define("MOD_DIR", "mods");

set_include_path(implode(PATH_SEPARATOR, array(
	realpath(M_ROOT_PATH.DS.PAGES_DIR),
	realpath(M_ROOT_PATH.DS.TEMPLATE_DIR),
	realpath(M_ROOT_PATH.DS.MOD_DIR),
	get_include_path()
)));

function loginUser($id = null) {

	if (!empty($id)) {
		$_SESSION['uid'] = $id;
		$_SESSION['valid'] = 1;
	}
}

function isLogged() {
	
	if (isset($_SESSION['valid']) && $_SESSION['valid'] == 1) {
		return isset($_SESSION['uid']) ? true : false;
	}
	return false;
}

function logout() {
	session_destroy();
}

$cPage = isset($_GET['page']) ? $_GET['page'] : 'units';

$page =  PAGES_DIR . DS . $cPage. ".php";
$error = PAGES_DIR . DS . "error.php";
$output_page = is_file($page) ? $page : $error;

//echo $cPage;


ob_start();
require_once($output_page);
ob_get_flush();