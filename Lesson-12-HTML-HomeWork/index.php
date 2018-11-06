<?php
/**
 * Создаем сайт используя Bootstrap и вставки PHP
 *
 */

require_once '../helpers/functions.php';
require_once './pars_file_weapon_to_array.php';

//$pictures = [
//    [
//        'name' => 'Colt M1911A1',
//        'src' => 'weapon_img/weapon1.jpeg',
//        'text' => 'Text 1 goes here',
//        'url' => 'https://ru.wikipedia.org/wiki/M1911'
//    ] ,
//    [
//        'name' => 'Nagan',
//        'src' => 'weapon_img/weapon2.jpeg',
//        'text' => 'Text 2 goes here',
//        'url' => 'https://ru.wikipedia.org/wiki/%D0%A0%D0%B5%D0%B2%D0%BE%D0%BB%D1%8C%D0%B2%D0%B5%D1%80_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D1%8B_%D0%9D%D0%B0%D0%B3%D0%B0%D0%BD%D0%B0'
//    ] ,
//    [
//        'name' => 'ППШ',
//        'src' => 'weapon_img/weapon3.jpeg',
//        'text' => 'Text 3 goes here',
//        'url' => 'https://ru.wikipedia.org/wiki/%D0%9F%D0%B8%D1%81%D1%82%D0%BE%D0%BB%D0%B5%D1%82-%D0%BF%D1%83%D0%BB%D0%B5%D0%BC%D1%91%D1%82_%D0%A8%D0%BF%D0%B0%D0%B3%D0%B8%D0%BD%D0%B0'
//    ],
//    [
//        'name' => 'Parabellum',
//        'src' => 'weapon_img/weapon4.jpeg',
//        'text' => 'Text 4 goes here',
//        'url' => 'https://ru.wikipedia.org/wiki/%D0%9F%D0%B8%D1%81%D1%82%D0%BE%D0%BB%D0%B5%D1%82_%D0%9B%D1%8E%D0%B3%D0%B5%D1%80%D0%B0'
//    ],
//    [
//        'name' => 'TT',
//        'src' => 'weapon_img/weapon5.jpeg',
//        'text' => 'Text 5 goes here',
//        'url' => 'https://ru.wikipedia.org/wiki/%D0%A2%D0%A2'
//    ],
//    [
//        'name' => 'P-38',
//        'src' => 'weapon_img/weapon6.jpeg',
//        'text' => 'Text 6 goes here',
//        'url' => 'https://ru.wikipedia.org/wiki/Walther_P38'
//    ],
//    [
//        'name' => 'FN Browning High Power',
//        'src' => 'weapon_img/weapon7.jpeg',
//        'text' => 'Text 7 goes here',
//        'url' => 'https://ru.wikipedia.org/wiki/Browning_Hi-Power'
//    ],
//    [
//        'name' => 'СГ-43',
//        'src' => 'weapon_img/weapon8.jpeg',
//        'text' => 'Text 8 goes here',
//        'url' => 'https://ru.wikipedia.org/wiki/%D0%A1%D0%93-43'
//    ],
//    [
//        'name' => 'Sturmgewehr 44',
//        'src' => 'weapon_img/weapon9.jpeg',
//        'text' => 'Text 9 goes here',
//        'url' => 'https://ru.wikipedia.org/wiki/StG_44'
//    ],
//    [
//        'name' => 'MG 42',
//        'src' => 'weapon_img/weapon10.jpeg',
//        'text' => 'Text 10 goes here',
//        'url' => 'https://ru.wikipedia.org/wiki/MG_42'
//    ],
//    [
//        'name' => 'Walther P38',
//        'src' => 'weapon_img/weapon11.jpeg',
//        'text' => 'Text 11 goes here',
//        'url' => 'https://ru.wikipedia.org/wiki/Walther_P38'
//    ],
//    [
//        'name' => 'Mauser Gewehr 98',
//        'src' => 'weapon_img/weapon12.jpeg',
//        'text' => 'Text 12 goes here',
//        'url' => 'https://ru.wikipedia.org/wiki/Mauser_98'
//    ]
//];

require_once './header.php';
require_once './main.php';
require_once './footer.php';


?>
