<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Сотрудники отдела продаж «Академия фасада и кровли» — первоклассные специалисты. Проконсультируют, помогут с выбором товара, рассчитают стоимость работ или доставки товара, уточнят детали договора");
$APPLICATION->SetTitle("Сотрудники");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"staff", 
	array(
		"IBLOCK_TYPE" => "aspro_allcorp2_content",
		"IBLOCK_ID" => "10",
		"NEWS_COUNT" => "20",
		"USE_SEARCH" => "N",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "DESC",
		"CHECK_DATES" => "Y",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/company/staff/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "100000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"USE_PERMISSIONS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "EMAIL",
			1 => "POST",
			2 => "PHONE",
			3 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"DISPLAY_NAME" => "N",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "PREVIEW_PICTURE",
			2 => "DETAIL_TEXT",
			3 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "LINK_FAQ",
			1 => "LINK_SALE",
			2 => "LINK_NEWS",
			3 => "LINK_REVIEWS",
			4 => "LINK_PROJECTS",
			5 => "SITE",
			6 => "LINK_STAFF",
			7 => "PHONE",
			8 => "LINK_SERVICES",
			9 => "test",
			10 => "PRICEOLD",
			11 => "PRICE",
			12 => "LINK_GOODS",
			13 => "FORM_ORDER",
			14 => "FORM_QUESTION",
			15 => "STATUS",
			16 => "ARTICLE",
			17 => "SUPPLIED",
			18 => "AGE",
			19 => "KARTOPR",
			20 => "HEIGHT",
			21 => "DEPTH",
			22 => "DEEP",
			23 => "GRUZ_STRELI",
			24 => "GRUZ",
			25 => "DIAGONAL",
			26 => "DLINA_STRELI",
			27 => "DLINA",
			28 => "CATEGORY",
			29 => "CLASS",
			30 => "CLIMAT_CLASS",
			31 => "KOL_FORMULA",
			32 => "USERS",
			33 => "EXTENSION",
			34 => "MARK_STEEL",
			35 => "MASS",
			36 => "MODEL",
			37 => "POWER",
			38 => "UPDATES",
			39 => "VOLUME",
			40 => "PROIZVODSTVO",
			41 => "SIZE",
			42 => "PLACE",
			43 => "RESOLUTION",
			44 => "LIGHTS_LOCATION",
			45 => "RECOMMEND",
			46 => "SERIES",
			47 => "SPEED",
			48 => "DURATION",
			49 => "TEMPERATURE",
			50 => "LINK_TIZERS",
			51 => "TYPE",
			52 => "TYPE_TUR",
			53 => "THICKNESS",
			54 => "MARK",
			55 => "INCREASE",
			56 => "COLOR",
			57 => "FREQUENCY",
			58 => "FREQUENCE",
			59 => "WIDTH_PROHOD",
			60 => "WIDTH_PROEZD",
			61 => "WIDTH",
			62 => "LANGUAGES",
			63 => "DOCUMENTS",
			64 => "PHOTOS",
			65 => "EMAIL",
			66 => "POST",
			67 => "SEND_MESS",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"VIEW_TYPE" => "table",
		"SHOW_TABS" => "N",
		"SHOW_SECTION_PREVIEW_DESCRIPTION" => "Y",
		"COUNT_IN_LINE" => "3",
		"AJAX_OPTION_ADDITIONAL" => "",
		"USE_REVIEW" => "N",
		"ADD_ELEMENT_CHAIN" => "Y",
		"SHOW_DETAIL_LINK" => "Y",
		"IMAGE_POSITION" => "left",
		"COMPONENT_TEMPLATE" => "staff",
		"SET_LAST_MODIFIED" => "Y",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"SECTION_ELEMENTS_TYPE_VIEW" => "FROM_MODULE",
		"ELEMENT_TYPE_VIEW" => "element_1",
		"STRICT_SECTION_CHECK" => "N",
		"DETAIL_USE_COMMENTS" => "Y",
		"DETAIL_BLOG_USE" => "Y",
		"DETAIL_BLOG_URL" => "catalog_comments",
		"COMMENTS_COUNT" => "5",
		"BLOG_TITLE" => "Комментарии",
		"DETAIL_BLOG_EMAIL_NOTIFY" => "Y",
		"DETAIL_VK_USE" => "N",
		"DETAIL_FB_USE" => "Y",
		"T_DOCS" => "",
		"T_GOODS" => "",
		"T_SERVICES" => "",
		"T_PROJECTS" => "",
		"T_REVIEWS" => "",
		"REVIEWS_IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_allcorp2_content"]["aspro_allcorp2_reviews"][0],
		"PROJECTS_IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_allcorp2_content"]["aspro_allcorp2_projects"][0],
		"CATALOG_IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_allcorp2_catalog"]["aspro_allcorp2_catalog"][0],
		"SERVICES_IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_allcorp2_content"]["aspro_allcorp2_services"][0],
		"ELEMENTS_TABLE_TYPE_VIEW" => "FROM_MODULE",
		"LIST_PRODUCT_BLOCKS_ORDER" => "docs,projects,services,reviews,goods,comments",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>