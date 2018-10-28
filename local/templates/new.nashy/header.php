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
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
</head>
<body>
<div id="panel">
	<?$APPLICATION->ShowPanel();?>
</div>

<div class='container'>
	<div class='row'>

		<div class='top-navigation'>
			<ul class="navigation_list d-flex flex-row flex-wrap justify-content-between align-items-center">
				<!--<li class="col-auto d-flex flex-row flex-wrap justify-content-start align-items-center menu-category">
					<img src="/style/img/svg/burger.svg" alt="" class="category_icon">
					<a href="#" class="category pjax-data">Каталог товаров</a>
				</li>-->

				<li class="col-auto d-flex flex-row flex-wrap justify-content-start align-items-center menu-category">
					<img src="https://testb2b.slav-dom.ru/local/templates/webcompany/style/img/svg/burger.svg" alt="" class="category_icon">
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

		<div class="navigation-main">
			<div class="navigation-main_back"></div>
			<div class="container navigation-container">
				<div class="row">
					<div class="navigation-main_back-2"></div>
					<div class="col-ml-3 col-sl-3 col-xl-3 navigation-container_left">
						<ul>
							<li class="navigation-tab_select" data-tab_select="1"><span>Кирпич</span></li>
							<li class="navigation-tab_select" data-tab_select="2"><span>Строительные блоки, камни</span></li>
							<li class="navigation-tab_select" data-tab_select="3"><span>Фасадная плитка, отделка, декор</span></li>
							<li class="navigation-tab_select" data-tab_select="4"><span>Натуральный и искусственный камень</span></li>
							<li class="navigation-tab_select" data-tab_select="5"><span>Строительные и отделочные смеси</span></li>
							<li class="navigation-tab_select" data-tab_select="6"><span>Крепеж, армирование, кронштейны</span></li>
							<li class="navigation-tab_select" data-tab_select="7"><span>Кровельные покрытия, черепица</span></li>
							<li class="navigation-tab_select" data-tab_select="8"><span>Кровельные аксессуары </span></li>
							<li class="navigation-tab_select" data-tab_select="9"><span>и комплектующие</span></li>
							<li class="navigation-tab_select" data-tab_select="10"><span>Дымоходы, вентканалы</span></li>
							<li class="navigation-tab_select" data-tab_select="11"><span>Водосток, дренаж</span></li>
							<li class="navigation-tab_select" data-tab_select="12"><span>Тротуарная плитка, брусчатка, мощение</span></li>
							<li class="navigation-tab_select" data-tab_select="13"><span>Ступени, напольная плитка, уличные покрытия</span></li>
							<li class="navigation-tab_select" data-tab_select="14"><span>Ландшафтный декор</span></li>
							<li class="navigation-tab_select" data-tab_select="15"><span>Теплоизоляция, гидроизоляция, пароизоляция</span></li>
							<li class="navigation-tab_select" data-tab_select="16"><span>Инструменты</span></li>
							<li class="navigation-tab_select" data-tab_select="17"><b class="color-red">Распродажа склада</b></li>
							<li class="navigation-tab_select" data-tab_select="18"><b>Акции</b></li>
						</ul>
					</div>

					<div class="col-ml-9 col-sl-9 col-xl-9 d-flex flex-row flex-wrap justify-content-start align-items-stretch navigation-container_mid">
						<div class="col-ml-12 col-sl-12 col-xl-12 navigation-container_center">
							<div class="navigation-center_tab navigation-tab" data-tab="1">
								<p class="navigation-center_title">Первый таб</p>
								<div class="navigation-center_container">
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Кирпич</a>
										<ul class="navigation-section_list">
											<li><a href="#">Армирующая клеевая смесь</a></li>
											<li><a href="#">Декоративная штукатурка</a></li>
											<li><a href="#">Выравнивающая штукатурка</a></li>
											<li><a href="#">Цементные смеси</a></li>
											<li><a href="#">Клей для утеплителя</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Шпаклевки</a>
										<a href="#" class="navigation-section_title">Растворы для укладки брусчатки и натурального камня</a>
										<ul class="navigation-section_list">
											<li><a href="#">Раствор для заполнения швов</a></li>
											<li><a href="#">Дренажный раствор</a></li>
											<li><a href="#">Клей</a></li>
											<li><a href="#">Полиуретановое вяжущее</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Специальные составы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Смеси для ремонта и защиты бетона</a></li>
										</ul>
									</div>
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Грунтовки</a>
										<ul class="navigation-section_list">
											<li><a href="#">Грунтовки Baumit </a></li>
											<li><a href="#">Грунтовки РЕАЛ </a></li>
											<li><a href="#">Грунтовка Weber.vetonit</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Клей для напольных покрытий</a>
										<a href="#" class="navigation-section_title">Промышленные наливные полы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Наливной пол</a></li>
											<li><a href="#">Ровнитель</a></li>
											<li><a href="#">Стяжка</a></li>
											<li><a href="#">Топпинги (упрочнитель)</a></li>
											<li><a href="#">Краска</a></li>
											<li><a href="#">Комплектующие</a></li>
											<li><a href="#">Грунтовки и пропитки</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="navigation-center_tab navigation-tab" data-tab="2">
								<p class="navigation-center_title">Второй таб</p>
								<div class="navigation-center_container">
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Строительные блоки, камни</a>
										<ul class="navigation-section_list">
											<li><a href="#">Армирующая клеевая смесь</a></li>
											<li><a href="#">Декоративная штукатурка</a></li>
											<li><a href="#">Выравнивающая штукатурка</a></li>
											<li><a href="#">Цементные смеси</a></li>
											<li><a href="#">Клей для утеплителя</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Шпаклевки</a>
										<a href="#" class="navigation-section_title">Растворы для укладки брусчатки и натурального камня</a>
										<ul class="navigation-section_list">
											<li><a href="#">Раствор для заполнения швов</a></li>
											<li><a href="#">Дренажный раствор</a></li>
											<li><a href="#">Клей</a></li>
											<li><a href="#">Полиуретановое вяжущее</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Специальные составы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Смеси для ремонта и защиты бетона</a></li>
										</ul>
									</div>
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Грунтовки</a>
										<ul class="navigation-section_list">
											<li><a href="#">Грунтовки Baumit </a></li>
											<li><a href="#">Грунтовки РЕАЛ </a></li>
											<li><a href="#">Грунтовка Weber.vetonit</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Клей для напольных покрытий</a>
										<a href="#" class="navigation-section_title">Промышленные наливные полы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Наливной пол</a></li>
											<li><a href="#">Ровнитель</a></li>
											<li><a href="#">Стяжка</a></li>
											<li><a href="#">Топпинги (упрочнитель)</a></li>
											<li><a href="#">Краска</a></li>
											<li><a href="#">Комплектующие</a></li>
											<li><a href="#">Грунтовки и пропитки</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="navigation-center_tab navigation-tab" data-tab="3">
								<p class="navigation-center_title">Третий таб</p>
								<div class="navigation-center_container">
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Фасадная плитка, отделка, декор</a>
										<ul class="navigation-section_list">
											<li><a href="#">Армирующая клеевая смесь</a></li>
											<li><a href="#">Декоративная штукатурка</a></li>
											<li><a href="#">Выравнивающая штукатурка</a></li>
											<li><a href="#">Цементные смеси</a></li>
											<li><a href="#">Клей для утеплителя</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Шпаклевки</a>
										<a href="#" class="navigation-section_title">Растворы для укладки брусчатки и натурального камня</a>
										<ul class="navigation-section_list">
											<li><a href="#">Раствор для заполнения швов</a></li>
											<li><a href="#">Дренажный раствор</a></li>
											<li><a href="#">Клей</a></li>
											<li><a href="#">Полиуретановое вяжущее</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Специальные составы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Смеси для ремонта и защиты бетона</a></li>
										</ul>
									</div>
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Грунтовки</a>
										<ul class="navigation-section_list">
											<li><a href="#">Грунтовки Baumit </a></li>
											<li><a href="#">Грунтовки РЕАЛ </a></li>
											<li><a href="#">Грунтовка Weber.vetonit</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Клей для напольных покрытий</a>
										<a href="#" class="navigation-section_title">Промышленные наливные полы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Наливной пол</a></li>
											<li><a href="#">Ровнитель</a></li>
											<li><a href="#">Стяжка</a></li>
											<li><a href="#">Топпинги (упрочнитель)</a></li>
											<li><a href="#">Краска</a></li>
											<li><a href="#">Комплектующие</a></li>
											<li><a href="#">Грунтовки и пропитки</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="navigation-center_tab navigation-tab" data-tab="4">
								<p class="navigation-center_title">Первый таб</p>
								<div class="navigation-center_container">
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Натуральный и искусственный камень</a>
										<ul class="navigation-section_list">
											<li><a href="#">Армирующая клеевая смесь</a></li>
											<li><a href="#">Декоративная штукатурка</a></li>
											<li><a href="#">Выравнивающая штукатурка</a></li>
											<li><a href="#">Цементные смеси</a></li>
											<li><a href="#">Клей для утеплителя</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Шпаклевки</a>
										<a href="#" class="navigation-section_title">Растворы для укладки брусчатки и натурального камня</a>
										<ul class="navigation-section_list">
											<li><a href="#">Раствор для заполнения швов</a></li>
											<li><a href="#">Дренажный раствор</a></li>
											<li><a href="#">Клей</a></li>
											<li><a href="#">Полиуретановое вяжущее</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Специальные составы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Смеси для ремонта и защиты бетона</a></li>
										</ul>
									</div>
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Грунтовки</a>
										<ul class="navigation-section_list">
											<li><a href="#">Грунтовки Baumit </a></li>
											<li><a href="#">Грунтовки РЕАЛ </a></li>
											<li><a href="#">Грунтовка Weber.vetonit</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Клей для напольных покрытий</a>
										<a href="#" class="navigation-section_title">Промышленные наливные полы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Наливной пол</a></li>
											<li><a href="#">Ровнитель</a></li>
											<li><a href="#">Стяжка</a></li>
											<li><a href="#">Топпинги (упрочнитель)</a></li>
											<li><a href="#">Краска</a></li>
											<li><a href="#">Комплектующие</a></li>
											<li><a href="#">Грунтовки и пропитки</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="navigation-center_tab navigation-tab" data-tab="5">
								<p class="navigation-center_title">Второй таб</p>
								<div class="navigation-center_container">
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Кладочные смеси, клеи, затирки</a>
										<ul class="navigation-section_list">
											<li><a href="#">Армирующая клеевая смесь</a></li>
											<li><a href="#">Декоративная штукатурка</a></li>
											<li><a href="#">Выравнивающая штукатурка</a></li>
											<li><a href="#">Цементные смеси</a></li>
											<li><a href="#">Клей для утеплителя</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Шпаклевки</a>
										<a href="#" class="navigation-section_title">Растворы для укладки брусчатки и натурального камня</a>
										<ul class="navigation-section_list">
											<li><a href="#">Раствор для заполнения швов</a></li>
											<li><a href="#">Дренажный раствор</a></li>
											<li><a href="#">Клей</a></li>
											<li><a href="#">Полиуретановое вяжущее</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Специальные составы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Смеси для ремонта и защиты бетона</a></li>
										</ul>
									</div>
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Грунтовки</a>
										<ul class="navigation-section_list">
											<li><a href="#">Грунтовки Baumit </a></li>
											<li><a href="#">Грунтовки РЕАЛ </a></li>
											<li><a href="#">Грунтовка Weber.vetonit</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Клей для напольных покрытий</a>
										<a href="#" class="navigation-section_title">Промышленные наливные полы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Наливной пол</a></li>
											<li><a href="#">Ровнитель</a></li>
											<li><a href="#">Стяжка</a></li>
											<li><a href="#">Топпинги (упрочнитель)</a></li>
											<li><a href="#">Краска</a></li>
											<li><a href="#">Комплектующие</a></li>
											<li><a href="#">Грунтовки и пропитки</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="navigation-center_tab navigation-tab" data-tab="6">
								<p class="navigation-center_title">Третий таб</p>
								<div class="navigation-center_container">
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Строительные и отделочные смеси</a>
										<ul class="navigation-section_list">
											<li><a href="#">Армирующая клеевая смесь</a></li>
											<li><a href="#">Декоративная штукатурка</a></li>
											<li><a href="#">Выравнивающая штукатурка</a></li>
											<li><a href="#">Цементные смеси</a></li>
											<li><a href="#">Клей для утеплителя</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Шпаклевки</a>
										<a href="#" class="navigation-section_title">Растворы для укладки брусчатки и натурального камня</a>
										<ul class="navigation-section_list">
											<li><a href="#">Раствор для заполнения швов</a></li>
											<li><a href="#">Дренажный раствор</a></li>
											<li><a href="#">Клей</a></li>
											<li><a href="#">Полиуретановое вяжущее</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Специальные составы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Смеси для ремонта и защиты бетона</a></li>
										</ul>
									</div>
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Грунтовки</a>
										<ul class="navigation-section_list">
											<li><a href="#">Грунтовки Baumit </a></li>
											<li><a href="#">Грунтовки РЕАЛ </a></li>
											<li><a href="#">Грунтовка Weber.vetonit</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Клей для напольных покрытий</a>
										<a href="#" class="navigation-section_title">Промышленные наливные полы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Наливной пол</a></li>
											<li><a href="#">Ровнитель</a></li>
											<li><a href="#">Стяжка</a></li>
											<li><a href="#">Топпинги (упрочнитель)</a></li>
											<li><a href="#">Краска</a></li>
											<li><a href="#">Комплектующие</a></li>
											<li><a href="#">Грунтовки и пропитки</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="navigation-center_tab navigation-tab" data-tab="7">
								<p class="navigation-center_title">Первый таб</p>
								<div class="navigation-center_container">
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Крепление кирпичной кладки, теплоизоляции, армирование</a>
										<ul class="navigation-section_list">
											<li><a href="#">Армирующая клеевая смесь</a></li>
											<li><a href="#">Декоративная штукатурка</a></li>
											<li><a href="#">Выравнивающая штукатурка</a></li>
											<li><a href="#">Цементные смеси</a></li>
											<li><a href="#">Клей для утеплителя</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Шпаклевки</a>
										<a href="#" class="navigation-section_title">Растворы для укладки брусчатки и натурального камня</a>
										<ul class="navigation-section_list">
											<li><a href="#">Раствор для заполнения швов</a></li>
											<li><a href="#">Дренажный раствор</a></li>
											<li><a href="#">Клей</a></li>
											<li><a href="#">Полиуретановое вяжущее</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Специальные составы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Смеси для ремонта и защиты бетона</a></li>
										</ul>
									</div>
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Грунтовки</a>
										<ul class="navigation-section_list">
											<li><a href="#">Грунтовки Baumit </a></li>
											<li><a href="#">Грунтовки РЕАЛ </a></li>
											<li><a href="#">Грунтовка Weber.vetonit</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Клей для напольных покрытий</a>
										<a href="#" class="navigation-section_title">Промышленные наливные полы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Наливной пол</a></li>
											<li><a href="#">Ровнитель</a></li>
											<li><a href="#">Стяжка</a></li>
											<li><a href="#">Топпинги (упрочнитель)</a></li>
											<li><a href="#">Краска</a></li>
											<li><a href="#">Комплектующие</a></li>
											<li><a href="#">Грунтовки и пропитки</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="navigation-center_tab navigation-tab" data-tab="8">
								<p class="navigation-center_title">Второй таб</p>
								<div class="navigation-center_container">
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Фасадные системы и декор</a>
										<ul class="navigation-section_list">
											<li><a href="#">Армирующая клеевая смесь</a></li>
											<li><a href="#">Декоративная штукатурка</a></li>
											<li><a href="#">Выравнивающая штукатурка</a></li>
											<li><a href="#">Цементные смеси</a></li>
											<li><a href="#">Клей для утеплителя</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Шпаклевки</a>
										<a href="#" class="navigation-section_title">Растворы для укладки брусчатки и натурального камня</a>
										<ul class="navigation-section_list">
											<li><a href="#">Раствор для заполнения швов</a></li>
											<li><a href="#">Дренажный раствор</a></li>
											<li><a href="#">Клей</a></li>
											<li><a href="#">Полиуретановое вяжущее</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Специальные составы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Смеси для ремонта и защиты бетона</a></li>
										</ul>
									</div>
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Грунтовки</a>
										<ul class="navigation-section_list">
											<li><a href="#">Грунтовки Baumit </a></li>
											<li><a href="#">Грунтовки РЕАЛ </a></li>
											<li><a href="#">Грунтовка Weber.vetonit</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Клей для напольных покрытий</a>
										<a href="#" class="navigation-section_title">Промышленные наливные полы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Наливной пол</a></li>
											<li><a href="#">Ровнитель</a></li>
											<li><a href="#">Стяжка</a></li>
											<li><a href="#">Топпинги (упрочнитель)</a></li>
											<li><a href="#">Краска</a></li>
											<li><a href="#">Комплектующие</a></li>
											<li><a href="#">Грунтовки и пропитки</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="navigation-center_tab navigation-tab" data-tab="9">
								<p class="navigation-center_title">Третий таб</p>
								<div class="navigation-center_container">
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Черепица и кровельные покрытия</a>
										<ul class="navigation-section_list">
											<li><a href="#">Армирующая клеевая смесь</a></li>
											<li><a href="#">Декоративная штукатурка</a></li>
											<li><a href="#">Выравнивающая штукатурка</a></li>
											<li><a href="#">Цементные смеси</a></li>
											<li><a href="#">Клей для утеплителя</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Шпаклевки</a>
										<a href="#" class="navigation-section_title">Растворы для укладки брусчатки и натурального камня</a>
										<ul class="navigation-section_list">
											<li><a href="#">Раствор для заполнения швов</a></li>
											<li><a href="#">Дренажный раствор</a></li>
											<li><a href="#">Клей</a></li>
											<li><a href="#">Полиуретановое вяжущее</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Специальные составы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Смеси для ремонта и защиты бетона</a></li>
										</ul>
									</div>
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Грунтовки</a>
										<ul class="navigation-section_list">
											<li><a href="#">Грунтовки Baumit </a></li>
											<li><a href="#">Грунтовки РЕАЛ </a></li>
											<li><a href="#">Грунтовка Weber.vetonit</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Клей для напольных покрытий</a>
										<a href="#" class="navigation-section_title">Промышленные наливные полы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Наливной пол</a></li>
											<li><a href="#">Ровнитель</a></li>
											<li><a href="#">Стяжка</a></li>
											<li><a href="#">Топпинги (упрочнитель)</a></li>
											<li><a href="#">Краска</a></li>
											<li><a href="#">Комплектующие</a></li>
											<li><a href="#">Грунтовки и пропитки</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="navigation-center_tab navigation-tab" data-tab="10">
								<p class="navigation-center_title">Первый таб</p>
								<div class="navigation-center_container">
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Кровельные системы и аксессуары</a>
										<ul class="navigation-section_list">
											<li><a href="#">Армирующая клеевая смесь</a></li>
											<li><a href="#">Декоративная штукатурка</a></li>
											<li><a href="#">Выравнивающая штукатурка</a></li>
											<li><a href="#">Цементные смеси</a></li>
											<li><a href="#">Клей для утеплителя</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Шпаклевки</a>
										<a href="#" class="navigation-section_title">Растворы для укладки брусчатки и натурального камня</a>
										<ul class="navigation-section_list">
											<li><a href="#">Раствор для заполнения швов</a></li>
											<li><a href="#">Дренажный раствор</a></li>
											<li><a href="#">Клей</a></li>
											<li><a href="#">Полиуретановое вяжущее</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Специальные составы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Смеси для ремонта и защиты бетона</a></li>
										</ul>
									</div>
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Грунтовки</a>
										<ul class="navigation-section_list">
											<li><a href="#">Грунтовки Baumit </a></li>
											<li><a href="#">Грунтовки РЕАЛ </a></li>
											<li><a href="#">Грунтовка Weber.vetonit</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Клей для напольных покрытий</a>
										<a href="#" class="navigation-section_title">Промышленные наливные полы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Наливной пол</a></li>
											<li><a href="#">Ровнитель</a></li>
											<li><a href="#">Стяжка</a></li>
											<li><a href="#">Топпинги (упрочнитель)</a></li>
											<li><a href="#">Краска</a></li>
											<li><a href="#">Комплектующие</a></li>
											<li><a href="#">Грунтовки и пропитки</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="navigation-center_tab navigation-tab" data-tab="11">
								<p class="navigation-center_title">Второй таб</p>
								<div class="navigation-center_container">
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Штукатурки</a>
										<ul class="navigation-section_list">
											<li><a href="#">Армирующая клеевая смесь</a></li>
											<li><a href="#">Декоративная штукатурка</a></li>
											<li><a href="#">Выравнивающая штукатурка</a></li>
											<li><a href="#">Цементные смеси</a></li>
											<li><a href="#">Клей для утеплителя</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Шпаклевки</a>
										<a href="#" class="navigation-section_title">Растворы для укладки брусчатки и натурального камня</a>
										<ul class="navigation-section_list">
											<li><a href="#">Раствор для заполнения швов</a></li>
											<li><a href="#">Дренажный раствор</a></li>
											<li><a href="#">Клей</a></li>
											<li><a href="#">Полиуретановое вяжущее</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Специальные составы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Смеси для ремонта и защиты бетона</a></li>
										</ul>
									</div>
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Грунтовки</a>
										<ul class="navigation-section_list">
											<li><a href="#">Грунтовки Baumit </a></li>
											<li><a href="#">Грунтовки РЕАЛ </a></li>
											<li><a href="#">Грунтовка Weber.vetonit</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Клей для напольных покрытий</a>
										<a href="#" class="navigation-section_title">Промышленные наливные полы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Наливной пол</a></li>
											<li><a href="#">Ровнитель</a></li>
											<li><a href="#">Стяжка</a></li>
											<li><a href="#">Топпинги (упрочнитель)</a></li>
											<li><a href="#">Краска</a></li>
											<li><a href="#">Комплектующие</a></li>
											<li><a href="#">Грунтовки и пропитки</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="navigation-center_tab navigation-tab" data-tab="12">
								<p class="navigation-center_title">Третий таб</p>
								<div class="navigation-center_container">
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Штукатурки</a>
										<ul class="navigation-section_list">
											<li><a href="#">Армирующая клеевая смесь</a></li>
											<li><a href="#">Декоративная штукатурка</a></li>
											<li><a href="#">Выравнивающая штукатурка</a></li>
											<li><a href="#">Цементные смеси</a></li>
											<li><a href="#">Клей для утеплителя</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Шпаклевки</a>
										<a href="#" class="navigation-section_title">Растворы для укладки брусчатки и натурального камня</a>
										<ul class="navigation-section_list">
											<li><a href="#">Раствор для заполнения швов</a></li>
											<li><a href="#">Дренажный раствор</a></li>
											<li><a href="#">Клей</a></li>
											<li><a href="#">Полиуретановое вяжущее</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Специальные составы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Смеси для ремонта и защиты бетона</a></li>
										</ul>
									</div>
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Грунтовки</a>
										<ul class="navigation-section_list">
											<li><a href="#">Грунтовки Baumit </a></li>
											<li><a href="#">Грунтовки РЕАЛ </a></li>
											<li><a href="#">Грунтовка Weber.vetonit</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Клей для напольных покрытий</a>
										<a href="#" class="navigation-section_title">Промышленные наливные полы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Наливной пол</a></li>
											<li><a href="#">Ровнитель</a></li>
											<li><a href="#">Стяжка</a></li>
											<li><a href="#">Топпинги (упрочнитель)</a></li>
											<li><a href="#">Краска</a></li>
											<li><a href="#">Комплектующие</a></li>
											<li><a href="#">Грунтовки и пропитки</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="navigation-center_tab navigation-tab" data-tab="13">
								<p class="navigation-center_title">Первый таб</p>
								<div class="navigation-center_container">
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Штукатурки</a>
										<ul class="navigation-section_list">
											<li><a href="#">Армирующая клеевая смесь</a></li>
											<li><a href="#">Декоративная штукатурка</a></li>
											<li><a href="#">Выравнивающая штукатурка</a></li>
											<li><a href="#">Цементные смеси</a></li>
											<li><a href="#">Клей для утеплителя</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Шпаклевки</a>
										<a href="#" class="navigation-section_title">Растворы для укладки брусчатки и натурального камня</a>
										<ul class="navigation-section_list">
											<li><a href="#">Раствор для заполнения швов</a></li>
											<li><a href="#">Дренажный раствор</a></li>
											<li><a href="#">Клей</a></li>
											<li><a href="#">Полиуретановое вяжущее</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Специальные составы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Смеси для ремонта и защиты бетона</a></li>
										</ul>
									</div>
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Грунтовки</a>
										<ul class="navigation-section_list">
											<li><a href="#">Грунтовки Baumit </a></li>
											<li><a href="#">Грунтовки РЕАЛ </a></li>
											<li><a href="#">Грунтовка Weber.vetonit</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Клей для напольных покрытий</a>
										<a href="#" class="navigation-section_title">Промышленные наливные полы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Наливной пол</a></li>
											<li><a href="#">Ровнитель</a></li>
											<li><a href="#">Стяжка</a></li>
											<li><a href="#">Топпинги (упрочнитель)</a></li>
											<li><a href="#">Краска</a></li>
											<li><a href="#">Комплектующие</a></li>
											<li><a href="#">Грунтовки и пропитки</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="navigation-center_tab navigation-tab" data-tab="14">
								<p class="navigation-center_title">Второй таб</p>
								<div class="navigation-center_container">
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Штукатурки</a>
										<ul class="navigation-section_list">
											<li><a href="#">Армирующая клеевая смесь</a></li>
											<li><a href="#">Декоративная штукатурка</a></li>
											<li><a href="#">Выравнивающая штукатурка</a></li>
											<li><a href="#">Цементные смеси</a></li>
											<li><a href="#">Клей для утеплителя</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Шпаклевки</a>
										<a href="#" class="navigation-section_title">Растворы для укладки брусчатки и натурального камня</a>
										<ul class="navigation-section_list">
											<li><a href="#">Раствор для заполнения швов</a></li>
											<li><a href="#">Дренажный раствор</a></li>
											<li><a href="#">Клей</a></li>
											<li><a href="#">Полиуретановое вяжущее</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Специальные составы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Смеси для ремонта и защиты бетона</a></li>
										</ul>
									</div>
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Грунтовки</a>
										<ul class="navigation-section_list">
											<li><a href="#">Грунтовки Baumit </a></li>
											<li><a href="#">Грунтовки РЕАЛ </a></li>
											<li><a href="#">Грунтовка Weber.vetonit</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Клей для напольных покрытий</a>
										<a href="#" class="navigation-section_title">Промышленные наливные полы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Наливной пол</a></li>
											<li><a href="#">Ровнитель</a></li>
											<li><a href="#">Стяжка</a></li>
											<li><a href="#">Топпинги (упрочнитель)</a></li>
											<li><a href="#">Краска</a></li>
											<li><a href="#">Комплектующие</a></li>
											<li><a href="#">Грунтовки и пропитки</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="navigation-center_tab navigation-tab" data-tab="15">
								<p class="navigation-center_title">Третий таб</p>
								<div class="navigation-center_container">
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Штукатурки</a>
										<ul class="navigation-section_list">
											<li><a href="#">Армирующая клеевая смесь</a></li>
											<li><a href="#">Декоративная штукатурка</a></li>
											<li><a href="#">Выравнивающая штукатурка</a></li>
											<li><a href="#">Цементные смеси</a></li>
											<li><a href="#">Клей для утеплителя</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Шпаклевки</a>
										<a href="#" class="navigation-section_title">Растворы для укладки брусчатки и натурального камня</a>
										<ul class="navigation-section_list">
											<li><a href="#">Раствор для заполнения швов</a></li>
											<li><a href="#">Дренажный раствор</a></li>
											<li><a href="#">Клей</a></li>
											<li><a href="#">Полиуретановое вяжущее</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Специальные составы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Смеси для ремонта и защиты бетона</a></li>
										</ul>
									</div>
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Грунтовки</a>
										<ul class="navigation-section_list">
											<li><a href="#">Грунтовки Baumit </a></li>
											<li><a href="#">Грунтовки РЕАЛ </a></li>
											<li><a href="#">Грунтовка Weber.vetonit</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Клей для напольных покрытий</a>
										<a href="#" class="navigation-section_title">Промышленные наливные полы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Наливной пол</a></li>
											<li><a href="#">Ровнитель</a></li>
											<li><a href="#">Стяжка</a></li>
											<li><a href="#">Топпинги (упрочнитель)</a></li>
											<li><a href="#">Краска</a></li>
											<li><a href="#">Комплектующие</a></li>
											<li><a href="#">Грунтовки и пропитки</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="navigation-center_tab navigation-tab" data-tab="16">
								<p class="navigation-center_title">Первый таб</p>
								<div class="navigation-center_container">
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Штукатурки</a>
										<ul class="navigation-section_list">
											<li><a href="#">Армирующая клеевая смесь</a></li>
											<li><a href="#">Декоративная штукатурка</a></li>
											<li><a href="#">Выравнивающая штукатурка</a></li>
											<li><a href="#">Цементные смеси</a></li>
											<li><a href="#">Клей для утеплителя</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Шпаклевки</a>
										<a href="#" class="navigation-section_title">Растворы для укладки брусчатки и натурального камня</a>
										<ul class="navigation-section_list">
											<li><a href="#">Раствор для заполнения швов</a></li>
											<li><a href="#">Дренажный раствор</a></li>
											<li><a href="#">Клей</a></li>
											<li><a href="#">Полиуретановое вяжущее</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Специальные составы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Смеси для ремонта и защиты бетона</a></li>
										</ul>
									</div>
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Грунтовки</a>
										<ul class="navigation-section_list">
											<li><a href="#">Грунтовки Baumit </a></li>
											<li><a href="#">Грунтовки РЕАЛ </a></li>
											<li><a href="#">Грунтовка Weber.vetonit</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Клей для напольных покрытий</a>
										<a href="#" class="navigation-section_title">Промышленные наливные полы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Наливной пол</a></li>
											<li><a href="#">Ровнитель</a></li>
											<li><a href="#">Стяжка</a></li>
											<li><a href="#">Топпинги (упрочнитель)</a></li>
											<li><a href="#">Краска</a></li>
											<li><a href="#">Комплектующие</a></li>
											<li><a href="#">Грунтовки и пропитки</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="navigation-center_tab navigation-tab" data-tab="17">
								<p class="navigation-center_title">Второй таб</p>
								<div class="navigation-center_container">
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Штукатурки</a>
										<ul class="navigation-section_list">
											<li><a href="#">Армирующая клеевая смесь</a></li>
											<li><a href="#">Декоративная штукатурка</a></li>
											<li><a href="#">Выравнивающая штукатурка</a></li>
											<li><a href="#">Цементные смеси</a></li>
											<li><a href="#">Клей для утеплителя</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Шпаклевки</a>
										<a href="#" class="navigation-section_title">Растворы для укладки брусчатки и натурального камня</a>
										<ul class="navigation-section_list">
											<li><a href="#">Раствор для заполнения швов</a></li>
											<li><a href="#">Дренажный раствор</a></li>
											<li><a href="#">Клей</a></li>
											<li><a href="#">Полиуретановое вяжущее</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Специальные составы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Смеси для ремонта и защиты бетона</a></li>
										</ul>
									</div>
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Грунтовки</a>
										<ul class="navigation-section_list">
											<li><a href="#">Грунтовки Baumit </a></li>
											<li><a href="#">Грунтовки РЕАЛ </a></li>
											<li><a href="#">Грунтовка Weber.vetonit</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Клей для напольных покрытий</a>
										<a href="#" class="navigation-section_title">Промышленные наливные полы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Наливной пол</a></li>
											<li><a href="#">Ровнитель</a></li>
											<li><a href="#">Стяжка</a></li>
											<li><a href="#">Топпинги (упрочнитель)</a></li>
											<li><a href="#">Краска</a></li>
											<li><a href="#">Комплектующие</a></li>
											<li><a href="#">Грунтовки и пропитки</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="navigation-center_tab navigation-tab" data-tab="18">
								<p class="navigation-center_title">Третий таб</p>
								<div class="navigation-center_container">
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Штукатурки</a>
										<ul class="navigation-section_list">
											<li><a href="#">Армирующая клеевая смесь</a></li>
											<li><a href="#">Декоративная штукатурка</a></li>
											<li><a href="#">Выравнивающая штукатурка</a></li>
											<li><a href="#">Цементные смеси</a></li>
											<li><a href="#">Клей для утеплителя</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Шпаклевки</a>
										<a href="#" class="navigation-section_title">Растворы для укладки брусчатки и натурального камня</a>
										<ul class="navigation-section_list">
											<li><a href="#">Раствор для заполнения швов</a></li>
											<li><a href="#">Дренажный раствор</a></li>
											<li><a href="#">Клей</a></li>
											<li><a href="#">Полиуретановое вяжущее</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Специальные составы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Смеси для ремонта и защиты бетона</a></li>
										</ul>
									</div>
									<div class="navigation-center_section">
										<a href="#" class="navigation-section_title">Грунтовки</a>
										<ul class="navigation-section_list">
											<li><a href="#">Грунтовки Baumit </a></li>
											<li><a href="#">Грунтовки РЕАЛ </a></li>
											<li><a href="#">Грунтовка Weber.vetonit</a></li>
										</ul>
										<a href="#" class="navigation-section_title">Клей для напольных покрытий</a>
										<a href="#" class="navigation-section_title">Промышленные наливные полы</a>
										<ul class="navigation-section_list">
											<li><a href="#">Наливной пол</a></li>
											<li><a href="#">Ровнитель</a></li>
											<li><a href="#">Стяжка</a></li>
											<li><a href="#">Топпинги (упрочнитель)</a></li>
											<li><a href="#">Краска</a></li>
											<li><a href="#">Комплектующие</a></li>
											<li><a href="#">Грунтовки и пропитки</a></li>
										</ul>
									</div>
								</div>
							</div>

						</div>
<!--						<div class="col-ml-3 col-sl-3 col-xl-3 navigation-container_right d-flex flex-column flex-nowrap justify-content-between align-items-start navigation-tab" data-tab="1">-->
<!--							<img src="--><?//=SITE_TEMPLATE_PATH?><!--/vendor/img/navigation/right.png" alt="">-->
<!--							<div class="d-flex flex-column flex-nowrap justify-content-center align-items-start navigation-container_right-info">-->
<!--								<p class="navigation-container_right-title">Гарантия лучшей цены</p>-->
<!--								<p class="navigation-container_right-text">Кирпич строительный керамический полнотелый</p>-->
<!--								<p class="navigation-container_right-price">-->
<!--									<span>от </span><b>930 </b><i class="icons-wp-ruble"></i>-->
<!--								</p>-->
<!--							</div>-->
<!--							<a href="#" class="btn-red">Подробнее</a>-->
<!--						</div>-->
<!--						<div class="col-ml-3 col-sl-3 col-xl-3 navigation-container_right d-flex flex-column flex-nowrap justify-content-between align-items-start navigation-tab" data-tab="2">-->
<!--							<img src="--><?//=SITE_TEMPLATE_PATH?><!--/vendor/img/navigation/right.png" alt="">-->
<!--							<div class="d-flex flex-column flex-nowrap justify-content-center align-items-start navigation-container_right-info">-->
<!--								<p class="navigation-container_right-title">Гарантия лучшей цены</p>-->
<!--								<p class="navigation-container_right-text">Кирпич строительный керамический полнотелый</p>-->
<!--								<p class="navigation-container_right-price">-->
<!--									<span>от </span><b>930 </b><i class="icons-wp-ruble"></i>-->
<!--								</p>-->
<!--							</div>-->
<!--							<a href="#" class="btn-red">Подробнее</a>-->
<!--						</div>-->
<!--						<div class="col-ml-3 col-sl-3 col-xl-3 navigation-container_right d-flex flex-column flex-nowrap justify-content-between align-items-start navigation-tab" data-tab="3">-->
<!--							<img src="--><?//=SITE_TEMPLATE_PATH?><!--/vendor/img/navigation/right.png" alt="">-->
<!--							<div class="d-flex flex-column flex-nowrap justify-content-center align-items-start navigation-container_right-info">-->
<!--								<p class="navigation-container_right-title">Гарантия лучшей цены</p>-->
<!--								<p class="navigation-container_right-text">Кирпич строительный керамический полнотелый</p>-->
<!--								<p class="navigation-container_right-price">-->
<!--									<span>от </span><b>930 </b><i class="icons-wp-ruble"></i>-->
<!--								</p>-->
<!--							</div>-->
<!--							<a href="#" class="btn-red">Подробнее</a>-->
<!--						</div>-->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
