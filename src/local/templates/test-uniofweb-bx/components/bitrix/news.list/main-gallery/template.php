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
<div class="gallery__wrapper">
    <?php if (!empty($arResult['ITEMS'])): ?>
        <?php foreach ($arResult['ITEMS'] as $picture): ?>
            <div class="gallery__image-wrapper">
                <img class="gallery__image" src="<?= $picture['DETAIL_PICTURE']['SRC']; ?>" alt="gallery-image">
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>