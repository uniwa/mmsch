<?php

$action = isset($_GET['action']) && $_GET['action'] != "" ? $_GET['action'] : null;

switch($action) {
	
	case 'list':
		require_once('units'. DS .'list.php');
	break;
	
	case 'view':
		require_once('units'. DS .'unit_view.php');
	break;
	
	default:
		require_once('units'. DS .'list.php');
}