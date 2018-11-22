<?php

require_once './func/functions.php';

$fileName = 'sources/index.json';
$sourceData = getSourceData($fileName);

/*$params = $_GET;

if (!empty($params)) {
    print_r($params);
}*/

$mainSlider = getSliderContent($sourceData);

echo $mainSlider;

$images = [
    [
        'name' => 'robotoy retro',
        'src' => 'img/00387_robotoy_retro_thumb_alpha.png',
        'description' => 'Some robot 1. Some quick example text to build on the card title and make up the bulk of the card\'s content.'
    ],
    [
        'name' => 'looksee retro',
        'src' => 'img/00417_looksee_retro_thumb_alpha.png',
        'description' => 'Some robot 2. Some quick example text to build on the card title and make up the bulk of the card\'s content.'
    ],
    [
        'name' => 'retro daddy',
        'src' => 'img/00428_retro_daddy_thumb_alpha.png',
        'description' => 'Some robot 3. Some quick example text to build on the card title and make up the bulk of the card\'s content.'
    ],
    [
        'name' => 'retro pups',
        'src' => 'img/00451_retro_pups_thumb_alpha.png',
        'description' => 'Some robot 4. Some quick example text to build on the card title and make up the bulk of the card\'s content.'
    ],
    [
        'name' => 'retro pirate',
        'src' => 'img/00456_retro_pirate_thumb_alpha.png',
        'description' => 'Some robot 5. Some quick example text to build on the card title and make up the bulk of the card\'s content.'
    ],
    [
        'name' => 'cheburashka',
        'src' => 'img/00465_cheburashka_thumb_alpha.png',
        'description' => 'Some robot 6. Some quick example text to build on the card title and make up the bulk of the card\'s content.'
    ]
];


require_once ('header.php');
require_once ('main.php');
require_once ('footer.php');