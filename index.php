<?php

ini_set('include_path', ini_get('include_path') . ':' . dirname(__FILE__) . '/lib');

require_once 'Config.php';
require_once 'Bible.php';
require_once 'Smarty.php';

$config = Config::getInstance();
$bible = Bible::getInstance();
$smarty = new Bible_Smarty($config);

$action = $_REQUEST['action'];
$smarty->assign('action', $action);

switch ($action)
{
	/** API: They should JSON */
	case 'retrieve':
		require_once 'Action_Retrieve.php';
		$controller = new Action_Retrieve($bible, $smarty);
		$controller->run();
		break;

	case 'search':
		require_once 'Action_Search.php';
		$controller = new Action_Search($bible, $smarty);
		$controller->run();
		break;

	case 'glossary':
		if ($_REQUEST['index'] || $_REQUEST['stroke'] || $_REQUEST['word'] || $_REQUEST['ranges'])
		{
			require_once 'Action_Glossary.php';
			$controller = new Action_Glossary($bible, $smarty);
			$controller->run();
		}
		else
		{
			$smarty->display('glossary.tmpl');
		}
		break;

	case 'subjects':
		if ($_REQUEST['index'])
		{
			require_once 'Action_Subjects.php';
			$controller = new Action_Subjects($bible, $smarty);
			$controller->run();
		}
		else
		{
			$smarty->display('subjects.tmpl');
		}
		break;

	case 'biblemap':
		if ($_REQUEST['index'])
		{
			require_once 'Action_Biblemap.php';
			$controller = new Action_Biblemap($bible, $smarty);
			$controller->run();
		}
		else
		{
			$smarty->display('biblemap.tmpl');
		}
		break;

	/** Frontend: They should return HTML */
	case 'static':
		$smarty->assign('page', $_REQUEST['page']);
		$smarty->display('static.tmpl');
		break;

	case 'gospel':
		$page = $_REQUEST['page'] ? $_REQUEST['page'] : 'index';
		$smarty->assign('page', $page);
		$smarty->display('gospel.tmpl');
		break;

	case 'outline':
		$page = $_REQUEST['page'] ? $_REQUEST['page'] : 'GEN';
		$smarty->assign('page', $page);
		$smarty->display('outline.tmpl');
		break;

	case 'interlinear':
		$smarty->display('interlinear.tmpl');
		break;

        case 'query':
		$smarty->display('query.tmpl');
		break;

	case 'contactus':
		require_once 'Action_ContactUs.php';
		$controller = new Action_ContactUs($bible, $smarty);
		$controller->run();
		break;

	case 'browse':
	default:
		$smarty->assign('action', 'browse'); // for default case
		$smarty->display('browse.tmpl');
		break;
}
