<?if( !defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true ) die();?>
<?\Bitrix\Main\Localization\Loc::loadMessages(__FILE__);?>
<?$APPLICATION->AddChainItem(GetMessage("TITLE"));?>
<?$APPLICATION->SetTitle(GetMessage("TITLE"));?>
<?$APPLICATION->SetPageProperty("TITLE_CLASS", "center");?>
<?global $USER, $APPLICATION;
$APPLICATION->SetPageProperty('MENU', 'N');
if( !$USER->IsAuthorized() ){?>
	<?$APPLICATION->IncludeComponent(
		"bitrix:main.register",
		"main",
		Array(
			"USER_PROPERTY_NAME" => "",
			"SHOW_FIELDS" => array( "LAST_NAME", "NAME", "SECOND_NAME", "EMAIL", "PERSONAL_PHONE" ),
			"REQUIRED_FIELDS" => array( "NAME","PERSONAL_PHONE", "EMAIL" ),
			"AUTH" => "Y",
			"USE_BACKURL" => "Y",
			"SUCCESS_PAGE" => "",
			"SET_TITLE" => "N",
			"USER_PROPERTY" => array()
		)
	);?>
<?}else{
	LocalRedirect( $arParams["SEF_FOLDER"] );
}?>