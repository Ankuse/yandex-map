<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
$dir = $APPLICATION->GetCurDir();
$page = $APPLICATION->GetCurPage();

$assets = \Bitrix\Main\Page\Asset::getInstance();
?>
<!DOCTYPE html>
<html>
	<head>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
		<?
		// $APPLICATION->ShowMeta();
		$APPLICATION->ShowHeadStrings();

		// $assets->addCss(SITE_TEMPLATE_PATH . '/style/css/main.css');
		$assets->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap-grid.css');

		//$assets->addJs(SITE_TEMPLATE_PATH . '/style/js/main.js');

		?>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" /> 	
	</head>
	<body>
		<div id="panel">
			<?//$APPLICATION->ShowPanel();?>
		</div>