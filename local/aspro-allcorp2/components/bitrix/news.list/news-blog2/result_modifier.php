<?if(!defined("B_PROLOG_INCLUDED") && B_PROLOG_INCLUDED !== true) die()?>
<?if($arResult['ITEMS'])
{
	$qntyItems = count($arResult['ITEMS']);

	$group = 0;	
	$arAllItems = $arItemsTmp = $arTmp2 = array();
	$arGoodsSections = $arGoodsSectionsIDs = array();
	$isWideBlock = false;
	
	foreach($arResult['ITEMS'] as $key => $arItem) // slice array by 3 elements
	{
		$arItem['DETAIL_PAGE_URL'] = CAllcorp2::FormatNewsUrl($arItem);
		if($arItem['PROPERTIES']['BIG_BLOCK']['VALUE'] == 'Y')
			$isWideBlock = true;

		if($key%3 == 0 && $key)
			++$group;
		
		if($arItem['IBLOCK_SECTION_ID'] && $arParams['SHOW_SECTION'] == 'Y')
		{
			$resGroups = CIBlockElement::GetElementGroups($arItem['ID'], true, array('ID'));
			while($arGroup = $resGroups->Fetch())
			{
				$arItem['SECTIONS'][$arGroup['ID']] = $arGroup['ID'];
				$arGoodsSectionsIDs[$arGroup['ID']] = $arGroup['ID'];
			}
		}

		$arItemsTmp[$group]['BIG_BLOCK'] = 'N';
		$arItemsTmp[$group]['ITEMS'][] = $arItem;

	}
	if(!$isWideBlock)
	{
		$arItemsTmp[0]['BIG_BLOCK'] = 'Y';
		$arItemsTmp[0]['ITEMS'][0]['PROPERTIES']['BIG_BLOCK']['VALUE'] = 'Y';
		
	}	

	foreach($arItemsTmp as $key => $arItems) // check wide block
	{
		foreach($arItems['ITEMS'] as $keyTmp => $arItem)
		{
			if($arItem['PROPERTIES']['BIG_BLOCK']['VALUE'] == 'Y')
				$arItemsTmp[$key]['BIG_BLOCK'] = 'Y';
		}
	}

	foreach($arItemsTmp as $key => $arItems)
	{
		$arWideBlock = array();
		if($arItems['BIG_BLOCK'] == 'Y')
		{
			foreach($arItems['ITEMS'] as $keyTmp => $arItem) // unset wide item
			{
				if($arItem['PROPERTIES']['BIG_BLOCK']['VALUE'] == 'Y' && !$arWideBlock)
				{
					$arItem['CLASS'] = 'col-md-8 col-sm-8';
					$arItem['CLASS_WIDE'] = 'Y';
					$arWideBlock = $arItem;
					unset($arItemsTmp[$key]['ITEMS'][$keyTmp]);
				}
				else
				{
					$arItemsTmp[$key]['ITEMS'][$keyTmp]['CLASS'] = 'col-item';
				}
			}
			if($arItemsTmp[$key]['ITEMS']) // format div in short block
			{
				sort($arItemsTmp[$key]['ITEMS']);
				$cnt_items = count($arItemsTmp[$key]['ITEMS']);
				foreach($arItemsTmp[$key]['ITEMS'] as $keyTmp2 => $arTmpItem2)
				{
					if(!$keyTmp2)
						$arItemsTmp[$key]['ITEMS'][$keyTmp2]['START_DIV'] = 'Y';
					if($cnt_items == ++$keyTmp2)
						$arItemsTmp[$key]['ITEMS'][--$keyTmp2]['END_DIV'] = 'Y';
				}
			}
			if($arWideBlock['PROPERTIES']['POSITION_BLOCK']['VALUE_XML_ID'] == 'right')
				array_push($arItemsTmp[$key]['ITEMS'], $arWideBlock);
			else
				array_unshift($arItemsTmp[$key]['ITEMS'], $arWideBlock);
		}
	}
	$arResult['ITEMS'] = $arItemsTmp;
	if($arGoodsSectionsIDs)
	{
		$arGoodsSections = CCache::CIBLockSection_GetList(array('CACHE' => array('TAG' => CCache::GetIBlockCacheTag($arParams['IBLOCK_ID']), 'GROUP' => array('ID'), 'MULTI' => 'N', 'RESULT' => array('NAME'))), array('ID' => $arGoodsSectionsIDs), false, array('ID', 'NAME'));
		foreach($arResult['ITEMS'] as $key => $arItems)
		{
			foreach($arItems['ITEMS'] as $key2 => $arItem)
			{
				if($arItem['IBLOCK_SECTION_ID'])
				{
					foreach($arItem['SECTIONS'] as $id => $name)
						$arResult['ITEMS'][$key]['ITEMS'][$key2]['SECTIONS'][$id] = $arGoodsSections[$id];
				}
			}
		}
	}
}?>