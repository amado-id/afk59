<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?><!DOCTYPE html>
<?if(CModule::IncludeModule("aspro.allcorp2"))
    $arThemeValues = CAllcorp2::GetFrontParametrsValues(SITE_ID);
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>" class="<?=($_SESSION['SESS_INCLUDE_AREAS'] ? 'bx_editmode ' : '')?><?=strpos( $_SERVER['HTTP_USER_AGENT'], 'MSIE 7.0' ) ? 'ie ie7' : ''?> <?=strpos( $_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0' ) ? 'ie ie8' : ''?> <?=strpos( $_SERVER['HTTP_USER_AGENT'], 'MSIE 7.0' ) ? 'ie ie9' : ''?>">
<head>

    <!-- Google Tag Manager -->
    <script data-skip-moving="true">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-K9NMZK3');</script>
    <!-- End Google Tag Manager -->

    <script data-skip-moving="true">
        window.ga = window.ga || function() {
            (window.ga.q = window.ga.q || []).push(arguments)
        }
        ga('create', 'UA-64517002-1');
    </script>

    <meta property="og:image" content="https://afk59.ru/logo.png" />
    <link rel="image_src" href="https://afk59.ru/logo.png"  />
    <?global $APPLICATION;?>
    <?IncludeTemplateLangFile(__FILE__);?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta name="cmsmagazine" content="192588d9dc3078edbe73f107d019468e" />
    <?$APPLICATION->ShowMeta("viewport");?>
    <?$APPLICATION->ShowMeta("HandheldFriendly");?>
    <?$APPLICATION->ShowMeta("apple-mobile-web-app-capable", "yes");?>
    <?$APPLICATION->ShowMeta("apple-mobile-web-app-status-bar-style");?>
    <?$APPLICATION->ShowMeta("SKYPE_TOOLBAR");?>
    <?$APPLICATION->ShowHead();?>
    <?$APPLICATION->AddHeadString('<script>BX.message('.CUtil::PhpToJSObject($MESS, false).')</script>', true);?>
    <?if(CModule::IncludeModule("aspro.allcorp2")) {CAllcorp2::Start(SITE_ID);}?>
    <link rel="apple-touch-icon" sizes="57x57" href="/bitrix/templates/aspro-allcorp2/themes/CUSTOM_s1/images/favicon_57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/bitrix/templates/aspro-allcorp2/themes/CUSTOM_s1/images/favicon_72.png" />
    <meta name="yandex-verification" content="6465dabcfefda9b8" />

    <?
    if ($_REQUEST['PAGEN_1'])
        \Bitrix\Main\Page\Asset::getInstance()->addString('<link rel="canonical" href="https://' . $_SERVER['HTTP_HOST'] . str_replace("index.php","",$APPLICATION->GetCurPage(true)) . '" />');
    ?>
</head>

<body class="<?=(CModule::IncludeModule("aspro.allcorp2") ? CAllcorp2::getConditionClass() : '');?> mheader-v<?=$arThemeValues["HEADER_MOBILE"];?> footer-v<?=strtolower($arThemeValues['FOOTER_TYPE']);?> fill_bg_<?=strtolower($arThemeValues['SHOW_BG_BLOCK']);?> header-v<?=$arThemeValues["HEADER_TYPE"];?> title-v<?=$arThemeValues["PAGE_TITLE"];?><?=($arThemeValues['ORDER_VIEW'] == 'Y' && $arThemeValues['ORDER_BASKET_VIEW']=='HEADER'? ' with_order' : '')?><?=($arThemeValues['CABINET'] == 'Y' ? ' with_cabinet' : '')?><?=(intval($arThemeValues['HEADER_PHONES']) > 0 ? ' with_phones' : '')?>">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K9NMZK3"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!--amoCRM-->
<script>var amo_social_button = {id: "15875", hash: "f80e75a25a2549485e567c2fca1f7c49117f1425dc1436198d77de61434f8714", locale: "ru", setMeta: function(params) {this.params = this.params || []; this.params.push(params);}};</script><script id="amo_social_button_script" async="async" src="https://gso.amocrm.ru/js/button.js"></script>
<!--/amoCRM-->

<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<?if(!CModule::IncludeModule("aspro.allcorp2")):?>
    <?$APPLICATION->SetTitle(GetMessage("ERROR_INCLUDE_MODULE_ALLCORP2_TITLE"));?>
    <?$APPLICATION->IncludeFile(SITE_DIR."include/error_include_module.php");?>
    <?die();?>
<?endif;?>

<?CAllcorp2::SetJSOptions();?>
<?global $arTheme;?>
<?$arTheme = $APPLICATION->IncludeComponent("aspro:theme.allcorp2", "", array(), false);?>
<?include_once('defines.php');?>

<?CAllcorp2::get_banners_position('TOP_HEADER');?>
<div class="visible-lg visible-md title-v<?=$arTheme["PAGE_TITLE"]["VALUE"];?><?=($isIndex ? ' index' : '')?>">
    <?CAllcorp2::ShowPageType('header');?>
</div>

<?CAllcorp2::get_banners_position('TOP_UNDERHEADER');?>

<?if($arTheme["TOP_MENU_FIXED"]["VALUE"] == 'Y'):?>
    <div id="headerfixed">
        <?CAllcorp2::ShowPageType('header_fixed');?>
    </div>
<?endif;?>

<div id="mobileheader" class="visible-xs visible-sm">
    <?CAllcorp2::ShowPageType('header_mobile');?>
    <div id="mobilemenu" class="<?=($arTheme["HEADER_MOBILE_MENU_OPEN"]["VALUE"] == '1' ? 'leftside':'dropdown')?>">
        <?CAllcorp2::ShowPageType('header_mobile_menu');?>
    </div>
</div>

<div class="body <?=($isIndex ? 'index' : '')?> hover_<?=$arTheme["HOVER_TYPE_IMG"]["VALUE"];?>">
    <div class="body_media"></div>

    <div role="main" class="main banner-auto">
        <?if(!$isIndex && !$is404 && !$isForm):?>
        <?$APPLICATION->ShowViewContent('section_bnr_content');?>
        <?if($APPLICATION->GetProperty("HIDETITLE")!=='Y'):?>
        <!--title_content-->
        <? if (CSite::InDir('/optom/')):?>
      

            <?else:?>
                <? CAllcorp2::ShowPageType('page_title');?>
            <?endif;?>
            <!--end-title_content-->
            <?endif;?>
            <?$APPLICATION->ShowViewContent('top_section_filter_content');?>
            <?endif; // if !$isIndex && !$is404 && !$isForm?>

            <div class="container <?=($isCabinet ? 'cabinte-page' : '');?><?=($isBlog ? ' blog-page' : '');?> <?=CAllcorp2::ShowPageProps("ERROR_404");?>">
                <?if(!$isIndex):?>
                <div class="row">
                    <?if($APPLICATION->GetProperty("FULLWIDTH")!=='Y'):?>
                    <? if (CSite::InDir('/optom/')):?>
                    <div class="custom">
                        <? else:?>
                        <div class="maxwidth-theme">
                            <?endif;?>
                            <?endif;?>
                            <?if($is404):?>
                            <div class="col-md-12 col-sm-12 col-xs-12 content-md">
                                <?else:?>
                                <!--								<div class="col-md-12 col-sm-12 col-xs-12 content-md">-->
                                <div class="right_block narrow_<?=CAllcorp2::ShowPageProps("MENU");?>">
                                    <?CAllcorp2::get_banners_position('CONTENT_TOP');?>

                                    <?ob_start();?>
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:menu",
                                        "left",
                                        array(
                                            "ROOT_MENU_TYPE" => "left",
                                            "MENU_CACHE_TYPE" => "A",
                                            "MENU_CACHE_TIME" => "3600000",
                                            "MENU_CACHE_USE_GROUPS" => "N",
                                            "MENU_CACHE_GET_VARS" => array(
                                            ),
                                            "MAX_LEVEL" => "4",
                                            "CHILD_MENU_TYPE" => "left",
                                            "USE_EXT" => "Y",
                                            "DELAY" => "N",
                                            "ALLOW_MULTI_SELECT" => "Y",
                                            "COMPONENT_TEMPLATE" => "left"
                                        ),
                                        false
                                    );?>
                                    <?$sMenuContent = ob_get_contents();
                                    ob_end_clean();?>
                                    <?endif;?>
                                    <?endif;?>
<?CAllcorp2::checkRestartBuffer();?>