<?php

namespace controllers;

use Controller;

class Calculator extends Controller {

    public $answer = 0;

    function __construct()
    {
        parent::__construct();
    }

    public function index(){

        $post = $_POST;

        if (isset($post['ok'])) {
            $var1 = $post['val1'];
            $var2 = $post['val2'];

            if ($post['operation'] == '+') {
                $this->answer = $var1 + $var2;
            } elseif ($post['operation'] == '-') {
                $this->answer = $var1 - $var2;
            } elseif ($post['operation'] == '/') {
                $this->answer = $var1 / $var2;
            } elseif ($post['operation'] == '*') {
                $this->answer = $var1 * $var2;
            }
        }

        $this->view->render('index', $this->answer);
    }
}