<?php

class Bootstrap {

    function __construct()
    {
        $url = $_GET['url'];
        $url = explode('/', $url);

        if (empty($url[0])) {
            require 'controllers/Calculator.php';
            $controller = new Calculator;
            $controller->index();
        } else {

            $path = 'controllers/' . $url[0] . '.php';

            if (file_exists($path)) {
                require $path;
                $controller = new $url[0];
                $controller->index();
            } else {
                require 'controllers/Calculator.php';
                $controller = new Calculator;
                $controller->index();
            }
        }
    }
}