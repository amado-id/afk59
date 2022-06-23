<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>


<?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	"map",
	Array(
		"CONTROLS" => array("ZOOM","TYPECONTROL","SCALELINE"),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:58.04562982724865;s:10:\"yandex_lon\";d:56.21068898004598;s:12:\"yandex_scale\";i:10;s:10:\"PLACEMARKS\";a:2:{i:0;a:3:{s:3:\"LON\";d:56.264473488562;s:3:\"LAT\";d:57.955054014555;s:4:\"TEXT\";s:47:\"Пермь, ул. Героев Хасана, 92\";}i:1;a:3:{s:3:\"LON\";d:56.255835922185;s:3:\"LAT\";d:57.999542793599;s:4:\"TEXT\";s:51:\"Пермь, ул. Газеты «Звезда», 56\";}}}",
		"MAP_HEIGHT" => "600",
		"MAP_ID" => "",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array("ENABLE_DBLCLICK_ZOOM","ENABLE_DRAGGING")
	)
);?>