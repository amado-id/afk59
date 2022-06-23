<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Контакты компании «Академия фасада и кровли» — адрес, режим работы, телефоны для оперативной связи");
$APPLICATION->SetTitle("Контакты");?>

<?CAllcorp2::ShowPageType('page_contacts');?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>