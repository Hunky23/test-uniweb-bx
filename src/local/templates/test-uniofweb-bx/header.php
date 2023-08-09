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
                            <form class="header-popup__form">
                                <input class="header-popup__field" type="text" placeholder="ФИО">

                                <input class="header-popup__field" type="tel" placeholder="Телефон">

                                <select class="hidden js-select" name="profession">
                                    <option value="tutor">Репетитор</option>
                                    <option value="governess">Гувернантка</option>
                                    <option value="babysitter" selected>Няня</option>
                                    <option value="driver">Водитель</option>
                                    <option value="gardner">Садовник</option>
                                </select>

                                <select class="hidden js-select" name="profession">
                                    <option value="full-day">Полный день</option>
                                    <option value="half-day">Пол дня</option>
                                    <option value="work-schedule" selected>График работы</option>
                                    <option value="few-hours">Несколько часов</option>
                                    <option value="around-clock">Круглосуточно</option>
                                </select>

                                <textarea class="header-popup__field" placeholder="Дополнительная информация"></textarea>

                                <button class="btn header-popup__btn">
                                    <span>Отправить</span>
                                </button>
                            </form>
                        </div>

                        <a class="btn header-contacts__btn js-popup-trigger resume" href="#">
                            <span>Отправить резюме</span>
                        </a>

                        <div class="header-top__popup header-popup js-popup-body resume">
                            <form class="header-popup__form">
                                <input class="header-popup__field" type="text" placeholder="ФИО">

                                <input class="header-popup__field" type="tel" placeholder="Телефон">

                                <select class="hidden js-select" name="profession">
                                    <option value="tutor">Репетитор</option>
                                    <option value="governess">Гувернантка</option>
                                    <option value="babysitter" selected>Няня</option>
                                    <option value="driver">Водитель</option>
                                    <option value="gardner">Садовник</option>
                                </select>

                                <input class="header-popup__field" type="tel" placeholder="Образование">

                                <input class="header-popup__field" type="text" placeholder="Прикрепить резюме">

                                <button class="btn header-popup__btn">
                                    <span>Отправить</span>
                                </button>
                            </form>
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