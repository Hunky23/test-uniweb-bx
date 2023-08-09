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

$this->addExternalJs($templateFolder . '/script.js');
?>

<section class="personal">
    <div class="container personal__container">
        <h2 class="personal__title">Подобрать персонал</h2>

        <div class="personal__form-wrapper">
            <form class="personal__form personal-form js-personal-form">
                <div class="personal-form__column">
                    <div class="personal-form__row">
                        <span class="personal-form__text ">Показать только</span>
                    </div>

                    <div class="personal-form__row">
                        <select class="hidden js-select" name="profession">
                            <option value="няня" selected>Няня</option>
                            <option value="Гувернантка">Гувернантка</option>
                            <option value="дворник">Дворник</option>
                            <option value="водитель">Водитель</option>
                            <option value="садовник">Садовник</option>
                        </select>
                    </div>
                </div>

                <div class="personal-form__column">
                    <div class="personal-form__row">
                        <span class="personal-form__text ">Стаж от</span>

                        <input class="personal-form__short-input" type="number" name="experience_from" value="1">

                        <span class="personal-form__text ">до</span>

                        <input class="personal-form__short-input" type="number" name="experience_to" value="30">

                        <span class="personal-form__text ">лет</span>
                    </div>

                    <div class="personal-form__row">
                        <span class="personal-form__text ">Возраст от</span>

                        <input class="personal-form__short-input" type="number" name="age_from" value="25">

                        <span class="personal-form__text ">до</span>

                        <input class="personal-form__short-input" type="number" name="age_to" value="65">

                        <span class="personal-form__text ">лет</span>
                    </div>
                </div>

                <div class="personal-form__column">
                    <button class="btn personal-form__btn">
                        <span>ПОДОБРАТЬ</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="personal-table">
    <div class="container personal-table__container js-personal-table">
        <table>
            <thead>
            <tr>
                <th>ФИО</th>
                <th>Должность</th>
                <th>Возраст</th>
                <th>Стаж работы</th>
            </tr>
            </thead>

            <tbody class="js-personal-table-result">
            </tbody>
        </table>
    </div>
</section>