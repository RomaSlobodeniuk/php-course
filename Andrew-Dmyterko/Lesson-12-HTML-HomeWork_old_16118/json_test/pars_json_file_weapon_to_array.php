<pre>
<?php


// парсим array_of_weapon.json в массив $pictures



$file_json = './array_of_weapon.json';

$json_str = file_get_contents($file_json);

$pictures = json_decode($json_str,true);

print_r($pictures);



//$file = './array_of_weapon.txt';
//
////
//require_once './pars_file_weapon_to_array.php';
//
////распарсили файл и кинули в массив $pictures
//print_r($pictures);

//// пробуем json
//$json_string =json_encode($pictures, JSON_PRETTY_PRINT);
//echo $json_string;
//
//$file_json = './array_of_weapon.json';
//
//$str = file_put_contents($file_json,$json_string);
//
//echo $str;
?>


</pre>