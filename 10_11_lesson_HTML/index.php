<?php
// require_once '../helpers/functions.php';

$params = $_POST;

if (!empty($params['name']) && !empty($params['email']) && !empty($params['pass']) && !empty($params['pass-repeat'])){
    if($params['pass'] === $params['pass-repeat'] ){

     $nameUser = $params['name'];
    }
}






// $pictures = [
//   [
//       'name' => 'Black Humor',
//       'src' => '../assets/images/black-humor_o_817783.jpg',
//       'text' => 'Text 1 goes here'
//   ] ,
//   [
//       'name' => 'Smiled Face',
//       'src' => '../assets/images/download.jpeg',
//       'text' => 'Text 2 goes here'
//   ] ,
//   [
//       'name' => 'Cute Cat',
//       'src' => '../assets/images/cat.jpg',
//       'text' => 'Text 3 goes here'
//   ]
// ];

require_once './header.php';
require_once './main.php';
require_once './footer.php';

