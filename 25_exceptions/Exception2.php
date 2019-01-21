<?php

function error_error_handler($severity, $message, $file, $line) {
    if (!(error_reporting() &$severity)) {
        /**
         * Цей код помилки не входить в error_reporting
         */
        return;
    }

    throw new ErrorException($message, 0, $severity, $file, $line);
}

function exception_error_handler(Exception $exception) {
//    echo $exception;
    echo "Неперехвачене виключення: " , $exception->getMessage(), "<br>";
}

set_error_handler("error_error_handler");
set_exception_handler("exception_error_handler");

/**
 * Викликаємо виключення
 */
strpos();
