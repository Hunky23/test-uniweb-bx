<?php
$temp = array();

if (! empty($arResult)) {
    foreach ($arResult as $key => $item) {
        if ($item['DEPTH_LEVEL'] === 1) {
            $temp[] = $item;
        } else {
            $temp[end(array_keys($temp))]['SUB_ITEM'][] = $item;
        }
    }
}

$arResult = $temp;