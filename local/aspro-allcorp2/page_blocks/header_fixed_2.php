<div class="maxwidth-theme">
	<div class="logo-row v2 row margin0">
		<div class="inner-table-block nopadding logo-block">
			<div class="logo<?=($arTheme["COLORED_LOGO"]["VALUE"] !== "Y" ? '' : ' colored')?>">
				<?=CAllcorp2::ShowLogo();?>
			</div>
		</div>
		<div class="inner-table-block menu-block menu-row">
			<div class="navs table-menu js-nav">
				<nav class="mega-menu sliced">
					<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
						array(
							"COMPONENT_TEMPLATE" => ".default",
							"PATH" => SITE_DIR."include/header/menu.php",
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "",
							"AREA_FILE_RECURSIVE" => "Y",
							"EDIT_TEMPLATE" => "include_area.php"
						),
						false, array("HIDE_ICONS" => "Y")
					);?>
				</nav>
			</div>
		</div>
		<?if($arTheme["CABINET"]["VALUE"]=='Y'):?>
			<div class="inner-table-block nopadding small-block cabinet">
				<div class="wrap_icon wrap_cabinet">
					<?=CAllcorp2::showCabinetLink(true, false, 'big');?>
				</div>
			</div>
		<?endif;?>
		<div class="inner-table-block small-block nopadding" data-type_search="fixed">
			<a class="callback-block btn-default btn-price btn" title="<?=GetMessage("S_PRICE2")?>" target="_blank" href="/upload/prices/price.pdf"><?=GetMessage("S_PRICE")?></a>
		</div>
		<?=CAllcorp2::showBasketLink('wrap_icon inner-table-block nopadding', 'big','');?>
	</div>
</div>