<?php

class View {

    public function render($name, $arg = false) {
        require 'views/' . $name . '.php';
    }
}