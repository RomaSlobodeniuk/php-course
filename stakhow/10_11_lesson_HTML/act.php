<?php
// require_once '../helpers/functions.php';

$params = $_POST;

if (!empty($params['name']) && !empty($params['email']) && !empty($params['pass']) && !empty($params['pass-repeat'])){
    if($params['pass'] === $params['pass-repeat'] ){

        $greetingMessage = $params['name'];
    }
}