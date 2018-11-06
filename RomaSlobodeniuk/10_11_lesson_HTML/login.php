<?php

require_once './helpers/functions.php';
require_once './config/config.php';

$params = $_POST;
if (isset($params['email']) && empty($params['email'])) {
    debug("Введіть Ваш EMAIL!");
    debug($params);
} elseif (!empty($params['pass1']) && !empty($params['pass2'])) {
    if ($params['pass1'] !== $params['pass2']) {
        debug("Паролі не співпадають!");
        debug($params);
    } else {
        debug("Вітаю, ви новий користувач у системі!");
        debug($params);
    }
}

$fileName = './source/login.json';
$sourceData = getSourceData($fileName);

$header = getHeader($sourceData);
$mainContent = getMainContent($sourceData, 'login');
$footer = getFooter($sourceData);

echo $header;
echo $mainContent;
echo $footer;



