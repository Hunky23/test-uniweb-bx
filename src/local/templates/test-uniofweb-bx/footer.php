<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

    <footer class="footer">
        <div class="footer__top footer-top">
            <div class="container footer-top__container">
                <?php
                $APPLICATION->IncludeComponent("bitrix:menu", "footer", Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(
                        0 => "",
                    ),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_THEME" => "",
                    "ROOT_MENU_TYPE" => "footer",
                    "USE_EXT" => "N",
                ),
                    false
                );
                ?>
            </div>
        </div>

        <div class="footer__bottom footer-bottom">
            <div class="container footer-bottom__container">
                <?php
                $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH . '/include/footer_phone.php'
                    )
                );
                ?>

                <a class="footer-bottom__copyright" href="https://uniofweb.ru/" target="_blank">
                    Разработка и продвижение сайта компанией «Юни Веб» -

                    <img class="footer-bottom__copyright-image" src="/image/developer-logo.png" alt="developer-logo">
                </a>
            </div>
        </div>
    </footer>
</main>