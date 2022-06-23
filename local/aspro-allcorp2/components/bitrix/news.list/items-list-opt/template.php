<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<?$this->setFrameMode(true);?>

<div class="swiper certificate-slider">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <?foreach($arResult['SECTIONS'] as $SID => $arSection):?>
            <?foreach($arSection['ITEMS'] as $i => $arItem):?>
                <?
                // edit/add/delete buttons for edit mode
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                // use detail link?
                $bDetailLink = $arParams['SHOW_DETAIL_LINK'] != 'N' && (!strlen($arItem['DETAIL_TEXT']) ? ($arParams['HIDE_LINK_WHEN_NO_DETAIL'] !== 'Y' && $arParams['HIDE_LINK_WHEN_NO_DETAIL'] != 1) : true);
                // preview picture
                $bImage = strlen($arItem['FIELDS']['PREVIEW_PICTURE']['SRC']);
                $imageSrc = ($bImage ? $arItem['FIELDS']['PREVIEW_PICTURE']['SRC'] : SITE_TEMPLATE_PATH.'/images/noimage.png');
                $imageDetailSrc = ($bImage ? $arItem['FIELDS']['DETAIL_PICTURE']['SRC'] : false);
                // show active date period
                $bActiveDate = strlen($arItem['DISPLAY_PROPERTIES']['PERIOD']['VALUE']) || ($arItem['DISPLAY_ACTIVE_FROM'] && in_array('DATE_ACTIVE_FROM', $arParams['FIELD_CODE']));
                ?>
                <div class="swiper-slide certificate-slider__slide">
                    <div class="certificate-slider__img-wrp">
                        <div class="image <?=($bImage ? ' w-picture' : ' wo-picture wpi')?>">
                            <?if($bDetailLink):?>
                            <a href="<?=$arItem['DETAIL_PAGE_URL']?>">
                                <?elseif($arItem['FIELDS']['DETAIL_PICTURE']):?>
                                <a href="<?=$imageDetailSrc?>" alt="<?=($bImage ? $arItem['PREVIEW_PICTURE']['ALT'] : $arItem['NAME'])?>" title="<?=($bImage ? $arItem['PREVIEW_PICTURE']['TITLE'] : $arItem['NAME'])?>" class="img-inside fancybox" <?=($arParams['IMG_GALLERY'] == 'Y' ? 'data-fancybox-group="gal"' : '');?>>
                                    <?endif;?>
                                    <div class="certificate-slider__img-wrp">
                                        <img src="<?=$imageSrc?>" alt="<?=($bImage ? $arItem['FIELDS']['PREVIEW_PICTURE']['ALT'] : $arItem['NAME'])?>" title="<?=($bImage ? $arItem['FIELDS']['PREVIEW_PICTURE']['TITLE'] : $arItem['NAME'])?>" class="certificate-slider__img" />
                                    </div>
                                    <?if($bDetailLink):?>
                                </a>
                                <?elseif($arItem['FIELDS']['DETAIL_PICTURE']):?>
                                <span class="zoom"></span>
                            </a>
                        <?endif;?>
                        </div>
                    </div>
                    <div class="certificate-slider__title">
                        <?=$arItem['NAME']?>
                    </div>
                    <div class="certificate-slider__type"><?=$arItem['DISPLAY_PROPERTIES']['TYPE_DOC']['VALUE']?></div>
                </div>
            <? endforeach; ?>
        <? endforeach; ?>
    </div>
    <div class="swiper-pagination certificate-slider__pagination"></div>


</div>

<script src="<?=SITE_TEMPLATE_PATH. "/js/swiper.min.js";?>"></script>
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH. "/css/swiper.min.css";?>">