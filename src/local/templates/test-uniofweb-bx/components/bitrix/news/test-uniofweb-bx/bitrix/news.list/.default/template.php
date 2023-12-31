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

<div class="choose-staff-list">
    <table>
        <thead>
            <tr>
                <th>ФИО</th>
                <th>Должность</th>
                <th>Возраст</th>
                <th>Стаж работы</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($arResult["ITEMS"] as $arItem): ?>
                <?php
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>

                <tr id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <td><?= $arItem["NAME"]; ?></td>
                    <td><?= $arItem['PROPERTIES']['ATT_POSITION']['VALUE']; ?></td>
                    <td><?= $arItem['PROPERTIES']['ATT_AGE']['VALUE']; ?></td>
                    <td><?= $arItem['PROPERTIES']['ATT_EXPERIENCE']['VALUE']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>