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

//	$assets->addCss('/node_modules/bootstrap/dist/css/bootstrap-grid.min.css');
	$assets->addCss(SITE_TEMPLATE_PATH . '/vendor/css/bootstrap-grid.css');
	$assets->addCss(SITE_TEMPLATE_PATH . '/vendor/css/main.css');


	$assets->addJs('/node_modules/jquery/dist/jquery.js'); // v3.3.1
	$assets->addJs(SITE_TEMPLATE_PATH . '/vendor/js/main.js');

	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
	<!--<link rel="stylesheet" href="<?/*=SITE_TEMPLATE_PATH . '/vendor/angular/styles.56cffe78f28a12ba56e2.css'*/?>">-->
</head>
<body>
<div id="panel">
	<?$APPLICATION->ShowPanel();?>
</div>

<div class='container'>
	<div class='row position-relative z-index100'>

		<div class='top-navigation'>
			<ul class="navigation_list d-flex flex-row flex-wrap justify-content-between align-items-center">
				<!--<li class="col-auto d-flex flex-row flex-wrap justify-content-start align-items-center menu-category">
					<img src="/style/img/svg/burger.svg" alt="" class="category_icon">
					<a href="#" class="category pjax-data">Каталог товаров</a>
				</li>-->
				<li class="col-auto d-flex flex-row flex-wrap justify-content-start align-items-center menu-category">
					<img src="<?=SITE_TEMPLATE_PATH . '/vendor/img/navigation/burger.svg'?>" class="category_icon">
					<a href="#" class="category pjax-data">Каталог</a>
				</li>
				<li class="col-auto d-flex flex-row flex-wrap justify-content-start align-items-center">
					<div class="d-flex flex-row flex-wrap justify-content-between align-items-center navigation_list-all">
						<a href="#">О компании</a>
					</div>
				</li>
				<li class="col-auto d-flex flex-row flex-wrap justify-content-start align-items-center">
					<div class="d-flex flex-row flex-wrap justify-content-between align-items-center navigation_list-all">
						<a href="#">Доставка</a>
					</div>
				</li>
				<li class="col-auto d-flex flex-row flex-wrap justify-content-start align-items-center">
					<div class="d-flex flex-row flex-wrap justify-content-between align-items-center navigation_list-all">
						<a href="#">Оплата</a>
					</div>
				</li>
				<li class="col-auto d-flex flex-row flex-wrap justify-content-start align-items-center">
					<div class="d-flex flex-row flex-wrap justify-content-between align-items-center navigation_list-all">
						<a href="#">Информация</a>
					</div>
				</li>
				<li class="col-auto d-flex flex-row flex-wrap justify-content-start align-items-center">
					<div class="d-flex flex-row flex-wrap justify-content-between align-items-center navigation_list-all">
						<a href="#">Новости</a>
					</div>
				</li>
				<li class="col-auto d-flex flex-row flex-wrap justify-content-start align-items-center">
					<div class="d-flex flex-row flex-wrap justify-content-between align-items-center navigation_list-all">
						<a href="#">Услуги</a>
					</div>
				</li>
			</ul>
		</div>

		<div class="navigation-main position-absolute z-index100" style='top:57px'>
			<div class="navigation-main_back"></div>
			<div class="container navigation-container">
				<div class="row">
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"ankuse_top_catalog_menu",
					array(
					"ALLOW_MULTI_SELECT" => "N",
					"CHILD_MENU_TYPE" => "",
					"COMPOSITE_FRAME_MODE" => "A",
					"COMPOSITE_FRAME_TYPE" => "AUTO",
					"DELAY" => "N",
					"MAX_LEVEL" => "1",
					"MENU_CACHE_GET_VARS" => array(
					),
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_THEME" => "site",
					"ROOT_MENU_TYPE" => "top_catalog",
					"USE_EXT" => "Y",
					"COMPONENT_TEMPLATE" => "vertical_multilevel1"
					),
					false
				);?>
				</div>
			</div>
		</div>
	</div>
</div>

<?/**
 * Открываем container and row и закрываем в footer.php
 *
 */?>
<div class='container'>
	<div class='row'>