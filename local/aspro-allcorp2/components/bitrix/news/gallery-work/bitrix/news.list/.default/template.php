<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<h1>ГАЛЕРЕЯ РАБОТ</h1>
<style>
/*************** SCROLLBAR BASE CSS ***************/
 
.scroll-wrapper {
    overflow: hidden !important;
    padding: 0 !important;
    position: relative;
}
 
.scroll-wrapper > .scroll-content {
    border: none !important;
    box-sizing: content-box !important;
    height: auto;
    left: 0;
    margin: 0;
    max-height: none !important;
    max-width: none !important;
    overflow: scroll !important;
    padding: 0;
    position: relative !important;
    top: 0;
    width: auto !important;
}
 
.scroll-wrapper > .scroll-content::-webkit-scrollbar {
    height: 0;
    width: 0;
}
 
.scroll-element {
    display: none;
}
.scroll-element, .scroll-element div {
    box-sizing: content-box;
}
 
.scroll-element.scroll-x.scroll-scrollx_visible,
.scroll-element.scroll-y.scroll-scrolly_visible {
    display: block;
}
 
.scroll-element .scroll-bar,
.scroll-element .scroll-arrow {
    cursor: default;
}
 
.scroll-textarea {
    border: 1px solid #cccccc;
    border-top-color: #999999;
}
.scroll-textarea > .scroll-content {
    overflow: hidden !important;
}
.scroll-textarea > .scroll-content > textarea {
    border: none !important;
    box-sizing: border-box;
    height: 100% !important;
    margin: 0;
    max-height: none !important;
    max-width: none !important;
    overflow: scroll !important;
    outline: none;
    padding: 2px;
    position: relative !important;
    top: 0;
    width: 100% !important;
}
.scroll-textarea > .scroll-content > textarea::-webkit-scrollbar {
    height: 0;
    width: 0;
}
 
 
 
 
.scrollbar-external_wrapper {
    height: 300px !important;
    position: relative;
    width: auto !important;
}
.scrollbar-external {
    height: 300px;
    overflow: auto;
    width: 685px;
}
 
/******************* EXTERNAL SCROLLBAR *******************/
 .scroll-element_track { border: 1px solid #cacaca;}
.external-scroll_x,
.external-scroll_y {
   // border: solid 1px #9999fc;
    cursor: pointer;
    display: none;
    position: absolute;
}
 
.external-scroll_x.scroll-scrollx_visible {
  display: block;
  height: 10px;
  left: 0;
  top: 276px;
  width: 100%;
}
 
.external-scroll_y.scroll-scrolly_visible {
    display: block;
    height: 200px;
    left: 610px;
    top: 0;
    width: 10px;
}
 
.external-scroll_x div,
.external-scroll_y div
{
  position: absolute;
  bottom: 0px;
  left: 0px;
  right: 0px;
  height: 16px;
  background-color: #f3f3f3;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
}
 
.external-scroll_x .scroll-bar,
.external-scroll_y .scroll-bar {
  position: absolute;
  left: 30px;
  top: 0px;
  bottom: 0px;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  background-image: url(/bitrix/templates/afk/images/indicator.jpg);
  background-repeat: repeat-x;
  background-position: 50% 50%;
  width: 42px;
  cursor: pointer;
}
 
.external-scroll_x .scroll-bar {
    width: 100px;
}
.external-scroll_y .scroll-bar {
    height: 100px;
}
</style>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.scrollbar.js"></script>
<div class="scrollbar-external_wrapper">
    <div class="scrollbar-external">
		<div class="contentswork">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<a href='<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>' data-lightbox="roadtrip" rel='iLoad|Gallery work'>
			<div class="gallery-album" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);">
				<div class="gallery-album-year"><?echo $arItem["NAME"]?></div>
				<div class="gallery-album-text"><?echo $arItem["PREVIEW_TEXT"];?></div>
			</div></a>
		<?endforeach;?>	
		</div>
	</div>
 
    <div class="external-scroll_x">
        <div class="scroll-element_outer">
            <div class="scroll-element_size"></div>
            <div class="scroll-element_track"></div>
            <div class="scroll-bar"></div>
        </div>
    </div>
 
    <div class="external-scroll_y">
        <div class="scroll-element_outer">
            <div class="scroll-element_size"></div>
            <div class="scroll-element_track"></div>
            <div class="scroll-bar"></div>
        </div>
    </div>
</div>
<?/*
<div class="gallery-area">
	<div class="gallery-outer">
		<div class="gallery-inner">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<div class="gallery-album" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);">
				<div class="gallery-album-year"><?echo $arItem["NAME"]?></div>
				<div class="gallery-album-text"><?echo $arItem["PREVIEW_TEXT"];?></div>
			</div>
		<?endforeach;?>	
		</div>
	</div>
	<div class="gallery-bar">
		<div class="gallery-indicator"></div>
	</div>				
</div>*/?>
<script type="text/javascript">
$(document).ready(function(){
	var widths = 0
    $('.scrollbar-external').scrollbar({
        "autoScrollSize": true,
        "scrollx": $('.external-scroll_x')
    });
	$(".scrollbar-external .gallery-album").each(function(indx, element){
	   widths = widths + $(this).width()+50;
	});
	widths = widths +
	$('.contentswork').css('width', widths+'px');



});
</script>

