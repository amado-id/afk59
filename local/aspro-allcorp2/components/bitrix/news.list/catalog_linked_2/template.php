<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
global $arTheme;
$bShowImage = in_array('PREVIEW_PICTURE', $arParams['FIELD_CODE']);
$bOrderViewBasket = $arParams['ORDER_VIEW'];
$basketURL = (strlen(trim($arTheme['ORDER_VIEW']['DEPENDENT_PARAMS']['URL_BASKET_SECTION']['VALUE'])) ? trim($arTheme['ORDER_VIEW']['DEPENDENT_PARAMS']['URL_BASKET_SECTION']['VALUE']) : '');
?>
<?if($arResult['ITEMS']):?>
	<?
	$qntyItems = count($arResult['ITEMS']);
	$countmd = ($arParams['NARROW'] == 'N' ? 4: 3);
	$countsm = 2;
	$countxs = 1;
	$colmd = 4;
	$colsm = 3;
	$colxs = 6;
	$bShowImage = in_array('PREVIEW_PICTURE', $arParams['FIELD_CODE']);
	?>
	<?if($arParams['VIEW_TITLE_BLOCK'] == 'Y'):?>
		<div class="wraps goods-block">
			<hr />
			<div class="pull-right">
				<div class="nav-direction">
					<ul class="flex-direction-nav">
						<li class="flex-nav-prev">
							<a href="javascript:void(0)" class="flex-prev"><span>Prev</span></a>
						</li>
						<li class="flex-nav-next">
							<a href="javascript:void(0)" class="flex-next"><span>Next</span></a>
						</li>
					</ul>
				</div>
			</div>
			<h5><?=$arParams['VIEW_TITLE'];?></h5>
	<?endif;?>
	<div class="catalog item-views table catalog_table_2 linked"  itemscope itemtype="http://schema.org/ItemList">
		<meta itemprop="numberOfItems" content="<?=count($arResult["ITEMS"]);?>" />
		<div class="flexslider unstyled front row shadow flex_loader_circle dark-nav2" data-plugin-options='{"animation": "slide", "directionNav": true, "controlNav" :true, "animationLoop": true, "itemMargin": 32, "customDirection": ".goods-block .nav-direction a", "slideshow": false, "counts": [<?=$countmd?>, <?=$countsm?>, <?=$countxs?>]}'>
			<ul class="slides">
				<?foreach($arResult["ITEMS"] as $i => $arItem):?>
					<?
					// edit/add/delete buttons for edit mode
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					// use detail link?
					$bDetailLink = $arParams['SHOW_DETAIL_LINK'] != 'N' && (!strlen($arItem['DETAIL_TEXT']) ? ($arParams['HIDE_LINK_WHEN_NO_DETAIL'] !== 'Y' && $arParams['HIDE_LINK_WHEN_NO_DETAIL'] != 1) : true);
					// preview image
					if($bShowImage){
						$bImage = strlen($arItem['FIELDS']['PREVIEW_PICTURE']['SRC']);
						$arImage = ($bImage ? CFile::ResizeImageGet($arItem['FIELDS']['PREVIEW_PICTURE']['ID'], array('width' => 444, 'height' => 244), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, true) : array());
						$imageSrc = ($bImage ? $arImage['src'] : SITE_TEMPLATE_PATH.'/images/noimage_product.png');
						$imageDetailSrc = ($bImage ? $arItem['FIELDS']['DETAIL_PICTURE']['SRC'] : false);
					}
					// use order button?
					$bOrderButton = $arItem["DISPLAY_PROPERTIES"]["FORM_ORDER"]["VALUE_XML_ID"] == "YES";
					$dataItem = ($bOrderViewBasket ? CAllcorp2::getDataItem($arItem) : false);
					?>
					<li class="col-md-<?=$colmd?> col-sm-<?=$colsm?> col-xs-<?=$colxs?>">
						<div class="item<?=($bShowImage ? '' : ' wti')?>" data-slice-block="Y" data-slice-params='{"row": ".slides", "classNull" : ".footer-button"}' id="<?=$this->GetEditAreaId($arItem['ID'])?>"<?=($bOrderViewBasket ? ' data-item="'.$dataItem.'"' : '')?> itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
							<meta itemprop="position" content="<?=$i;?>" />
							<div class="inner-wrap">
								<?if($arItem['DISPLAY_PROPERTIES']['HIT']['VALUE']):?>
									<div class="stickers">
										<div class="stickers-wrapper">
											<?foreach($arItem['DISPLAY_PROPERTIES']['HIT']['VALUE_XML_ID'] as $key => $class):?>
												<div class="sticker_<?=strtolower($class);?>"><?=$arItem['DISPLAY_PROPERTIES']['HIT']['VALUE'][$key]?></div>
											<?endforeach;?>
										</div>
									</div>
								<?endif;?>
								<?if($bShowImage):?>
									<div class="image shine">
										<?if($bDetailLink):?><a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="blink-block">
										<?elseif($imageDetailSrc):?><a href="<?=$imageDetailSrc?>" alt="<?=($bImage ? $arItem['PREVIEW_PICTURE']['ALT'] : $arItem['NAME'])?>" title="<?=($bImage ? $arItem['PREVIEW_PICTURE']['TITLE'] : $arItem['NAME'])?>" class="img-inside fancybox">
										<?endif;?>
											<img class="img-responsive" src="<?=$imageSrc?>" alt="<?=($bImage ? $arItem['PREVIEW_PICTURE']['ALT'] : $arItem['NAME'])?>" title="<?=($bImage ? $arItem['PREVIEW_PICTURE']['TITLE'] : $arItem['NAME'])?>" itemprop="image" />
										<?if($bDetailLink):?></a>
										<?elseif($imageDetailSrc):?><span class="zoom"><i class="fa fa-16 fa-white-shadowed fa-search"></i></span></a>
										<?endif;?>
									</div>
								<?endif;?>

								<div class="text">
									<div class="cont">
										<div class="cont_inner">
											<?// element name?>
											<?if(strlen($arItem['FIELDS']['NAME'])):?>
												<div class="title">
													<?if($bDetailLink):?><a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="dark-color" itemprop="url"><?endif;?>
														<?=$arItem['NAME']?>
													<?if($bDetailLink):?></a><?endif;?>
												</div>
											<?endif;?>

											<?// element section name?>
											<?if($arItem['IBLOCK_SECTION_ID'] && $arParams['SHOW_SECTION'] == 'Y'):?>
												<div class="section_name"><?=implode(', ', $arItem['SECTIONS']);?></div>
											<?endif;?>

											<div class="arts">
												<?// element status?>
												<?if(strlen($arItem['DISPLAY_PROPERTIES']['STATUS']['VALUE'])):?>
													<span class="status-icon <?=$arItem['DISPLAY_PROPERTIES']['STATUS']['VALUE_XML_ID']?>"><?=$arItem['DISPLAY_PROPERTIES']['STATUS']['VALUE']?></span>
												<?endif;?>

												<?// element article?>
												<?if(strlen($arItem['DISPLAY_PROPERTIES']['ARTICLE']['VALUE'])):?>
													<span class="article"><?=GetMessage('S_ARTICLE')?>&nbsp;<span><?=$arItem['DISPLAY_PROPERTIES']['ARTICLE']['VALUE']?></span></span>
												<?endif;?>
											</div>
											<?if($arItem['HOVER_PROPS']):?>
												<div class="props_wrapper chars">
													<div class="props_inner scrollbar char-wrapp">
														<table class="props_table">
															<tbody>
																<?foreach($arItem['HOVER_PROPS'] as $code => $arProp):?>
																	<tr class="char">
																		<td class="char_name"><span><?=$arProp['NAME'];?></span></td>
																		<td class="char_value"><span><?=$arProp['VALUE'];?></span></td>
																	</tr>
																<?endforeach;?>
															</tbody>
														</table>
													</div>
												</div>
											<?endif;?>
										</div>
									</div>

									<div class="row foot">
										<div class="col-md-12 col-sm-12 col-xs-12 clearfix slice_price">
											<?=\Aspro\Functions\CAsproAllcorp2::showPrice($arItem, $arParams, $bOrderViewBasket, false, false);?>
										</div>
										
										<div class="col-md-12 col-sm-12 col-xs-12">
											<?=\Aspro\Functions\CAsproAllcorp2::showBasketButton($arItem, $arParams, $bOrderButton, $bOrderViewBasket, $basketURL);?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				<?endforeach;?>
			</ul>
		</div>
	</div>
	<?if($arParams['VIEW_TITLE_BLOCK'] == 'Y'):?>
		</div>
	<?endif;?>
<?endif;?>