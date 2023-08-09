<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<nav class="header-bottom__wrapper header-menu">
    <?php if (!empty($arResult)): ?>
        <ul class="header-menu__list">
            <?php foreach ($arResult as $menuItem): ?>
                <li class="header-menu__item">
                    <a class="header-menu__link" href="<?= $menuItem['LINK']; ?>">
                        <?= $menuItem['TEXT']; ?>
                    </a>

                    <?php if (!empty($menuItem['SUB_ITEM'])):?>
                        <div class="header-menu__sub-menu header-sub-menu">
                            <ul class="header-sub-menu__list">
                                <?php foreach ($menuItem['SUB_ITEM'] as $menuSubItem): ?>
                                    <li class="header-sub-menu__item">
                                        <a class="header-sub-menu__link" href="<?= $menuSubItem['LINK']; ?>">
                                            <?= $menuSubItem['TEXT']; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</nav>