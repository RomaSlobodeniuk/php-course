<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MyCalcIn_OOP</title>
</head>

<body>

<?php
$params = $_POST;

if (!empty($params)) {
//    var_dump($params);
}

?>

<a name="login"></a>
<p class="lead">Calculator</p>

<div>
    <form name="form_calc" method="post" action="">
        <div>
            <label for="1st">Input 1st argument</label>
            <input id="1st" name="arg1" type="text" <?= !empty($params['arg1']) ? "value=\"".$params['arg1']."\"" : "placeholder=\"1st argument\"";?>">
        </div>
        <div>
            <label for="2d">Input 2d argument</label>
            <input id="2d" name="arg2" type="text"  <?= !empty($params['arg1']) ? "value=\"".$params['arg2']."\"" : "placeholder=\"2d argument\"";?>">
        </div>
        <div>
            <input type="radio" name="math_action" value="1" <?= (!empty($params['math_action']) && $params['math_action']==1) ? "checked" : "" ?> > <b> + </b>
            <input type="radio" name="math_action" value="2" <?= (!empty($params['math_action']) && $params['math_action']==2) ? "checked" : "" ?> > <b> - </b>
            <input type="radio" name="math_action" value="3" <?= (!empty($params['math_action']) && $params['math_action']==3) ? "checked" : "" ?> > <b> * </b>
            <input type="radio" name="math_action" value="4" <?= (!empty($params['math_action']) && $params['math_action']==4) ? "checked" : "" ?> > <b> / </b>
        </div>
        <button type="submit">Calculate</button>
<!--        <button type="reset">Reset</button>-->
    </form>
</div>
<br>

<?php

class Calculator
{
    public $arg1;
    public $arg2;
    public $action;
    public $action_txt;
    public $result;
    private $result_private;

    public function __construct($arg1, $arg2, $action)
    {
        $this->arg1 = $arg1;
        $this->arg2 = $arg2;
        $this->action = $action;

        switch ($action) {
            case 1:
                $this->result = $arg1 + $arg2;
                $this->result_private = $this->result;
                $this->action_txt = '+';
                break;
            case 2:
                $this->result = $arg1 - $arg2;
                $this->result_private = $this->result;
                $this->action_txt = '-';
                break;
            case 3:
                $this->result = $arg1 * $arg2;
                $this->result_private = $this->result;
                $this->action_txt = '*';
                break;
            case 4:
                $this->result = $arg1 / $arg2;
                $this->result_private = $this->result;
                $this->action_txt = '/';
                break;
            default:
                echo "Wrong action!!!";
        }
    }

    public function getPrivateResult()
    {
        return $this->result_private;
    }
}
if (!empty($params["arg1"]) && !empty($params["arg2"]) && !empty($params["math_action"])) {
//    var_dump($params);


    $argument1 = $params["arg1"];
    $argument2 = $params["arg2"];
    $math_action = $params["math_action"];


    $doAction = new Calculator($argument1, $argument2, $math_action);
    echo $doAction->arg1,$doAction->action_txt,$doAction->arg2,"=",$doAction->result, " private_result-> ", $doAction->getPrivateResult(), "<br>";
}

?>

</body>
</html>















<!--//$doAction = new Calculator($argument1, $argument2, 2);-->
<!--//echo $doAction->arg1,$doAction->action_txt,$doAction->arg2,"=",$doAction->result, " private_result-> ", $doAction->getPrivateResult(), "<br>";-->
<!--//-->
<!--//$doAction = new Calculator($argument1, $argument2, 3);-->
<!--//echo $doAction->arg1,$doAction->action_txt,$doAction->arg2,"=",$doAction->result, " private_result-> ", $doAction->getPrivateResult(), "<br>";-->
<!--//-->
<!--//$doAction = new Calculator($argument1, $argument2, 4);-->
<!--//echo $doAction->arg1,$doAction->action_txt,$doAction->arg2,"=",$doAction->result, " private_result-> ", $doAction->getPrivateResult(), "<br>";-->
<!--//-->
<!--//$doAction = new Calculator(44, 3, 5);-->

