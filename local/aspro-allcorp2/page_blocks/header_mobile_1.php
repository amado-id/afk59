<div class="mobileheader-v1">
	<div class="burger pull-left">
		<?=CAllcorp2::showIconSvg("burger dark", SITE_TEMPLATE_PATH."/images/svg/Burger_big_white.svg");?>
		<?=CAllcorp2::showIconSvg("close dark", SITE_TEMPLATE_PATH."/images/svg/Close.svg");?>
	</div>
	<div class="logo-block pull-left">
		<div class="logo<?=($arTheme["COLORED_LOGO"]["VALUE"] !== "Y" ? '' : ' colored')?>">
			<?=CAllcorp2::ShowLogo();?>
		</div>
	</div>
	<div class="right-icons pull-right">
		<div class="pull-right">
		        <a class="callback-block btn-default btn-price btn" title="<?=GetMessage("S_PRICE2")?>" target="_blank" href="/upload/prices/price.pdf"><?=GetMessage("S_PRICE")?></a>
			<span class="callibri_phone_icon">
				<a href="tel:+73422540102">
					<i class="svg inline  svg-inline-phone colored" aria-hidden="true">
						<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
					  <defs>
					    <style>
					    @media (max-width: 991px) {
					    body.index .svg.colored svg path{
					    	fill: #3d3aa1 !important;
					    }
					    }
					   
					      .pcls-1 {
					        fill: #3d3aa1 !important;
					        fill-rule: evenodd;
					      }
					    </style>
					  </defs>
					  <path class="pcls-1" d="M14,11.052a0.5,0.5,0,0,0-.03-0.209,1.758,1.758,0,0,0-.756-0.527C12.65,10,12.073,9.69,11.515,9.363a2.047,2.047,0,0,0-.886-0.457c-0.607,0-1.493,1.8-2.031,1.8a2.138,2.138,0,0,1-.856-0.388A9.894,9.894,0,0,1,3.672,6.253,2.134,2.134,0,0,1,3.283,5.4c0-.536,1.8-1.421,1.8-2.027a2.045,2.045,0,0,0-.458-0.885C4.3,1.932,3.99,1.355,3.672.789A1.755,1.755,0,0,0,3.144.034,0.5,0.5,0,0,0,2.935,0,4.427,4.427,0,0,0,1.551.312,2.62,2.62,0,0,0,.5,1.524,3.789,3.789,0,0,0-.011,3.372a7.644,7.644,0,0,0,.687,2.6A9.291,9.291,0,0,0,1.5,7.714a16.783,16.783,0,0,0,4.778,4.769,9.283,9.283,0,0,0,1.742.825,7.673,7.673,0,0,0,2.608.686,3.805,3.805,0,0,0,1.851-.507,2.62,2.62,0,0,0,1.214-1.052A4.418,4.418,0,0,0,14,11.052Z"></path>
						</svg>
					</i>
				</a>
			</span>
			<div class="wrap_icon" style="    display: inline-block;">
				<button class="inline-search-show twosmallfont" title="<?=GetMessage("SEARCH_TITLE")?>">
					<?=CAllcorp2::showIconSvg("search", SITE_TEMPLATE_PATH."/images/svg/Search_big_black.svg");?>
				</button>
			</div>
		</div>
		<div class="pull-right">
			<div class="wrap_icon wrap_basket">
				<?=CAllcorp2::showBasketLink('', 'big', '', '', true);?>
			</div>
		</div>
		<?if($arTheme["CABINET"]["VALUE"]=='Y'):?>
			<div class="pull-right">
				<div class="wrap_icon wrap_cabinet">
					<?=CAllcorp2::showCabinetLink(true, false, 'big');?>
				</div>
			</div>
		<?endif;?>
	</div>
</div>