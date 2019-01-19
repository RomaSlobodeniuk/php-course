<?php
require_once './helpers/my_functions.php';

// проверяем наличие сессии и обновляем ее
$es = exists_session();

// база данных для action.php
$fileName = PHOTO_SOURCE_PATH;
$sourceData = getSourceData($fileName);

// выводим заголовок
$header = getHeader($sourceData, $es);
echo $header;

if ($es['user_id'] >= 0) {
    // выводим слайдер
    $slider = getSlider();
    echo $slider;
} else {
    if (basename(($_SERVER['SCRIPT_FILENAME']))!="index.php") {
        header("Location:index.php");
    }
}

// выводим футер
$footer = getFooter($sourceData);
echo $footer;
