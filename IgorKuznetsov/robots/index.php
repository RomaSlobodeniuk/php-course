<?php

$params = $_GET;

if (!empty($params)) {
    print_r($params);
}

require_once ('header.php');
require_once ('main.php');
require_once ('footer.php');