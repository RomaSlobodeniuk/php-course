<?php

$params = $_POST;

if (!empty($params['password1']) && !empty(['password2'])) {
    if ($params['password1'] === $params['password2']) {
        echo 'Ok, it`s right validation';
    } else {
        echo 'Please enter correct passwords';
    }
}

