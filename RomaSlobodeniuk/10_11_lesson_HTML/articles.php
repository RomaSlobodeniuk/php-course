<?php

require_once './helpers/functions.php';

$fileName = './source/articles.json';
$sourceData = getSourceData($fileName);

$header = getHeader($sourceData);
$mainContent = getMainContent($sourceData, 'articles');
$footer = getFooter($sourceData);

echo $header;
echo $mainContent;
echo $footer;



