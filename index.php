<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');

use \Bitrix\Main\Loader;

try {
	Loader::includeModule('iblock');
} catch (\Bitrix\Main\LoaderException $e) {}

try {
	$rsProperty = \Bitrix\Iblock\PropertyTable::getList(array(
	  'filter' => array('IBLOCK_ID' => 1, 'ACTIVE' => 'Y'),
	));
} catch (\Bitrix\Main\ObjectPropertyException $e) {
} catch (\Bitrix\Main\ArgumentException $e) {
} catch (\Bitrix\Main\SystemException $e) {
}

$res = $rsProperty->fetchAll();
foreach ($res as $re) {
	$ar_res = CIBlockElement::GetProperty($re['IBLOCK_ID'], $re['ID']);
	//debug($re);
	//debug($ar_res);
}?>
qwe
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>