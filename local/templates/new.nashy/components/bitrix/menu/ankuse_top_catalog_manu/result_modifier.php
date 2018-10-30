<?
define("IBLOCK_ID",4);

$rs = CIBlockSection::GetList(
  array('LEFT_MARGIN'=>'ASC'),
  array(
	'IBLOCK_ID'=>IBLOCK_ID,
	'ACTIVE' => 'Y',
	'GLOBAL_ACTIVE' => 'Y'
  ),
  false,
  array('ID', 'NAME', 'SECTION_PAGE_URL')
);
$i=0;
while($ar=$rs->GetNextElement()){
	$idSection = $ar->GetFields();
	//debug($idSection);
	$arSection[] = $idSection;
	$arResult[$i]['ID'] = $idSection['ID'];
	$arResult[$i]['SECTION_PAGE_URL'] = $idSection['SECTION_PAGE_URL'];
	$i++;
}
?>

<?
/**
 * @param $ID - тут передаем пункт меню первого раздела ( DEPTH_LEVEL = 1 )
 * @param $TEXT - передали название пункта меню первого раздела ( DEPTH_LEVEL = 1 )
 */
function getIdFirst($ID, $TEXT) {?>
	<div class="navigation-center_tab navigation-tab" data-tab="<?=$TEXT?>">
		<p class="navigation-center_title"><?=$TEXT?></p>
		<?getId($ID)?>
	</div>
<?}?>


<?
/**
 * @param $ID - передаем айдишники первых разделов и делаем по ним выборку.
 * в цикле выводим все разделы, принадлежащие переданному.
 * Получается нечто вроде дивки, в которой все разделы первого уровня (глубина 1) дочернего раздела.
 *
 * И конечно же не забываем передавать в выборку только то , что нам необходимо выводить, чтобы сделать чуть чуть быстрее наш сайт.
 */
function getId($ID) {
	$arFilter = Array('IBLOCK_ID'=>IBLOCK_ID, 'GLOBAL_ACTIVE'=>'Y', 'SECTION_ID'=>$ID);
	$db_list = CIBlockSection::GetList(Array('sort'=>'asc'), $arFilter, true, array('ID', 'NAME', 'SECTION_PAGE_URL'));
	?>
	<div class="navigation-center_container">
		<div class="navigation-center_section">
			<?while($ar_result = $db_list->GetNext()) {?>
				<div class='bck_one_par_sect'>
					<a href="<?=$ar_result['SECTION_PAGE_URL']?>" class="navigation-section_title">
						<?=$ar_result['NAME']?>
					</a>
					<?getIdSections($ar_result['ID'])?>
				</div>
			<?}?>
			</ul>
		</div>
	</div>
<?}?>

<?
/**
 * @param $ID - тут приходит айдишник родительской секции , по которой мы отбираем дочерние разделы и выводим их в списке.
 */
function getIdSections($ID) {?>
	<?
	$arFilter = Array('IBLOCK_ID'=>IBLOCK_ID, 'GLOBAL_ACTIVE'=>'Y', 'SECTION_ID'=>$ID);
	$db_list = CIBlockSection::GetList(Array('sort'=>'asc'), $arFilter, true, array('NAME', 'SECTION_PAGE_URL'));
	?>
	<ul class="navigation-section_list">
		<?while($ar_result = $db_list->GetNext()) {?>
			<li><a href="<?=$ar_result['SECTION_PAGE_URL']?>"><?=$ar_result['NAME']?></a></li>
		<?}?>
	</ul>
<?}?>
