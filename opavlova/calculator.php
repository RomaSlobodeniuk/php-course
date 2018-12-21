<?php
$result = "";
class calculator
{
    var $a;
    var $b;

    function checkoperation($operator)
    {
        switch($operator)
        {
            case '+':
            return $this->a + $this->b;
            break;

            case '-':
            return $this->a - $this->b;
            break;

            case '*':
            return $this->a * $this->b;
            break;

            case '/':
            return $this->a / $this->b;
            break;

            default:
            return "Sorry No command found";
        }
    }
    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkoperation($c);
    }
}

$cal = new calculator();
if(isset($_POST['submit']))
{
    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}
?>

<form method="post">
<table align="center">

    <tr>
        <td>Enter 1st Number</td>
        <td><input type="text" name="n1"></td>
    </tr>

    <tr>
        <td>Enter 2nd Number</td>
        <td><input type="text" name="n2"></td>
    </tr>

    <tr>
        <td>Select Operation</td>
        <td><select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select></td>
    </tr>

    <tr>

    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="                Calculate               "></td>
    <tr>
        <td><strong> Result = <?php echo $result; ?><strong></td>
    </tr>