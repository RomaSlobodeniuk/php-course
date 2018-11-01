<?php
require_once '../../../helpers/functions.php';

$params = $_POST;

if (!empty($params['email'])) {
    debug($params);
    debug($_FILES);
    die();
}

$pictures = [
    [
        'name' => 'Malta',
        'src' => 'images/malta.gif',
        'text' => 'Maltese Islands'
    ] ,
    [
        'name' => 'Tenerife',
        'src' => 'images/tenerife.jpg',
        'text' => 'Canary Islands'
    ] ,
    [
        'name' => 'Grenada',
        'src' => 'images/grenada.png',
        'text' => 'Caribbean Islands'
    ]
];

require_once './header.php';
require_once './main.php';
require_once './footer.php';


