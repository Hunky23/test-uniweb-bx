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

<div class="hero__slider hero-slider js-hero-slider">
    <div class="wrapper hero-slider__wrapper">
        <?php if (!empty($arResult['ITEMS'])): ?>
            <?php foreach ($arResult['ITEMS'] as $slide): ?>
                <div class="slide hero-slider__slide">
                    <img class="hero-slider__slide-image" src="<?= $slide['DETAIL_PICTURE']['SRC']; ?>" alt="slide">
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <div class="pagination hero-slider__pagination"></div>
</div>