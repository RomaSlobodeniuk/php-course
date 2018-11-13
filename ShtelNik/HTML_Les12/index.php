<?php
require_once '../helpers/functions.php';

$params = $_POST;

if (!empty($params['email'])) {
    debug($params);
    debug($_FILES);
    die();
}

$pictures = [
  [
      'name' => 'Black Humor',
      'src' => '../assets/images/black-humor.jpg',
      'text' => 'Text 1 goes here'
  ] ,
  [
      'name' => 'Smiled Face',
      'src' => '../assets/images/smile.jpeg',
      'text' => 'Text 2 goes here'
  ] ,
  [
      'name' => 'Cute Cat',
      'src' => '../assets/images/cat.jpg',
      'text' => 'Text 3 goes here'
  ]
];

require_once './header.php';
require_once './main.php';
require_once './footer.php';


