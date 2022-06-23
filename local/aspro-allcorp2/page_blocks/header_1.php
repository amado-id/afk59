<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?
global $arTheme;
$bOrder = ($arTheme['ORDER_VIEW']['VALUE'] == 'Y' && $arTheme['ORDER_VIEW']['DEPENDENT_PARAMS']['ORDER_BASKET_VIEW']['VALUE']=='HEADER' ? true : false);
$bCabinet = ($arTheme["CABINET"]["VALUE"]=='Y' ? true : false);
$bPhone = (intval($arTheme['HEADER_PHONES']) > 0 ? true : false);
$logoClass = ($arTheme['COLORED_LOGO']['VALUE'] !== 'Y' ? '' : ' colored');
?>
<header class="<?=basename(__FILE__, ".php")?> long">
	<div class="logo_and_menu-row">
		<div class="logo-row">
			<div class="maxwidth-theme">
				<?//show logo?>
				<div class="logo-block paddings pull-left">
                    <? if (CSite::InDir('/optom/')):?>
                        <div class="logo<?=$logoClass?>">
                            <a href="/">
                                <img src="<?=SITE_TEMPLATE_PATH?>/images/logo_light.png" alt="" />
                            </a>
                        </div>
                    <? else: ?>
					<div class="logo<?=$logoClass?>">
						<?=CAllcorp2::ShowLogo();?>
					</div>
                    <div class="logo-dop">
                        <a href="/">
                            <img src="<?=SITE_TEMPLATE_PATH?>/images/logo_light.png" alt="" />
                        </a>
                    </div>
                    <? endif;?>
				</div>
				<?//check slogan text?>
				<?if(CAllcorp2::checkContentFile(SITE_DIR.'include/header/header-text.php')):?>
					<div class="col-md-2 visible-lg nopadding-right slogan">
						<div class="top-description">
							<div>
								<?$APPLICATION->IncludeFile(SITE_DIR."include/header/header-text.php", array(), array(
										"MODE" => "html",
										"NAME" => "Text in title",
										"TEMPLATE" => "include_area.php",
									)
								);?>
							</div>
						</div>
					</div>
				<?endif;?>
				<?//show phone and callback?>
				<div class="right-icons pull-right">
					<div class="phone-block with_btn">
						<?//check phone text?>
						<?if($bPhone):?>
							<div class="inner-table-block p-block">
                                <? if (CSite::InDir('/optom/')):?>
								    <?CAllcorp2::ShowHeaderPhones('big', 'Phone_white.svg');?>
                                <? else: ?>
                                    <?CAllcorp2::ShowHeaderPhones('big', 'Phone_black.svg');?>
                                <? endif; ?>
								<div class="schedule">
									<?$APPLICATION->IncludeFile(SITE_DIR."include/header-schedule.php", array(), array(
											"MODE" => "html",
											"NAME" => GetMessage('HEADER_SCHEDULE'),
											"TEMPLATE" => "include_area.php"
										)
									);?>
								</div>
							</div>
						<?endif?>
						<?if($arTheme["CALLBACK_BUTTON"]["VALUE"] == "Y"):?>
							<div class="inner-table-block">
                                <? if (CSite::InDir('/optom/')):?>
                                <div class="custom-callback-form">
                                    <span class="callback-block animate-load colored  btn-transparent-bg btn-default btn " data-event="jqm" data-param-id="<?=CAllcorp2::getFormID("aspro_allcorp2_callback");?>" data-name="callback"><?=GetMessage("S_CALLBACK")?></span>
                                    <a class="callback-block btn-default btn-price btn" target="_blank" title="<?=GetMessage("S_PRICE2")?>" href="/upload/prices/price.pdf"><?=GetMessage("S_PRICE")?></a>
                                </div>
                                <? else: ?>
                                    <span class="callback-block animate-load colored  btn-transparent-bg btn-default btn" data-event="jqm" data-param-id="<?=CAllcorp2::getFormID("aspro_allcorp2_callback");?>" data-name="callback"><?=GetMessage("S_CALLBACK")?></span>
                                    <a class="callback-block btn-default btn-price btn" target="_blank" title="<?=GetMessage("S_PRICE2")?>" href="/upload/prices/price.pdf"><?=GetMessage("S_PRICE")?></a>
                                <? endif; ?>

							</div>
						<?endif;?>
					</div>
				</div>
				<?//check address text?>
				<?if(CAllcorp2::checkContentFile(SITE_DIR.'include/header/site-address.php')):?>
					<div class="col-md-2 pull-right">
						<div class="inner-table-block address">
							<div>
                                <? if (CSite::InDir('/optom/')):?>
                                <? else: ?>
                                    <?=CAllcorp2::showIconSvg("address colored", SITE_TEMPLATE_PATH."/images/svg/Addres_black.svg");?>
                                <? endif; ?>
								<div>
									<?$APPLICATION->IncludeFile(SITE_DIR."include/header/site-address.php", array(), array(
											"MODE" => "html",
											"NAME" => "Address in title",
											"TEMPLATE" => "include_area.php",
										)
									);?>
								</div>
							</div>
						</div>
					</div>
				<?endif;?>
			</div>
		</div><?// class=logo-row?>
	</div>
	<?//show menu?>
	<div class="menu-row with-color bg<?=strtolower($arTheme['MENU_COLOR']['VALUE'])?> <?=(in_array($arTheme['MENU_COLOR']['VALUE'], array("COLORED", "DARK")) ? "colored_all" : "colored_dark");?> sliced">
		<div class="maxwidth-theme">
			<div class="col-md-12">
				<div class="right-icons pull-right">
					<?if($bOrder):?>
						<div class="pull-right">
							<div class="wrap_icon inner-table-block">
								<?=CAllcorp2::showBasketLink('', '','');?>
							</div>
						</div>
					<?endif;?>
					<div class="pull-right">
						<div class="wrap_icon inner-table-block">
							<button class="inline-search-show twosmallfont" title="<?=GetMessage("SEARCH_TITLE")?>">
								<?=CAllcorp2::showIconSvg("search", SITE_TEMPLATE_PATH."/images/svg/Search_black.svg");?>
							</button>
						</div>
					</div>
					<?if($bCabinet):?>
						<div class="pull-right">
							<div class="wrap_icon inner-table-block">
								<?=CAllcorp2::showCabinetLink(true, false);?>
							</div>
						</div>
					<?endif;?>
				</div>
				<div class="menu-only">
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
			<div class="lines"></div>
		</div>
	</div>
	<div class="line-row"></div>
</header>