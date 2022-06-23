<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<?
$this->setFrameMode(true);
if($_arResult = CAllcorp2::CheckSmartFilterSEF($arParams, $component)){
	$arResult = $_arResult;
	include  __DIR__.'/section.php';
	return;
}

global $arTheme;
use \Bitrix\Main\Localization\Loc;
$bOrderViewBasket = (trim($arTheme['ORDER_VIEW']['VALUE']) === 'Y');

// get element
$arItemFilter = CAllcorp2::GetCurrentElementFilter($arResult['VARIABLES'], $arParams);

global $APPLICATION;
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/animation/animate.min.css');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/sly.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/vendor/jquery.bxslider.js');

$arElement = CCache::CIblockElement_GetList(array('CACHE' => array('TAG' => CCache::GetIBlockCacheTag($arParams['IBLOCK_ID']), 'MULTI' => 'N')), $arItemFilter, false, false, array('ID', 'PREVIEW_TEXT', 'IBLOCK_SECTION_ID', 'PREVIEW_PICTURE', 'DETAIL_PICTURE'));
?>

<?$APPLICATION->SetPageProperty("MENU", $arTheme['SHOW_LEFT_BLOCK']['VALUE'])?>

<?if(!$arElement && $arParams['SET_STATUS_404'] !== 'Y'):?>
	<div class="alert alert-warning"><?=GetMessage("ELEMENT_NOTFOUND")?></div>
<?elseif(!$arElement && $arParams['SET_STATUS_404'] === 'Y'):?>
	<?CAllcorp2::goto404Page();?>
<?else:?>
	<?CAllcorp2::CheckComponentTemplatePageBlocksParams($arParams, __DIR__);?>
	<?// rss
	if($arParams['USE_RSS'] !== 'N'){
		CAllcorp2::ShowRSSIcon($arResult['FOLDER'].$arResult['URL_TEMPLATES']['rss']);
	}
	?>
	<?CAllcorp2::AddMeta(
		array(
			'og:description' => $arElement['PREVIEW_TEXT'],
			'og:image' => (($arElement['PREVIEW_PICTURE'] || $arElement['DETAIL_PICTURE']) ? CFile::GetPath(($arElement['PREVIEW_PICTURE'] ? $arElement['PREVIEW_PICTURE'] : $arElement['DETAIL_PICTURE'])) : false),
		)
	);?>
	<div class="catalog detail detail_narrow_<?=$arTheme['SHOW_LEFT_BLOCK']['VALUE'];?> fixed_wrapper" itemscope itemtype="http://schema.org/Product">
		<?if($arParams["USE_SHARE"] == "Y" && $arElement):?>
			<div class="share top <?=($arParams['USE_RSS'] !== 'N' ? 'rss-block' : '');?>">
				<div class="shares-block">
					<script type="text/javascript" src="//yastatic.net/share2/share.js" async="async" charset="utf-8"></script>
					<div class="ya-share2" data-services="vkontakte,facebook,twitter,viber,whatsapp,odnoklassniki,moimir"></div>
				</div>
			</div>
			<script type="text/javascript">
				showTopIcons();
			</script>
		<?endif;?>

		<?//element?>
		<?$sViewElementTemplate = ($arParams["ELEMENT_TYPE_VIEW"] == "FROM_MODULE" ? $arTheme["CATALOG_PAGE_DETAIL"]["VALUE"] : $arParams["ELEMENT_TYPE_VIEW"]);?>
		<?@include_once('page_blocks/'.$sViewElementTemplate.'.php');?>
		
		<?if($arTheme['SHOW_LEFT_BLOCK']['VALUE'] == 'N'):?>
			<div class="row">
				<div class="col-md-9">
		<?endif;?>
		<hr class="bottoms" />
		<div class="row">
			<div class="col-md-6 col-sm-6 share">
				<?if($arParams["USE_SHARE"] == "Y" && $arElement):?>
					<div class="shares-block">
						<span class="text"><?=GetMessage('SHARE_TEXT')?></span>
						<script type="text/javascript" src="//yastatic.net/share2/share.js" async="async" charset="utf-8"></script>
						<div class="ya-share2" data-services="vkontakte,facebook,twitter,viber,whatsapp,odnoklassniki,moimir"></div>
					</div>
				<?endif;?>
			</div>
			<div class="col-md-6 col-sm-6">
				<?
				$list_url = $arResult['FOLDER'].$arResult['URL_TEMPLATES']['news'];
				if($arElement['IBLOCK_SECTION_ID'])
				{
					$arSection = CCache::CIBlockSection_GetList(array('CACHE' => array('TAG' => CCache::GetIBlockCacheTag($arElement['IBLOCK_ID']), 'MULTI' => 'N')), array('ID' => $arElement['IBLOCK_SECTION_ID'], 'ACTIVE' => 'Y'), false, array('ID', 'NAME', 'SECTION_PAGE_URL'));
					if($arSection['SECTION_PAGE_URL'])
						$list_url = $arSection['SECTION_PAGE_URL'];
				}
				?>
				<a class="back-url url-block" href="<?=$list_url;?>"><i class="fa fa-angle-left"></i><span><?=($arParams["T_PREV_LINK"] ? $arParams["T_PREV_LINK"] : GetMessage('BACK_LINK'));?></span></a>
			</div>
		</div>
		<?if($arTheme['SHOW_LEFT_BLOCK']['VALUE'] == 'N'):?>
				</div>
			</div>
		<?endif;?>

	</div>
	<?
	if(is_array($arElement['IBLOCK_SECTION_ID']) && count($arElement['IBLOCK_SECTION_ID']) > 1){
		CAllcorp2::CheckAdditionalChainInMultiLevel($arResult, $arParams, $arElement);
	}
	?>
<?endif;?>