<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<?$this->setFrameMode(true);?>
<?if($arResult['ITEMS']):?>
	<?$isWideImg = (isset($arParams['IMAGE_WIDE']) && $arParams['IMAGE_WIDE'] == 'Y');?>
	<div class="item-views list list-type-block wide_img <?=($arParams['IMAGE_POSITION'] ? 'image_'.$arParams['IMAGE_POSITION'] : '')?> <?=($templateName = $component->{'__parent'}->{'__template'}->{'__name'})?>">

		<?// top pagination?>
		<?if($arParams['DISPLAY_TOP_PAGER']):?>
			<?=$arResult['NAV_STRING']?>
		<?endif;?>

		<?
		$bHasSection = false;
		if($arParams['PARENT_SECTION'] && (isset($arResult['SECTIONS']) && $arResult['SECTIONS']))
		{
			if(isset($arResult['SECTIONS'][$arParams['PARENT_SECTION']]) && $arResult['SECTIONS'][$arParams['PARENT_SECTION']])
				$bHasSection = true;
		}
		if($bHasSection)
		{
			// edit/add/delete buttons for edit mode
			$arSectionButtons = CIBlock::GetPanelButtons($arResult['SECTIONS'][$arParams['PARENT_SECTION']]['IBLOCK_ID'], 0, $arResult['SECTIONS'][$arParams['PARENT_SECTION']]['ID'], array('SESSID' => false, 'CATALOG' => true));
			$this->AddEditAction($arResult['SECTIONS'][$arParams['PARENT_SECTION']]['ID'], $arSectionButtons['edit']['edit_section']['ACTION_URL'], CIBlock::GetArrayByID($arResult['SECTIONS'][$arParams['PARENT_SECTION']]['IBLOCK_ID'], 'SECTION_EDIT'));
			$this->AddDeleteAction($arResult['SECTIONS'][$arParams['PARENT_SECTION']]['ID'], $arSectionButtons['edit']['delete_section']['ACTION_URL'], CIBlock::GetArrayByID($arResult['SECTIONS'][$arParams['PARENT_SECTION']]['IBLOCK_ID'], 'SECTION_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div class="section" id="<?=$this->GetEditAreaId($arResult['SECTIONS'][$arParams['PARENT_SECTION']]['ID'])?>">
			<?
		}?>
		<div class="items row">
			<?// show section items?>
			<?
				$count=count($arResult['ITEMS']);
				$current=0;
			?>
			<?foreach($arResult['ITEMS'] as $i => $arItem):?>
				<?
				$current++;
				// edit/add/delete buttons for edit mode
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				// use detail link?
				$bDetailLink = $arParams['SHOW_DETAIL_LINK'] != 'N' && (!strlen($arItem['DETAIL_TEXT']) ? ($arParams['HIDE_LINK_WHEN_NO_DETAIL'] !== 'Y' && $arParams['HIDE_LINK_WHEN_NO_DETAIL'] != 1) : true);
				$bImage = strlen($arItem['FIELDS']['PREVIEW_PICTURE']['SRC']);
				$imageSrc = ($bImage ? $arItem['FIELDS']['PREVIEW_PICTURE']['SRC'] : false);
				$imageDetailSrc = ($bImage ? $arItem['FIELDS']['DETAIL_PICTURE']['SRC'] : false);
				// show active date period
				$bActiveDate = strlen($arItem['DISPLAY_PROPERTIES']['PERIOD']['VALUE']) || ($arItem['DISPLAY_ACTIVE_FROM'] && in_array('DATE_ACTIVE_FROM', $arParams['FIELD_CODE']));
				?>
				<div class="col-md-12">
					<div class="item <?=($bImage ? '' : ' wti')?><?=($bActiveDate ? ' wdate' : '')?> clearfix" id="<?=$this->GetEditAreaId($arItem['ID'])?>">
						<?if($bImage):?>
							<div class="image shine">
								<?if($bDetailLink):?>
									<a href="<?=$arItem['DETAIL_PAGE_URL']?>">
								<?endif;?>
									<img src="<?=$imageSrc?>" alt="<?=($bImage ? $arItem['PREVIEW_PICTURE']['ALT'] : $arItem['NAME'])?>" title="<?=($bImage ? $arItem['PREVIEW_PICTURE']['TITLE'] : $arItem['NAME'])?>" class="img-responsive" />
								<?if($bDetailLink):?>
									</a>
								<?endif;?>
							</div>
						<?endif;?>
						<div class="body-info">
							<?// section title?>
							<?if(isset($arItem['SECTIONS']) && $arItem['SECTIONS']):?>
								<div class="sticker-block">
									<?=implode(', ', $arItem['SECTIONS']);?>
								</div>
							<?endif;?>

							<?// element name?>
							<?if(strlen($arItem['FIELDS']['NAME'])):?>
								<div class="title">
									<?if($bDetailLink):?><a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="dark-color"><?endif;?>
										<?=$arItem['NAME']?>
									<?if($bDetailLink):?></a><?endif;?>
								</div>
							<?endif;?>


							<?// element preview text?>
							<?if(strlen($arItem['FIELDS']['PREVIEW_TEXT'])):?>
								<div class="previewtext">
									<?if($arItem['PREVIEW_TEXT_TYPE'] == 'text'):?>
										<p><?=$arItem['FIELDS']['PREVIEW_TEXT']?></p>
									<?else:?>
										<?=$arItem['FIELDS']['PREVIEW_TEXT']?>
									<?endif;?>
								</div>
							<?endif;?>

							<?// element display properties?>
							<?if($arItem['PROPS_FORMAT']):?>
								<div class="properties">
									<?foreach($arItem['PROPS_FORMAT'] as $PCODE => $arProperty):?>
										<?$bIconBlock = ($PCODE == 'EMAIL' || $PCODE == 'PHONE' || $PCODE == 'SITE');?>
										<div class="inner-wrapper">
											<div class="property <?=($bIconBlock ? "icon-block" : "");?> <?=strtolower($PCODE);?>">
												<?if(!$bIconBlock):?>
													<?=$arProperty['NAME']?>:&nbsp;
												<?endif;?>
												<?if(is_array($arProperty['DISPLAY_VALUE'])):?>
													<?$val = implode('&nbsp;/&nbsp;', $arProperty['DISPLAY_VALUE']);?>
												<?else:?>
													<?$val = $arProperty['DISPLAY_VALUE'];?>
												<?endif;?>
												<?if($PCODE == 'SITE'):?>
													<!--noindex-->
													<a href="<?=(strpos($arProperty['VALUE'], 'http') === false ? 'http://' : '').$arProperty['VALUE'];?>" rel="nofollow" target="_blank">
														<?=$arProperty['VALUE'];?>
													</a>
													<!--/noindex-->
												<?elseif($PCODE == 'EMAIL'):?>
													<a href="mailto:<?=$val?>"><?=$val?></a>
												<?else:?>
													<?=$val?>
												<?endif;?>
											</div>
										</div>
									<?endforeach;?>
								</div>
							<?endif;?>
							<?// date active period?>
							<?if($bActiveDate):?>
								<div class="period">
									<?if(strlen($arItem['DISPLAY_PROPERTIES']['PERIOD']['VALUE'])):?>
										<span class="date"><?=$arItem['DISPLAY_PROPERTIES']['PERIOD']['VALUE']?></span>
									<?else:?>
										<span class="date"><?=$arItem['DISPLAY_ACTIVE_FROM']?></span>
									<?endif;?>
								</div>
							<?endif;?>
							<?=\Aspro\Functions\CAsproAllcorp2::showPrice($arItem, $arParams);?>
							<?if($arItem['DISPLAY_PROPERTIES']['FORM_ORDER']['VALUE_XML_ID'] == 'YES' && $arParams['SHOW_ORDER_BTN'] == 'Y'):?>
								<span><span class="btn btn-default btn-sm animate-load" data-event="jqm" data-param-id="<?=CAllcorp2::getFormID("aspro_allcorp2_order_services");?>" data-autoload-need_product="<?=CAllcorp2::formatJsName($arItem['NAME'])?>" data-autoload-service="<?=CAllcorp2::formatJsName($arItem['NAME'])?>" data-autoload-project="<?=CAllcorp2::formatJsName($arItem['NAME'])?>" data-name="question"><span><?=(strlen($arParams['S_ORDER_SERVISE']) ? $arParams['S_ORDER_SERVISE'] : GetMessage('S_ORDER_SERVISE'))?></span></span></span>
							<?endif;?>
							<?if($bDetailLink && $arParams['SHOW_MORE_LINK'] !='N'):?>
								<span class="link-block-more">
									<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="btn btn-default btn-sm <?=($arItem['DISPLAY_PROPERTIES']['FORM_ORDER']['VALUE_XML_ID'] == 'YES' && $arParams['SHOW_ORDER_BTN'] == 'Y' ? 'btn-transparent-bg' : '');?>"><?=GetMessage('TO_ALL')?></a>
								</span>
							<?endif;?>

						</div>
					</div>
					<?if($current<$count):?>
						<hr />
					<?endif;?>
				</div>
			<?endforeach;?>
		</div>
		<?if($bHasSection):?>
			</div>
		<?endif;?>

		<?// bottom pagination?>
		<?if($arParams['DISPLAY_BOTTOM_PAGER']):?>
			<?=$arResult['NAV_STRING']?>
		<?endif;?>

	</div>
<?endif;?>
