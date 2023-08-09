<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\SystemException;
use Bitrix\Main\Page\Asset;
use Bitrix\Main\Engine\Contract\Controllerable;
use Bitrix\Main\Engine\ActionFilter;

class SearchBarComponent extends \CBitrixComponent implements Controllerable
{
    public function onPrepareComponentParams($arParams)
    {
        return $arParams;
    }

    public function executeComponent()
    {
        try {
            $this->IncludeComponentTemplate();

            Asset::getInstance()->addJs($this->getPath() . '/script.js');
        } catch (SystemException $e) {
            ShowError($e->getMessage());
        }
    }

    public function configureActions()
    {
        return [
            'ajaxRequest' => [
                '-prefilters' => [
                    ActionFilter\Authentication::class
                ]
            ]
        ];
    }

    protected function listKeysSignedParameters()
    {
        return [];
    }

    public function ajaxRequestAction($query = null)
    {
        try {
            CModule::IncludeModule('iblock');

            if (empty($query['profession'])) {
                return;
            }

            if (
                empty($query['experience_from'])
                || $query['experience_from'] < 0
                || $query['experience_from'] > 100
            ) {
                return;
            }

            if (
                empty($query['experience_to'])
                || $query['experience_to'] < 0
                || $query['experience_to'] > 100
            ) {
                return;
            }

            if (
                empty($query['age_from'])
                || $query['age_from'] < 0
                || $query['age_from'] > 100
            ) {
                return;
            }

            if (
                empty($query['age_to'])
                || $query['age_to'] < 0
                || $query['age_to'] > 100
            ) {
                return;
            }

            $tempResult = CIBlockElement::GetList(array(), array(
                'IBLOCK_ID' => 4,
                '=PROPERTY_ATT_POSITION' => $query['profession'],
                '><PROPERTY_ATT_AGE' => array(
                    $query['age_from'],
                    $query['age_to']
                ),
                '><PROPERTY_ATT_EXPERIENCE' => array(
                    $query['experience_from'],
                    $query['experience_to']
                )
            ),
                false,
                array(),
                array(
                    'ID',
                    'NAME',
                    'PROPERTY_ATT_POSITION',
                    'PROPERTY_ATT_AGE',
                    'PROPERTY_ATT_EXPERIENCE'
                )
            );



            while($ar = $tempResult->GetNext()) {
                $this->arResult[] = array(
                    'NAME' => $ar['NAME'],
                    'POSITION' => $ar['PROPERTY_ATT_POSITION_VALUE'],
                    'AGE' => $ar['PROPERTY_ATT_AGE_VALUE'],
                    'EXPERIENCE' => $ar['PROPERTY_ATT_EXPERIENCE_VALUE']
                );
            }

            ob_start();
            $this->IncludeComponentTemplate('ajax');
            return ob_get_clean();
        } catch (SystemException $e) {
            ShowError($e->getMessage());
        }
    }
}