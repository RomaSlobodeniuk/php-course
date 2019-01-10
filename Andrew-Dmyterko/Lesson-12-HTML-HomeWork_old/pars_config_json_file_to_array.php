
<?php


// парсим array_of_weapon.json в массив $pictures



$file_json = 'config/config.json';

$json_str = file_get_contents($file_json);

$config = json_decode($json_str,true);

//print_r($config);

?>