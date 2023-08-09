<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

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
?>

<?php if(!empty($arResult)): ?>
    <?php foreach ($arResult as $person): ?>
        <tr>
            <td><?= $person['NAME']; ?></td>
            <td><?= $person['POSITION']; ?></td>
            <td><?= $person['AGE']; ?></td>
            <td><?= $person['EXPERIENCE']; ?></td>
        </tr>
    <?php endforeach; ?>
<?php endif; ?>