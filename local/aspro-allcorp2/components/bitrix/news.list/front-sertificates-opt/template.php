<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!--    <script type='text/javascript' src='--><?//=SITE_TEMPLATE_PATH."/js/jquery-slider.js"?><!--'></script>-->
<!--    <script type="text/javascript" src="--><?//=SITE_TEMPLATE_PATH.'/js/carousel.js'?><!--"></script>-->
<!--    <script type="text/javascript" src="--><?//=SITE_TEMPLATE_PATH.'/js/jcarousel.basic.js'?><!--""></script>-->
<? $this->setFrameMode( true ); ?>

<?if($arResult["ITEMS"]){?>
<!--    --><?// echo '<pre>'; print_r($arResult["ITEMS"]['DISPLAY_PROPERTIES']['FILE']); echo '</pre>';?>
<div class="wrapper">
    <div class="jcarousel-wrapper">
        <div class="jcarousel">
            <ul>
                <?foreach($arResult["ITEMS"] as $arItem){
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    $img_source = ($arItem["PREVIEW_PICTURE"] ? $arItem["PREVIEW_PICTURE"] : ($arItem["DETAIL_PICTURE"] ? $arItem["DETAIL_PICTURE"] : ''));
                    ?>
                <li class="slider_list">
                    <!--                            --><?// echo '<pre>'; print_r($arItem); echo '</pre>' ?>
                    <?if($img_source):?>
                        <?if(isset($arItem['SECTIONS']) && $arItem['SECTIONS']):?>
                            <div class="stickers">
                                <div class="stickers-wrapper">

                                    <?foreach($arItem['SECTIONS'] as $section):?>
                                        <div class="sticker"><?=$section;?></div>
                                    <?endforeach;?>
                                </div>
                            </div>
                        <?endif;?>
                        <div class="img_slider">
                            <?$img = CFile::ResizeImageGet($img_source, array("width" => 700, "height" => 700), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, true, false, false, 75 );?>
                            <a href="<?=$arItem['DISPLAY_PROPERTIES']['FILE']['FILE_VALUE']['SRC'];?>" target="_blank">
                                <img src="<?=$img["src"]?>" alt="<?=$arItem["NAME"];?>"  />
                            </a>
                            <p style="font-weight: 500; text-align: center"><?=$arItem['NAME']?></p>
                            <p class="type_document"><?=$arItem["DISPLAY_PROPERTIES"]["TYPE_DOC"]["VALUE"]?></p>
                        </div>
                    <?endif;?>
                    <?if(($arItem["DISPLAY_ACTIVE_FROM"] || $arItem["DISPLAY_PROPERTIES"]["PERIOD"]["VALUE"]) && $arParams["SHOW_DATE"]=="Y"){?>
                        <div class="date"><?=($arItem["DISPLAY_PROPERTIES"]["PERIOD"]["VALUE"] ? $arItem["DISPLAY_PROPERTIES"]["PERIOD"]["VALUE"] : $arItem["DISPLAY_ACTIVE_FROM"]);?></div>
                    <?}?>

                </li>
                <?}?>
            </ul>
        </div>
        <div class="paginate">
            <a href="#" class="jcarousel-control-prev"></a>
            <a href="#" class="jcarousel-control-next"></a>
        </div>
    </div>
    </div>
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
        <br /><?=$arResult["NAV_STRING"]?>
    <?endif;?>
<?}?>