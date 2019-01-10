<?php

$contentData = file_get_contents('source/home.json');
$homeArray = json_decode($contentData, true);

$header = file_get_contents('templates/header.html');
$header = str_replace('{{title}}', $homeArray['title'], $header);

$main = file_get_contents('templates/main.html');
$main = str_replace('{{greetings}}', $homeArray['greetings'], $main);
$main = str_replace('{{description}}', $homeArray['description'], $main);
$main = str_replace('{{additional}}', $homeArray['additional'], $main);
$main = str_replace('{{link}}', $homeArray['link'], $main);
$main = str_replace('{{link_name}}', $homeArray['link_name'], $main);

$sliderElement = file_get_contents('templates/slider_element.html');
$sliderHtml = '';
$i = 1;
foreach ($homeArray['page_content']['slider'] as $item) {
    $tmpTemplate = $sliderElement;
    $active = $i === 1 ? 'active' : '';
    $tmpTemplate = str_replace('{{active}}', $active, $tmpTemplate);
    $tmpTemplate = str_replace('{{image}}', 'images/' . $item['src'], $tmpTemplate);
    $tmpTemplate = str_replace('{{alt}}', $item['alt'], $tmpTemplate);
    $tmpTemplate = str_replace('{{text}}', $item['text'], $tmpTemplate);
    $sliderHtml .= $tmpTemplate;
    $i++;
}

$main = str_replace('{{slider_content}}', $sliderHtml, $main);

$footer = file_get_contents('templates/footer.html');

echo $header;
echo $main;
echo $footer;

