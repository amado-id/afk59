<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Main\ModuleManager;
use Bitrix\Main\Web\Json;

if (!Loader::includeModule('iblock'))
	return;

CBitrixComponent::includeComponentClass('bitrix:catalog.section');

$arGalleryType = array('big' => GetMessage('GALLERY_BIG'), 'small' => GetMessage('GALLERY_SMALL'));

/* get component template pages & params array */
$arPageBlocksParams = array();
if(\Bitrix\Main\Loader::includeModule('aspro.allcorp2')){
	$arPageBlocks = CAllcorp2::GetComponentTemplatePageBlocks(__DIR__);
	$arPageBlocksParams = CAllcorp2::GetComponentTemplatePageBlocksParams($arPageBlocks);
	CAllcorp2::AddComponentTemplateModulePageBlocksParams(__DIR__, $arPageBlocksParams); // add option value FROM_MODULE
}

$arTemplateParameters = array_merge($arPageBlocksParams, array(
	'SHOW_DETAIL_LINK' => array(
		'PARENT' => 'LIST_SETTINGS',
		'NAME' => GetMessage('SHOW_DETAIL_LINK'),
		'TYPE' => 'CHECKBOX',
		'DEFAULT' => 'Y',
	),
	'ELEMENTS_TABLE_TYPE_VIEW' => array(
		'PARENT' => 'DETAIL_SETTINGS',
		'NAME' => GetMessage('ELEMENTS_TABLE_TYPE_VIEW'),
		'TYPE' => 'LIST',
		'VALUES' => array(
			'FROM_MODULE' => GetMessage('FROM_MODULE_PARAMS'),
			'catalog_linked' => GetMessage('ELEMENTS_TABLE_TYPE_VIEW_NORMAL'),
			'catalog_linked_2' => GetMessage('ELEMENTS_TABLE_TYPE_VIEW_PROPS'),
		),
		'DEFAULT' => 'left',
	),
	'SHOW_FILTER_DATE' => array(
		'PARENT' => 'LIST_SETTINGS',
		'NAME' => GetMessage('SHOW_FILTER_DATE'),
		'TYPE' => 'CHECKBOX',
		'DEFAULT' => 'Y',
	),
	'SHOW_SECTION' => array(
		'PARENT' => 'LIST_SETTINGS',
		'NAME' => GetMessage('SHOW_SECTION'),
		'TYPE' => 'CHECKBOX',
		'DEFAULT' => 'Y',
	),
	'SHOW_MORE_LINK' => array(
		'PARENT' => 'LIST_SETTINGS',
		'NAME' => GetMessage('SHOW_MORE_LINK'),
		'TYPE' => 'CHECKBOX',
		'DEFAULT' => 'Y',
	),
	'IMAGE_POSITION' => array(
		'PARENT' => 'LIST_SETTINGS',
		'SORT' => 250,
		'NAME' => GetMessage('IMAGE_POSITION'),
		'TYPE' => 'LIST',
		'VALUES' => array(
			'left' => GetMessage('IMAGE_POSITION_LEFT'),
			'right' => GetMessage('IMAGE_POSITION_RIGHT'),
		),
		'DEFAULT' => 'left',
	),
	'LINE_ELEMENT_COUNT_LIST' => array(
		'PARENT' => 'LIST_SETTINGS',
		'SORT' => 700,
		'NAME' => GetMessage('T_LINE_ELEMENT_COUNT_LIST'),
		'TYPE' => 'STRING',
		'DEFAULT' => 3,
	),
	'SHOW_NEXT_ELEMENT' => array(
		'PARENT' => 'DETAIL_SETTINGS',
		'SORT' => 600,
		'NAME' => GetMessage('T_SHOW_NEXT_ELEMENT'),
		'TYPE' => 'CHECKBOX',
		'DEFAULT' => 'N',
	),
	'USE_SHARE' => array(
		'PARENT' => 'DETAIL_SETTINGS',
		'SORT' => 600,
		'NAME' => GetMessage('USE_SHARE'),
		'TYPE' => 'CHECKBOX',
		'DEFAULT' => 'N',
	),
	'SHOW_ADDITIONAL_TAB' => array(
		'PARENT' => 'DETAIL_SETTINGS',
		'SORT' => 600,
		'NAME' => GetMessage('SHOW_ADDITIONAL_TAB'),
		'TYPE' => 'CHECKBOX',
		'DEFAULT' => 'N',
	),
	'GALLERY_TYPE' => array(
		'PARENT' => 'DETAIL_SETTINGS',
		'SORT' => 600,
		'NAME' => GetMessage('GALLERY_TYPE'),
		'TYPE' => 'LIST',
		'VALUES' => $arGalleryType,
		'DEFAULT' => 'small',
	),
	'S_ASK_QUESTION' => array(
		'SORT' => 700,
		'NAME' => GetMessage('S_ASK_QUESTION'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'S_ORDER_SERVISE' => array(
		'SORT' => 701,
		'NAME' => GetMessage('S_ORDER_SERVISE'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'FORM_ID_ORDER_SERVISE' => array(
		'SORT' => 701,
		'NAME' => GetMessage('T_FORM_ID_ORDER_SERVISE'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'T_GALLERY' => array(
		'SORT' => 702,
		'NAME' => GetMessage('T_GALLERY'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'T_DOCS' => array(
		'SORT' => 703,
		'NAME' => GetMessage('T_DOCS'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'T_GOODS' => array(
		'SORT' => 704,
		'NAME' => GetMessage('T_GOODS'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'T_SERVICES' => array(
		'SORT' => 706,
		'NAME' => GetMessage('T_SERVICES'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'T_NEWS' => array(
		'SORT' => 706,
		'NAME' => GetMessage('T_NEWS'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'T_FAQ' => array(
		'SORT' => 706,
		'NAME' => GetMessage('T_FAQ'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'T_REVIEWS' => array(
		'SORT' => 706,
		'NAME' => GetMessage('T_REVIEWS'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'T_COMPANY' => array(
		'SORT' => 706,
		'NAME' => GetMessage('T_COMPANY'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'T_PROJECTS' => array(
		'SORT' => 706,
		'NAME' => GetMessage('T_PROJECTS'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'T_CLIENTS' => array(
		'SORT' => 706,
		'NAME' => GetMessage('T_CLIENTS'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'T_STUDY' => array(
		'SORT' => 706,
		'NAME' => GetMessage('T_STUDY'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'T_ARTICLES' => array(
		'SORT' => 706,
		'NAME' => GetMessage('T_ARTICLES'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'TAB_DOPS_NAME' => array(
		'SORT' => 706,
		'NAME' => GetMessage('TAB_DOPS_NAME'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'T_NEXT_LINK' => array(
		'SORT' => 707,
		'NAME' => GetMessage('T_NEXT_LINK'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'T_PREV_LINK' => array(
		'SORT' => 707,
		'NAME' => GetMessage('T_PREV_LINK'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'REVIEWS_IBLOCK_ID' => array(
		'SORT' => 704,
		'NAME' => GetMessage('REVIEWS_IBLOCK_ID'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'PROJECTS_IBLOCK_ID' => array(
		'SORT' => 704,
		'NAME' => GetMessage('PROJECTS_IBLOCK_ID'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'SERVICES_IBLOCK_ID' => array(
		'SORT' => 704,
		'NAME' => GetMessage('SERVICES_IBLOCK_ID'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'CATALOG_IBLOCK_ID' => array(
		'SORT' => 704,
		'NAME' => GetMessage('CATALOG_IBLOCK_ID'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'FAQ_IBLOCK_ID' => array(
		'SORT' => 704,
		'NAME' => GetMessage('FAQ_IBLOCK_ID'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'STAFF_IBLOCK_ID' => array(
		'SORT' => 704,
		'NAME' => GetMessage('STAFF_IBLOCK_ID'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'TIZERS_IBLOCK_ID' => array(
		'SORT' => 704,
		'NAME' => GetMessage('TIZERS_IBLOCK_ID'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'NEWS_IBLOCK_ID' => array(
		'SORT' => 704,
		'NAME' => GetMessage('NEWS_IBLOCK_ID'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'SALES_IBLOCK_ID' => array(
		'SORT' => 704,
		'NAME' => GetMessage('SALES_IBLOCK_ID'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'STUDY_IBLOCK_ID' => array(
		'SORT' => 704,
		'NAME' => GetMessage('STUDY_IBLOCK_ID'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'ARTICLES_IBLOCK_ID' => array(
		'SORT' => 704,
		'NAME' => GetMessage('ARTICLES_IBLOCK_ID'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
));

$arTemplateParameters['DETAIL_USE_COMMENTS'] = array(
	'PARENT' => 'DETAIL_SETTINGS',
	'NAME' => GetMessage('CP_BC_TPL_DETAIL_USE_COMMENTS'),
	'TYPE' => 'CHECKBOX',
	'DEFAULT' => 'N',
	'REFRESH' => 'Y'
);

if ('Y' == $arCurrentValues['DETAIL_USE_COMMENTS'])
{
	if (\Bitrix\Main\ModuleManager::isModuleInstalled("blog"))
	{
		$arTemplateParameters['DETAIL_BLOG_USE'] = array(
			'PARENT' => 'DETAIL_SETTINGS',
			'NAME' => GetMessage('CP_BC_TPL_DETAIL_BLOG_USE'),
			'TYPE' => 'CHECKBOX',
			'DEFAULT' => 'N',
			'REFRESH' => 'Y'
		);
		if (isset($arCurrentValues['DETAIL_BLOG_USE']) && $arCurrentValues['DETAIL_BLOG_USE'] == 'Y')
		{
			$arTemplateParameters['DETAIL_BLOG_URL'] = array(
				'PARENT' => 'DETAIL_SETTINGS',
				'NAME' => GetMessage('CP_BC_DETAIL_TPL_BLOG_URL'),
				'TYPE' => 'STRING',
				'DEFAULT' => 'catalog_comments'
			);
			$arTemplateParameters['COMMENTS_COUNT'] = array(
				'PARENT' => 'DETAIL_SETTINGS',
				'NAME' => GetMessage('T_COMMENTS_COUNT'),
				'TYPE' => 'STRING',
				'DEFAULT' => '5'
			);
			$arTemplateParameters['BLOG_TITLE'] = array(
				'PARENT' => 'DETAIL_SETTINGS',
				'NAME' => GetMessage('BLOCK_TITLE_TAB'),
				'TYPE' => 'STRING',
				'DEFAULT' => GetMessage('S_COMMENTS_VALUE')
			);
			$arTemplateParameters['DETAIL_BLOG_EMAIL_NOTIFY'] = array(
				'PARENT' => 'DETAIL_SETTINGS',
				'NAME' => GetMessage('CP_BC_TPL_DETAIL_BLOG_EMAIL_NOTIFY'),
				'TYPE' => 'CHECKBOX',
				'DEFAULT' => 'N'
			);
		}
	}

	$boolRus = false;
	$langBy = "id";
	$langOrder = "asc";
	$rsLangs = CLanguage::GetList($langBy, $langOrder, array('ID' => 'ru',"ACTIVE" => "Y"));
	if ($arLang = $rsLangs->Fetch())
	{
		$boolRus = true;
	}

	if ($boolRus)
	{
		$arTemplateParameters['DETAIL_VK_USE'] = array(
			'PARENT' => 'DETAIL_SETTINGS',
			'NAME' => GetMessage('CP_BC_TPL_DETAIL_VK_USE'),
			'TYPE' => 'CHECKBOX',
			'DEFAULT' => 'N',
			'REFRESH' => 'Y'
		);

		if (isset($arCurrentValues['DETAIL_VK_USE']) && 'Y' == $arCurrentValues['DETAIL_VK_USE'])
		{
			$arTemplateParameters['VK_TITLE'] = array(
				'PARENT' => 'DETAIL_SETTINGS',
				'NAME' => GetMessage('BLOCK_TITLE_TAB'),
				'TYPE' => 'STRING',
				'DEFAULT' => GetMessage('S_VK_VALUE')
			);
			$arTemplateParameters['DETAIL_VK_API_ID'] = array(
				'PARENT' => 'DETAIL_SETTINGS',
				'NAME' => GetMessage('CP_BC_TPL_DETAIL_VK_API_ID'),
				'TYPE' => 'STRING',
				'DEFAULT' => 'API_ID'
			);
		}
	}

	$arTemplateParameters['DETAIL_FB_USE'] = array(
		'PARENT' => 'DETAIL_SETTINGS',
		'NAME' => GetMessage('CP_BC_TPL_DETAIL_FB_USE'),
		'TYPE' => 'CHECKBOX',
		'DEFAULT' => 'N',
		'REFRESH' => 'Y'
	);

	if (isset($arCurrentValues['DETAIL_FB_USE']) && 'Y' == $arCurrentValues['DETAIL_FB_USE'])
	{
		$arTemplateParameters['FB_TITLE'] = array(
			'PARENT' => 'DETAIL_SETTINGS',
			'NAME' => GetMessage('BLOCK_TITLE_TAB'),
			'TYPE' => 'STRING',
			'DEFAULT' => GetMessage('S_FB_VALUE')
		);
		$arTemplateParameters['DETAIL_FB_APP_ID'] = array(
			'PARENT' => 'DETAIL_SETTINGS',
			'NAME' => GetMessage('CP_BC_TPL_DETAIL_FB_APP_ID'),
			'TYPE' => 'STRING',
			'DEFAULT' => ''
		);
	}
}
$arTemplateParameters['LIST_PRODUCT_BLOCKS_ORDER'] = array(
	'PARENT' => 'DETAIL_SETTINGS',
	'NAME' => GetMessage('CP_BC_TPL_PRODUCT_BLOCKS_ORDER'),
	'TYPE' => 'CUSTOM',
	'JS_FILE' => CatalogSectionComponent::getSettingsScript('/bitrix/components/bitrix/catalog.section', 'dragdrop_order'),
	'JS_EVENT' => 'initDraggableOrderControl',
	'JS_DATA' => Json::encode(array(
		'sale' => GetMessage('CP_BC_TPL_PRODUCT_BLOCK_SALE'),
		'news' => GetMessage('CP_BC_TPL_PRODUCT_BLOCK_NEWS'),
		'gallery' => GetMessage('CP_BC_TPL_PRODUCT_BLOCK_GALLERY'),
		'services' => GetMessage('CP_BC_TPL_PRODUCT_BLOCK_SERVICES'),
		'projects' => GetMessage('CP_BC_TPL_PRODUCT_BLOCK_PROJECTS'),
		'reviews' => GetMessage('CP_BC_TPL_PRODUCT_BLOCK_REVIEWS'),
		'staff' => GetMessage('CP_BC_TPL_PRODUCT_BLOCK_STAFF'),
		'faq' => GetMessage('CP_BC_TPL_PRODUCT_BLOCK_FAQ'),
		'study' => GetMessage('CP_BC_TPL_PRODUCT_BLOCK_STUDY'),
		'articles' => GetMessage('CP_BC_TPL_PRODUCT_BLOCK_ARTICLES'),
		'dops' => GetMessage('CP_BC_TPL_PRODUCT_BLOCK_DOPS'),
		'goods' => GetMessage('CP_BC_TPL_PRODUCT_BLOCK_GOODS'),
		'docs' => GetMessage('CP_BC_TPL_PRODUCT_BLOCK_DOCS'),
		'comments' => GetMessage('CP_BC_TPL_PRODUCT_BLOCK_COMMENTS'),
	)),
	'DEFAULT' => 'sale,news,docs,gallery,projects,services,articles,study,dops,reviews,staff,faq,goods,comments'
);
?>