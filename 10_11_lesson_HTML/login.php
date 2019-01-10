<?php

require_once './helpers/functions.php';
require_once './config/config.php';

$fileName = './source/login.json';
$sourceData = getSourceData($fileName);

$header = getHeader($sourceData);
$mainContent = getMainContent($sourceData, 'login');
$footer = getFooter($sourceData);

echo $header;
echo $mainContent;
echo $footer;



