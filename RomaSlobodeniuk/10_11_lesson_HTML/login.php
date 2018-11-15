<?php

require_once './helpers/functions.php';

login();

$fileName = './source/login.json';
$sourceData = getSourceData($fileName);

$header = getHeader($sourceData);
$mainContent = getMainContent($sourceData, 'login');
$footer = getFooter($sourceData);

echo $header;
echo $mainContent;
echo $footer;



