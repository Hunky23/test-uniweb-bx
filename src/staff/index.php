<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Подобрать персонал");
?>

<section class="hero">
    <div class="container hero__container">
        <?php
        $APPLICATION->IncludeComponent("bitrix:news.list", "main-slider", array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "N",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "N",
                "DISPLAY_NAME" => "N",
                "DISPLAY_PICTURE" => "N",
                "DISPLAY_PREVIEW_TEXT" => "N",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array("DETAIL_PICTURE", ""),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "2",
                "IBLOCK_TYPE" => "gallery",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "N",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array("", ""),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "Y",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "ID",
                "SORT_ORDER1" => "ASC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N"
            )
        );
        ?>
    </div>
</section>

<section class="choose-staff">
    <div class="container choose-staff__container">
        <h2 class="choose-staff__title">Подобрать персонал</h2>

        <?php
        $APPLICATION->IncludeComponent(
            "bitrix:news",
            "test-uniofweb-bx",
            Array(
                "ADD_ELEMENT_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "Y",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "BROWSER_TITLE" => "-",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
                "DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
                "DETAIL_DISPLAY_TOP_PAGER" => "N",
                "DETAIL_FIELD_CODE" => array(""),
                "DETAIL_PAGER_SHOW_ALL" => "N",
                "DETAIL_PAGER_TEMPLATE" => "",
                "DETAIL_PAGER_TITLE" => "Страница",
                "DETAIL_PROPERTY_CODE" => array(),
                "DETAIL_SET_CANONICAL_URL" => "N",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "N",
                "DISPLAY_NAME" => "N",
                "DISPLAY_PICTURE" => "N",
                "DISPLAY_PREVIEW_TEXT" => "N",
                "DISPLAY_TOP_PAGER" => "N",
                "FILTER_FIELD_CODE" => array("", ""),
                "FILTER_NAME" => "",
                "FILTER_PROPERTY_CODE" => array("ATT_AGE", "ATT_POSITION", "ATT_EXPERIENCE"),
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "4",
                "IBLOCK_TYPE" => "staff",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                "LIST_FIELD_CODE" => array(),
                "LIST_PROPERTY_CODE" => array("ATT_AGE", "ATT_POSITION", "ATT_EXPERIENCE"),
                "MESSAGE_404" => "",
                "META_DESCRIPTION" => "-",
                "META_KEYWORDS" => "-",
                "NEWS_COUNT" => "20",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PREVIEW_TRUNCATE_LEN" => "",
                "SEF_MODE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHARE_HANDLERS" => array(),
                "SHARE_HIDE" => "N",
                "SHARE_SHORTEN_URL_KEY" => "",
                "SHARE_SHORTEN_URL_LOGIN" => "",
                "SHARE_TEMPLATE" => "",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N",
                "USE_CATEGORIES" => "N",
                "USE_FILTER" => "Y",
                "USE_PERMISSIONS" => "N",
                "USE_RATING" => "N",
                "USE_RSS" => "N",
                "USE_SEARCH" => "N",
                "USE_SHARE" => "N",
                "VARIABLE_ALIASES" => Array(
                    "ELEMENT_ID" => "ELEMENT_ID",
                    "SECTION_ID" => "SECTION_ID"
                )
            )
        );
        ?>
    </div>
</section>

<section class="post">
    <div class="container post__container">
        <?php
        $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
            "AREA_FILE_SHOW" => "page",
            "AREA_FILE_SUFFIX" => "post"
        ),
            false
        );
        ?>
    </div>
</section>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>