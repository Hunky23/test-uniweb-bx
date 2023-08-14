<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;
?>

    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php $APPLICATION->ShowTitle(); ?></title>

        <?php
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/asset/style/style.css');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/asset/js/swiper-bundle.min.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/asset/js/main.js');

        $APPLICATION->ShowHead();
        ?>
    </head>

    <body>
    <?php include_once ($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/asset/image/sprite/main.svg'); ?>

    <?php $APPLICATION->ShowPanel(); ?>

    <main class="main">
        <header class="header">
            <div class="header__top header-top">
                <div class="container header-top__container">
                    <?php
                    $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . '/include/header_phone.php'
                        )
                    );
                    ?>

                    <img class="header-top__slogan" src="/image/slogan.png" alt="slogan">

                    <a class="header-top__logo-link" href="/">
                        <img class="header-top__logo" src="/image/logo.png" alt="logo">
                    </a>


                    <div class="header-top__contacts header-contacts">
                        <a class="btn header-contacts__btn js-popup-trigger request" href="#">
                            <span>Оставить заявку</span>
                        </a>

                        <div class="header-top__popup header-popup js-popup-body request">
                            <?php
                            $APPLICATION->IncludeComponent("bitrix:form.result.new",
                                "test-uniofweb-bx",
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
                                    "USE_EXTENDED_ERRORS" => "N",
                                    "VARIABLE_ALIASES" => Array(
                                        "RESULT_ID" => "RESULT_ID",
                                        "WEB_FORM_ID" => "WEB_FORM_ID"
                                    ),
                                    "WEB_FORM_ID" => "1",
                                    "AJAX_MODE" => "Y",
                                    "AJAX_OPTION_SHADOW" => "N",
                                    "AJAX_OPTION_JUMP" => "N",
                                    "AJAX_OPTION_STYLE" => "Y",
                                    "AJAX_OPTION_HISTORY" => "N"
                                )
                            );
                            ?>
                        </div>

                        <a class="btn header-contacts__btn js-popup-trigger resume" href="#">
                            <span>Отправить резюме</span>
                        </a>

                        <div class="header-top__popup header-popup js-popup-body resume">
                            <?php
                            $APPLICATION->IncludeComponent("bitrix:form.result.new",
                                "test-uniofweb-bx",
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
                                    "USE_EXTENDED_ERRORS" => "N",
                                    "VARIABLE_ALIASES" => Array(
                                        "RESULT_ID" => "RESULT_ID",
                                        "WEB_FORM_ID" => "WEB_FORM_ID"
                                    ),
                                    "WEB_FORM_ID" => "2",
                                    "AJAX_MODE" => "Y",
                                    "AJAX_OPTION_SHADOW" => "N",
                                    "AJAX_OPTION_JUMP" => "N",
                                    "AJAX_OPTION_STYLE" => "Y",
                                    "AJAX_OPTION_HISTORY" => "N"
                                )
                            );
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header__bottom header-bottom">
                <div class="container header-bottom__container">
                    <?php
                    $APPLICATION->IncludeComponent("bitrix:menu", "header", Array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "subheader",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "2",
                            "MENU_CACHE_GET_VARS" => array(
                                0 => "",
                            ),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_THEME" => "",
                            "ROOT_MENU_TYPE" => "header",
                            "USE_EXT" => "N",
                        ),
                        false
                    );
                    ?>
                </div>
            </div>
        </header>