<?php
/**
 * Создаем сайт используя Bootstrap и вставки PHP
 *
 */

// подключаем свой функционал
require_once './helpers/my_functions.php';

getPicArray(); // добавляем массив картинок

// проверяем наличие сессии
$es = exists_session();

// база данных для index.php
$fileName = INDEX_SOURCE_PATH;
$sourceData = getSourceData($fileName);

// выводим заголовок
$header = getHeader($sourceData, $es);
echo $header;

// выводим логин форму
$login = getLoginForm($es);
echo $login;

// выводим футер
$footer = getFooter($sourceData);
echo $footer;


