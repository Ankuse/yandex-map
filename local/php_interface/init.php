<?
function debug($data) {
	echo '<pre>' . print_r($data, 1) . '</pre>';
}
if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php')) {
	require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
}
