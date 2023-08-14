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

<form class="choose-staff-filter" action="<?= $arResult["FORM_ACTION"]; ?>" name="<?= $arResult["FILTER_NAME"] . "_form"; ?>">
    <div class="choose-staff-filter__column">
        <div class="choose-staff-filter__row">
            <span class="choose-staff-filter__text ">Показать только</span>
        </div>

        <div class="choose-staff-filter__row">
            <select class="hidden js-select" name="arrFilter_pf[ATT_POSITION]">
                <option value="Няня" <?= $arResult['ITEMS']['PROPERTY_9']['INPUT_VALUE'] === 'Няня' ? 'selected' : ''; ?>>Няня</option>
                <option value="Гувернантка" <?= $arResult['ITEMS']['PROPERTY_9']['INPUT_VALUE'] === 'Гувернантка' ? 'selected' : ''; ?>>Гувернантка</option>
                <option value="Дворник" <?= $arResult['ITEMS']['PROPERTY_9']['INPUT_VALUE'] === 'Дворник' ? 'selected' : ''; ?>>Дворник</option>
                <option value="Водитель" <?= $arResult['ITEMS']['PROPERTY_9']['INPUT_VALUE'] === 'Водитель' ? 'selected' : ''; ?>>Водитель</option>
                <option value="Садовник" <?= $arResult['ITEMS']['PROPERTY_9']['INPUT_VALUE'] === 'Садовник' ? 'selected' : ''; ?>>Садовник</option>
            </select>
        </div>
    </div>

    <div class="choose-staff-filter__column">
        <div class="choose-staff-filter__row">
            <span class="choose-staff-filter__text ">Стаж от</span>

            <input class="choose-staff-filter__short-input" type="number" name="arrFilter_pf[ATT_EXPERIENCE][LEFT]"
                   value="<?= $arResult['ITEMS']['PROPERTY_11']['INPUT_VALUES'][0]; ?>">

            <span class="choose-staff-filter__text ">до</span>

            <input class="choose-staff-filter__short-input" type="number" name="arrFilter_pf[ATT_EXPERIENCE][RIGHT]"
                   value="<?= $arResult['ITEMS']['PROPERTY_11']['INPUT_VALUES'][1]; ?>">

            <span class="choose-staff-filter__text ">лет</span>
        </div>

        <div class="choose-staff-filter__row">
            <span class="choose-staff-filter__text ">Возраст от</span>

            <input class="choose-staff-filter__short-input" type="number" name="arrFilter_pf[ATT_AGE][LEFT]"
                   value="<?= $arResult['ITEMS']['PROPERTY_10']['INPUT_VALUES'][0]; ?>">

            <span class="choose-staff-filter__text ">до</span>

            <input class="choose-staff-filter__short-input" type="number" name="arrFilter_pf[ATT_AGE][RIGHT]"
                   value="<?= $arResult['ITEMS']['PROPERTY_10']['INPUT_VALUES'][1]; ?>">

            <span class="choose-staff-filter__text ">лет</span>
        </div>
    </div>

    <div class="choose-staff-filter__column">
        <button class="btn choose-staff-filter__btn">
            <span>ПОДОБРАТЬ</span>
        </button>

        <input type="hidden" name="set_filter" value="Y"/>
    </div>
</form>