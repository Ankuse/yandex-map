<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)){?>
	<div class="navigation-main_back-2"></div>
	<div class="col-ml-3 col-sl-3 col-xl-3 navigation-container_left">
		<ul>
			<?foreach($arResult as $arItem){?>
				<?if ($arItem["IS_PARENT"]){?>
					<?if ($arItem["DEPTH_LEVEL"] == 1){?>
						<li class="navigation-tab_select arrow_right_parent"
							data-tab_select="<?=$arItem['TEXT']?>">
							<span><?=$arItem['TEXT']?></span>
						</li>
					<?}?>
				<?} else {?>
					<?if ($arItem["DEPTH_LEVEL"] == 1){?>
						<li class="navigation-tab_select"
							data-tab_select="<?=$arItem['TEXT']?>">
							<span><?=$arItem['TEXT']?></span>
						</li>
					<?}?>
				<?}?>
			<?}?>
		</ul>
	</div>
	<div class="col-ml-9 col-sl-9 col-xl-9 d-flex flex-row flex-wrap justify-content-start align-items-stretch navigation-container_mid">
		<div class="col-ml-12 col-sl-12 col-xl-12 navigation-container_center">
			<?foreach($arResult as $key => $arItem){?>
				<?if($arItem['DEPTH_LEVEL'] == 1){?>
					<?getIdFirst($arItem['ID'], $arItem['TEXT'])?>
	  			<?}?>
			<?}?>
		</div>
	</div>
<?}?>

<!--<div class="col-ml-12 col-sl-12 col-xl-12 navigation-container_center">
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
</div>

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
	</div>
</div>-->
