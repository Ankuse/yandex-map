<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/**
 * GetListProperty
 *
 * GetListProperty on d7 with loader and fetching
 * Get Property only from Iblock not FOR ELEMENT!
 */
use \Bitrix\Main\Loader;

try {
	Loader::includeModule('iblock');
} catch (\Bitrix\Main\LoaderException $e) {}

try {
	$rsProperty = \Bitrix\Iblock\PropertyTable::getList(array(
	  'select' => array('*'),
	  'filter' => array('IBLOCK_ID' => 1, 'ACTIVE' => 'Y'),
	));
} catch (\Bitrix\Main\ObjectPropertyException $e) {
} catch (\Bitrix\Main\ArgumentException $e) {
} catch (\Bitrix\Main\SystemException $e) {
}
while($arProperty=$rsProperty->fetch()) {
	debug($arProperty);
}
/**
* END GetListProperty
*/

////////////////////////////////////////////////////////////////////////

/**
 * GetListElement and then GetProperty on d7
 *
 * GetListElement and GetProperty on d7 with loader and fetching
 * Uncomment Loader and includeModule
 */
//use \Bitrix\Main\Loader;

//try {
//	Loader::includeModule('iblock');
//} catch (\Bitrix\Main\LoaderException $e) {}

try {
	$rselement = \Bitrix\Iblock\ElementTable::getList(array(
	  'select' => array('*'),
	  'filter' => array('IBLOCK_ID' => '1')
	));
} catch (\Bitrix\Main\ObjectPropertyException $e) {
} catch (\Bitrix\Main\ArgumentException $e) {
} catch (\Bitrix\Main\SystemException $e) {
}
while($arElem=$rselement->fetch()) {
	$arProps = CIBlockElement::GetProperty($arElem['IBLOCK_ID'], $arElem['ID'])->Fetch();
	debug($arProps);
}
/**
 * END GetListElement and GetProperty
 */