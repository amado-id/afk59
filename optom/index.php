<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оптовикам");?>
    <div class="new-banner-wrapper">
	<div class="new-big-banner">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"front-banners-big-long-opt",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_GROUPSz" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "51",
		"IBLOCK_TYPE" => "aspro_allcorp2_adv",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("BANNERTYPE","LINKIMG","BUTTON1TEXT","BUTTON1CLASS","BUTTON2TEXT","BUTTON2LINK","TEXTCOLOR","PHOTO_780","PHOTO_320","MAIN_COLOR"),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
	</div>
    </div>
	<div class="drag-block container" data-class="<?=$optionCode?>_drag" data-order="<?=++$key;?>">
		<div class="row margin0 greyline">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"front-banners-float-opt",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "front-banners-float-opt",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_allcorp2_content"]["aspro_allcorp2_float_banners_opt"][0],
		"IBLOCK_TYPE" => "aspro_allcorp2_content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "FILE",
			2 => "LINK",
			3 => "TYPE",
			4 => "",
		),
		"RIGHT_LINK" => "product/",
		"RIGHT_TITLE" => "Смотреть каталог",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"TITLE" => "Стройматериалы оптом"
	),
	false
);?>
		</div>
	</div>
	<div class="drag-block container works-plan">
		<div class="maxwidth-theme">
			<div class="title_block">
				<h3 class="uppercase_name">СХЕМА РАБОТЫ СО СТРОИТЕЛЬНЫМИ КОМПАНИЯМИ</h3>
			</div>
			<div class="shema__list">
				<div class="shema__one">
 <img src="/bitrix/templates/aspro-allcorp2/images/opt/consultation.png" alt="">
					<p>
						 Консультация менеджера
					</p>
				</div>
				<div class="shema__one">
 <img src="/bitrix/templates/aspro-allcorp2/images/opt/free.png" alt="">
					<p>
						 Бесплатный замер при необходимости
					</p>
				</div>
				<div class="shema__one">
 <img src="/bitrix/templates/aspro-allcorp2/images/opt/materials.png" alt="">
					<p>
						 Подбор всех необходимых материалов для объекта
					</p>
				</div>
				<div class="shema__one">
 <img src="/bitrix/templates/aspro-allcorp2/images/opt/individ.png" alt="">
					<p>
						 Формирование индивидуального коммерческого предложения
					</p>
				</div>
				<div class="shema__one">
 <img src="/bitrix/templates/aspro-allcorp2/images/opt/oneday.png" alt="">
					<p>
						 Доставка от 1 дня
					</p>
				</div>
				<div class="shema__one">
 <img src="/bitrix/templates/aspro-allcorp2/images/opt/services.png" alt="">
					<p>
						 Услуги монтажа
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="purple-work-plan" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/images/test-bkg.jpg');  background-position:center center; background-repeat: no-repeat; background-size: cover; padding:100px 0 100px;" >
		<h3>ПОЧЕМУ ЗАКУПАТЬ МАТЕРИАЛЫ ДЛЯ СТРОЙКИ В «АФК» ВЫГОДНО?</h3>
		<div class="purple__list">
			<div class="purple__one">
				<div class="number">
					<p>
						 1
					</p>
				</div>
				<div class="description">
					<p class="description_name">
						 Комплектация объекта под ключ
					</p>
					<p class="description_purple">
						 Подберем и поставим все необходимое в нужном объеме, произведем монтаж
					</p>
				</div>
			</div>
			<div class="purple__one">
				<div class="number">
					<p>
						 2
					</p>
				</div>
				<div class="description">
					<p class="description_name">
						 Выгодная система скидок
					</p>
					<p class="description_purple">
                        Чем масштабнее объект, тем больше скидка — возможность экономить на стройматериалах до 30%
					</p>
				</div>
			</div>
			<div class="purple__one">
				<div class="number">
					<p>
						 3
					</p>
				</div>
				<div class="description">
					<p class="description_name">
						 Удобная логистика
					</p>
					<p class="description_purple">
						 Доставка по Перми и Пермскому краю от 1 дня
					</p>
				</div>
			</div>
			<div class="purple__one">
				<div class="number">
					<p>
						 4
					</p>
				</div>
				<div class="description">
					<p class="description_name">
						 Гарантия качества
					</p>
					<p class="description_purple">
						 Мы сотрудничаем с производителями напрямую и гарантируем качество поставляемого товара
					</p>
				</div>
			</div>
		</div>
		<div class="price_btn custom">
 <a href="#form">Получить индивидуальное предложение</a>
		</div>
	</div>
	 <?//COMPANY_INDEX?>
	<div class="drag-block container COMPANY_INDEX" data-class="COMPANY_INDEX_drag" data-order="11">
		<div class="row">
			<div class="maxwidth-theme company-front flexbox">
				<div class="col-md-8 col-sm-12 col-xs-12">
					 <?$APPLICATION->IncludeFile(SITE_DIR."include/mainpage/optom_text.php", Array(), Array(
                                "MODE"      => "html",
                                "NAME"      => GetMessage("COMPANY_TEXT"),
                            ));
                            ?>
				</div>
				<div class="col-md-4 hidden-xs hidden-sm">
					 <?$APPLICATION->IncludeFile(SITE_DIR."include/mainpage/company_img.php", Array(), Array(
                                "MODE"      => "html",
                                "NAME"      => GetMessage("COMPANY_IMG"),
                            ));
                            ?>
				</div>
			</div>
		</div>
	</div>
	 <?//BLOG_INDEX?>

    <div class="drag-block container works-plan">
        <div class="row margin0 greyline">
        <div class="maxwidth-theme">
            <div class="title_block">
                <h3 class="uppercase_name">Почему стоит обратиться к нам, а не напрямую к производителю?</h3>
                <p class="description_why">
                    Чаще всего заводы предлагают товары только собственного производства, поэтому их ассортимент ограничен. У нас можно приобрести все необходимые материалы от разных производителей — подберем и доставим под ваш проект.
                </p>
            </div>
			<div class="shema__list">
				<div class="shema__one">
                     <img src="/bitrix/templates/aspro-allcorp2/images/opt/brends.png" alt="">
					<p>
						 Вы можете выбрать товары нескольких брендов
					</p>
				</div>
				<div class="shema__one">
 <img src="/bitrix/templates/aspro-allcorp2/images/opt/time.png" alt="">
					<p>
						 Доставим точно в срок
					</p>
				</div>
				<div class="shema__one">
 <img src="/bitrix/templates/aspro-allcorp2/images/opt/products.png" alt="">
					<p>
						 Проконтролируем качество продукции
					</p>
				</div>
				<div class="shema__one">
 <img src="/bitrix/templates/aspro-allcorp2/images/opt/montage.png" alt="">
					<p>
						 Произведем качественный монтаж при необходимости
					</p>
				</div>
			</div>
        </div>
        </div>
    </div>
<div class="callback" id="form" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/images/background_form.jpg');no-repeat center;background-size:cover;padding:180px 0 180px">
    <div class="container_custom">
    <h2 class="callback__title">6 простых шагов для поставки качественных стройматериалов на вашу стройку:</h2>
    <div class="callback__inner">
    <div class="callback-timeline">
        <div class="callback-timeline__item">
            <div class="callback-timeline__num">1</div>
            <div class="callback-timeline__info">
                <div class="callback-timeline__title">Оставьте запрос</div>
                <div class="callback-timeline__text">на сайте или по телефону</div>
            </div>
        </div>
        <div class="callback-timeline__item">
            <div class="callback-timeline__num">2</div>
            <div class="callback-timeline__info">
                <div class="callback-timeline__title">Дождитесь ответа менеджера</div>
                <div class="callback-timeline__text">и согласуйте список необходимых материалов</div>
            </div>
        </div>
        <div class="callback-timeline__item">
            <div class="callback-timeline__num">3</div>
            <div class="callback-timeline__info">
                <div class="callback-timeline__title">Воспользуйтесь услугой замера</div>
                <div class="callback-timeline__text">и расчета бесплатно в случае заказа у нас</div>
            </div>
        </div>
        <div class="callback-timeline__item">
            <div class="callback-timeline__num">4</div>
            <div class="callback-timeline__info">
                <div class="callback-timeline__title">Получите расчет заказа</div>
                <div class="callback-timeline__text">с учетом индивидуальной скидки</div>
            </div>
        </div>
        <div class="callback-timeline__item">
            <div class="callback-timeline__num">5</div>
            <div class="callback-timeline__info">
                <div class="callback-timeline__title">Оплатите заказ</div>
                <div class="callback-timeline__text">и сообщите об этом менеджеру</div>
            </div>
        </div>
        <div class="callback-timeline__item">
            <div class="callback-timeline__num">6</div>
            <div class="callback-timeline__info">
                <div class="callback-timeline__title">Получите ваш заказ</div>
                <div class="callback-timeline__text">в согласованное с менеджером время</div>
            </div>
        </div>
    </div>
 <?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new",
	"six_easy_step",
	array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"EDIT_URL" => "",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"LIST_URL" => "",
		"SEF_MODE" => "N",
		"SUCCESS_URL" => "",
		"USE_EXTENDED_ERRORS" => "Y",
		"WEB_FORM_ID" => "13",
		"COMPONENT_TEMPLATE" => "six_easy_step",
		"VARIABLE_ALIASES" => array(
			"WEB_FORM_ID" => "WEB_FORM_ID",
			"RESULT_ID" => "RESULT_ID",
		)
	),
	false
);?>
    </div>
    </div>
</div>
<div class="drag-block container works-plan " data-class="<?=$optionCode?>_drag" data-order="<?=++$key;?>">
	<div class="maxwidth-theme">
		 <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "front-news-opt",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "Y",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "COMPONENT_TEMPLATE" => "front-news-opt",
                "COUNT_IN_LINE" => "6",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(0=>"",1=>"",),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "15",
                "IBLOCK_TYPE" => "aspro_allcorp2_content",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "20",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array(0=>"",1=>"",),
                "RIGHT_LINK" => "",
                "RIGHT_TITLE" => "",
                "SET_BROWSER_TITLE" => "Y",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "Y",
                "SHOW_404" => "N",
                "SHOW_DATE" => "Y",
                "SHOW_SECTION" => "Y",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N",
                "TITLE" => "Партнеры и сертификаты"
            )
        );?>
	</div>
	<div class="list_licenses">
        <?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"licenses",
	array(
		"IBLOCK_TYPE" => "aspro_allcorp2_content",
		"IBLOCK_ID" => "52",
		"NEWS_COUNT" => "25",
		"USE_SEARCH" => "N",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "DESC",
		"CHECK_DATES" => "Y",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/company/dokumenty/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "100000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"USE_PERMISSIONS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DETAIL_PICTURE",
			4 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "TYPE_DOC",
			1 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
		"DISPLAY_NAME" => "N",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "DETAIL_PICTURE",
			3 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "TYPE_DOC",
			1 => "",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"VIEW_TYPE" => "list",
		"SHOW_SECTION_PREVIEW_DESCRIPTION" => "Y",
		"COUNT_IN_LINE" => "3",
		"AJAX_OPTION_ADDITIONAL" => "",
		"USE_REVIEW" => "N",
		"ADD_ELEMENT_CHAIN" => "N",
		"IMAGE_POSITION" => "left",
		"SHOW_DETAIL_LINK" => "N",
		"COMPONENT_TEMPLATE" => "licenses",
		"SET_LAST_MODIFIED" => "N",
		"DETAIL_STRICT_SECTION_CHECK" => "N",
		"T_REVIEWS" => "",
		"T_DOCS" => "",
		"T_PROJECTS" => "",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"SECTION_ELEMENTS_TYPE_VIEW" => "list_elements_1",
		"ELEMENT_TYPE_VIEW" => "element_1",
		"STRICT_SECTION_CHECK" => "N",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);?>
	</div>
</div>
<div class="price_btn">
 <a href="#form">Получить оптовый прайс</a>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>