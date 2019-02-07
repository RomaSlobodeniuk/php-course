<?php

use Classes\HardProcessor;
use Classes\LoggerSingleton;

spl_autoload_register(function ($class) {
    $file_name = str_replace('\\', '/', $class) . '.php';
    if (file_exists($file_name)) {
        require_once($file_name);
    } else {
        echo "file does not exist!";
    }
});

$logger = LoggerSingleton::getInstance();
$processor = new HardProcessor(1);
$logger->log("Hard work started...");
$processor->processTo(5);
$logger->log("Hard work finished...");