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

<?php if (!empty($arResult)): ?>
    <ul class="footer-top__list">
        <?php foreach ($arResult as $menuItem): ?>
            <li class="footer-top__item">
                <a class="footer-top__link" href="<?= $menuItem['LINK']; ?>">
                    <?= $menuItem['TEXT']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>