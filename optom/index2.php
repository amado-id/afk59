<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оптовикам");?>
    <div class="row margin0">
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "front-banners-big-long-opt",
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
                "COMPONENT_TEMPLATE" => "front-banners-big-long-opt",
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
                "IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_allcorp2_adv"]["aspro_allcorp2_advtbig_opt"][0],
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
                "PROPERTY_CODE" => array(
                    0 => "",
                    1 => "BANNERTYPE",
                    2 => "LINKIMG",
                    3 => "BUTTON1TEXT",
                    4 => "BUTTON1CLASS",
                    5 => "BUTTON2TEXT",
                    6 => "BUTTON2LINK",
                    7 => "TEXTCOLOR",
                    8 => "PHOTO_780",
                    9 => "PHOTO_320",
                    10 => "",
                ),
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
            ),
            false
        );?>
        <div class="drag-block container <?=$optionCode?> <?=$bFloatBannersIndexClass;?>" data-class="<?=$optionCode?>_drag" data-order="<?=++$key;?>">
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
                        "COMPONENT_TEMPLATE" => "front-banners-float-opt",
                        "TITLE" => "Кровельные и фасадные системы, сайдинг, профнастил и другие стройматериалы",
                        "RIGHT_TITLE" => "",
                        "RIGHT_LINK" => ""
                    ),
                    false
                );?>
            </div>
        </div>
        <div class="drag-block container works-plan <?=$optionCode?> <?=$bTeasersIndexClass;?>" data-class="<?=$optionCode?>_drag" data-order="<?=++$key;?>">
            <div class="maxwidth-theme">
                <div class="title_block">
                    <h3 class="uppercase_name">Схема работы с строительными кампаниями</h3>
                </div>
                <div class="shema__list">
                    <div class="shema__one">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/opt/consultation.png" alt="" />
                        <p><span>Консультация менеджера</span></p>
                    </div>
                    <div class="shema__one">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/opt/free.png" alt="" />
                        <p><span>Бесплатный замер при необходимости</span></p>
                    </div>
                    <div class="shema__one">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/opt/materials.png" alt="" />
                        <p><span>Подбор всех необходимых материалов для объекта</span></p>
                    </div>
                    <div class="shema__one">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/opt/individ.png" alt="" />
                        <p><span>Формирование индивидуального коммерческого предложения</span>
                    </div>
                    <div class="shema__one">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/opt/oneday.png" alt="" />
                        <p> <span>Доставка от 1 дня</span></p>
                    </div>
                    <div class="shema__one">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/opt/services.png" alt="" />
                        <p><span>Услуги монтажа</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="purple-work-plan" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/images/test-bkg.jpg'); background-position:center center; background-repeat: no-repeat; background-size: cover;">
            <h3>Почему закупить материалы для стройки в «АФК» выгодно?</h3>
            <div class="purple__list">
                <div class="purple__one">
                    <div class="number">
                        <p>1</p>
                    </div>
                    <div class="description">
                        <p class="description_name">Комплектация объекта под ключ</p>
                        <p>Подберем и поставим все необходимое в нужном объеме, произведем монтаж</p>
                    </div>
                </div>
                <div class="purple__one">
                    <div class="number">
                        <p>2</p>
                    </div>
                    <div class="description">
                        <p class="description_name">Выгодная система скидок</p>
                        <p>Чем масштабнее объект, тем больше скидка - возможность экономить на стройматериалах до 30%</p>
                    </div>
                </div>
                <div class="purple__one">
                    <div class="number">
                        <p>3</p>
                    </div>
                    <div class="description">
                        <p class="description_name">Удобная логистика</p>
                        <p>Доставка по Перми и Пермскому краю от 1 дня</p>
                    </div>
                </div>
                <div class="purple__one">
                    <div class="number">
                        <p>4</p>
                    </div>
                    <div class="description">
                        <p class="description_name">Гарантия качества</p>
                        <p>Мы сотрудничаем с производителями напрямую и гарантируем качество поставляемого товара</p>
                    </div>
                </div>
            </div>
            <div class="price_btn">
                <a href="#form">Получить индивидуальное предложение</a>
            </div>
        </div>

        <?//COMPANY_INDEX?>

        <div class="drag-block container <?=$optionCode?> <?=$bCompanyOptClass;?>" data-class="<?=$optionCode?>_drag" data-order="<?=++$key;?>">
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
    </div>

    <div class="drag-block container works-plan <?=$optionCode?> <?=$bTeasersIndexClass;?>" data-class="<?=$optionCode?>_drag" data-order="<?=++$key;?>">
        <div class="maxwidth-theme">
            <h3 class="uppercase_name">Почему стоит обратиться к нам, а не напрямую к производителю?</h3>
            <p style="font-weight: 400; width: 60%; padding-right: 40px">Чаще всего заводы предлагают товары только собственного производства. У нас можно приобрести все необходимые материалы - подберем и доставим под ваш проект.</p>
            <div class="shema__list">
                <div class="shema__one">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/opt/brends.png" alt="" />
                    <p>Вы можете выбрать товары нескольких брендов</p>
                </div>
                <div class="shema__one">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/opt/time.png" alt="" />
                    <p>Доставим точно в срок</p>
                </div>
                <div class="shema__one">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/opt/products.png" alt="" />
                    <p>Проконтролируем качество продукции</p>
                </div>
                <div class="shema__one">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/opt/montage.png" alt="" />
                    <p>Произведем качественный монтаж при необходимости</p>
                </div>
            </div>
        </div>
    </div>
<?$APPLICATION->IncludeComponent(
    "bitrix:form.result.new",
    "six_easy_step",
    Array(
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
        "VARIABLE_ALIASES" => Array("RESULT_ID"=>"RESULT_ID","WEB_FORM_ID"=>"WEB_FORM_ID"),
        "WEB_FORM_ID" => "13"
    )
);?>

    <div class="drag-block container works-plan <?=$optionCode?> <?=$bTeasersIndexClass;?>" data-class="<?=$optionCode?>_drag" data-order="<?=++$key;?>">
        <div class="maxwidth-theme">

            <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "front-news-opt",
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
                    "PROPERTY_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
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
                    "COMPONENT_TEMPLATE" => "front-news-opt",
                    "TITLE" => "Партнеры и сертификаты",
                    "RIGHT_TITLE" => "Все партнеры",
                    "RIGHT_LINK" => "info/partners/",
                    "COUNT_IN_LINE" => "4",
                    "SHOW_DATE" => "Y",
                    "SHOW_SECTION" => "Y"
                ),
                false
            );?>
            <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "front-sertificates-opt",
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
                    "IBLOCK_ID" => "52",
                    "IBLOCK_TYPE" => "aspro_allcorp2_content",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "4",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Сертификаты",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array(
                        0 => "TYPE_DOC",
                        1 => "FILE",
                        2 => "",
                    ),
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
                    "COMPONENT_TEMPLATE" => "front-sertificates-opt",
                    "TITLE" => " ",
                    "RIGHT_TITLE" => "Все сертификаты",
                    "RIGHT_LINK" => "info/sertificates/",
                    "COUNT_IN_LINE" => "4",
                    "SHOW_DATE" => "Y",
                    "SHOW_SECTION" => "Y"
                ),
                false
            );?>
        </div>
    </div>
    <div class="price_btn">
        <a href="#form">Получить оптовый прайс</a>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>