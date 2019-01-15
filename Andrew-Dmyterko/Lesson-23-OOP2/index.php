<?php
/**
 * Использование DatabaseInt
 * User: sky_fox
 * Date: 28.12.18
 * Time: 20:06
 */

use Models\DatabaseInt;

spl_autoload_register(function ($class) {
    echo $class."<br>";
    $file_name = str_replace('\\', '/', $class) . '.php';
    echo $file_name."<br>";
    if (file_exists($file_name)) {
        require_once($file_name);
    } else {
        echo "file does not exist!";
    }
});


$filds_for_select = "";
$param_for_where_select = "code=6666 and date=\"1775-02-02\" and sum=666.66";
//$param_for_where_select = "sum=555.55 and code=111";
//$array = true;
$array = 3;
$result = DatabaseInt::select("buy", $filds_for_select, $param_for_where_select, $array, $error);
if ($result) {
    echo "<br>ok<br>";
    if ($array!==3) {echo "<pre>";var_dump($result);echo "</pre>";}
} else var_dump($error);


//echo "insert \"109, \"1775-02-02\", 666.66, 6666\"<br>";
$param_for_insert = "109,1775-02-02,666.66,6666";
$result = DatabaseInt::insert("buy", $param_for_insert, $error);
if ($result) {
    echo "<br>ok<br>";
    if ($array!==3) {echo "<pre>";var_dump($result);echo "</pre>";}
} else var_dump($error);



$filds_for_select = "";
$param_for_where_select = "code=6666 and date=\"1775-02-02\" and sum=666.66";
$array = 3;
$result = DatabaseInt::select("buy", $filds_for_select, $param_for_where_select, $array, $error);
if ($result) {
    echo "<br>ok<br>";
    if ($array!==3) {echo "<pre>";var_dump($result);echo "</pre>";}
} else var_dump($error);


//echo "<br>update \"code=6667, date=\"1775-03-03\"\"<br>";
$param_for_set_update = "code=6667, date=\"1775-03-03\"";
$param_for_where_update = "code=6666 and date=\"1775-02-02\"";
$result = DatabaseInt::update("buy", $param_for_set_update, $param_for_where_update,$error);
if ($result) {
    echo "<br>ok<br>";
    if ($array!==3) {echo "<pre>";var_dump($result);echo "</pre>";}
} else var_dump($error);


$filds_for_select = "";
$param_for_where_select = "code=6667 and date=\"1775-03-03\" and sum=666.66";
$array = 3;
$result = DatabaseInt::select("buy", $filds_for_select, $param_for_where_select, $array, $error);
if ($result) {
    echo "<br>ok<br>";
    if ($array!==3) {echo "<pre>";var_dump($result);echo "</pre>";}
} else var_dump($error);


//echo "<br>delete \"code=6667 and date=\"1775-03-03 \"<br>";
$param_for_where_delete= "code=6667 and date=\"1775-03-03\"";
$result = DatabaseInt::delete("buy", $param_for_where_delete,$error);
if ($result) {
    echo "<br>ok<br>";
    if ($array!==3) {echo "<pre>";var_dump($result);echo "</pre>";}
} else var_dump($error);


$filds_for_select = "";
$param_for_where_select = "code=6667 and date=\"1775-03-03\" and sum=666.66";
$array = 3;
$result = DatabaseInt::select("buy", $filds_for_select, $param_for_where_select, $array, $error);
if ($result) {
    echo "<br>ok<br>";
    if ($array!==3) {echo "<pre>";var_dump($result);echo "</pre>";}
} else var_dump($error);



$filds_for_select = "";
$param_for_where_select = "";
$array = 3;
$result = DatabaseInt::select("buy", $filds_for_select, $param_for_where_select, $array, $error);
if ($result) {
    echo "<br>ok<br>";
    if ($array!==3) {echo "<pre>";var_dump($result);echo "</pre>";}
} else var_dump($error);



//$filds_for_select = "";
$filds_for_select = "login,id";
$param_for_where_select = "";
$array = 3;
$result = DatabaseInt::select("customers", $filds_for_select, $param_for_where_select, $array, $error);
if ($result) {
    echo "<br>ok<br>";
    if ($array!==3) {echo "<pre>";var_dump($result);echo "</pre>";}
} else var_dump($error);



$filds_for_select = "";
//$filds_for_select = "lofin, description, password, a.id, sum";
$param_for_where_select = "a.id = b.id";
$array = 3;
$result = DatabaseInt::select("customers a, buy b", $filds_for_select, $param_for_where_select, $array, $error);
if ($result) {
    echo "<br>ok<br>";
    if ($array!==3) {echo "<pre>";var_dump($result);echo "</pre>";}
} else var_dump($error);


//$filds_for_select = "";
$filds_for_select = "code, login, description, password, a.id, sum";
$param_for_where_select = "a.id = b.id and a.id=1";
$array = 3;
$result = DatabaseInt::select("customers a, buy b", $filds_for_select, $param_for_where_select, $array, $error);
if ($result) {
    echo "<br>ok<br>";
    if ($array!==3) {echo "<pre>";var_dump($result);echo "</pre>";}
} else var_dump($error);
