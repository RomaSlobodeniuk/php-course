<?php
require_once '../../../helpers/functions.php';

$params = $_POST;
if (!empty($params['email'])) {
    $email =$params['email'];
    $pattern = '/^([\w]{2,20}@[a-z]{2,10}\.[a-z]{2,4})$/i';

    if ($params['password1'] == $params ['password2']) {
        echo  'Hello, new user!';
    } else {
        echo 'Passwords are different';
    }

    die();
}



$pictures = [
    [
        'name' => 'Malta',
        'src' => 'images/malta.gif',
        'text' => 'Maltese Islands',
        'link' =>'https://www.visitmalta.com/ru/islands'
    ] ,
    [
        'name' => 'Tenerife',
        'src' => 'images/tenerife.jpg',
        'text' => 'Canary Islands',
        'link' =>'https://www.hellocanaryislands.com/'
    ] ,
    [
        'name' => 'Grenada',
        'src' => 'images/grenada.png',
        'text' => 'Caribbean Islands',
        'link' =>'https://www.caribbeanislands.com'
    ]
];




require_once './header.php';
require_once './main.php';
require_once './footer.php';


