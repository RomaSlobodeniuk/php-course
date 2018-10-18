<?php


/**
 * '/pattern/i'
 */

$greeting = $_GET['email'];
$pattern = '/^([a-zA-Z0-9\._-]{3,40}[@]{1}[a-zA-Z0-9\._-]{3,10})$/i';
preg_match($pattern, $greeting, $matches);
if(preg_match($pattern, $greeting, $matches)){

    var_dump([
        'input_string' => $greeting,
        'pattern' => $pattern,
        'matches' => $matches
    ]);
    echo "Ваш email: <srtong style='color: blue; font-size: 25px;'>{$matches[1]}</srtong>";
}
else if(!preg_match($pattern, $greeting, $matches)){
    echo "<srtong style='color: red; font-size: 25px;'>Некоректный email: {$greeting}</srtong>";
}
?>


<form action="reg-exp.php" method="get">
    <p>введите email: <input type="text" name="email"></p>
    <p><input type="submit"></p>
    
</form>
