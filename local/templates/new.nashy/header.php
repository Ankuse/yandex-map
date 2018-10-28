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
	// $APPLICATION->ShowMeta(); // подключает определенное свойство
	$APPLICATION->ShowHeadStrings(); // подлкючает свойства в сумме

	$assets->addCss('/node_modules/bootstrap/dist/css/bootstrap-grid.min.css');
	$assets->addCss(SITE_TEMPLATE_PATH . '/vendor/css/main.css');


	$assets->addJs(SITE_TEMPLATE_PATH . '/vendor/js/main.js');

	?>
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
</head>
<body>
<div id="panel">
	<?$APPLICATION->ShowPanel();?>
</div>

<div class='container'>
	<div class='row'>
		qweqwe
	</div>
</div>
