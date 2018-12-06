<?php

require_once './helpers/functions.php';
require_once './config/config.php';

$params = $_POST;
if (!empty($params['email'])) {
    debug($params);
    debug($_FILES);
    die();
}

$fileName = './source/home.json';
$sourceData = getSourceData($fileName);

$header = getHeader($sourceData);
$mainContent = getMainContent($sourceData, 'index');
$footer = getFooter($sourceData);

echo $header;
echo $mainContent;
echo $footer;



