<?php
/**
 * Основные функции сайта
 * User: sky_fox
 * Date: 08.11.18
 * Time: 18:46
 */

//подключаем глобальные параметры
require_once 'config/config.php';

$config = [];   // массив сохраненных данных форм
$pictures = []; // массив картинок
$users = [];    // массив пользователей

// парсим json содержимое FORM_CONFIG в массив $config
function getFormConfig() {
    global $config;                                             // возможно нужно будет чистить
    $file_json = FORM_CONFIG;
    $json_str = file_get_contents($file_json);
    $config   = json_decode($json_str,true);
}

// парсим txt содержимое PIC_ARRAY_TXT в массив $pictures (МОЙ парсер)
function parsTxtFilePicToArray() {
    $file = PIC_ARRAY_TXT;
    $str = file_get_contents($file);
    $array_text = explode('-------------------------------------------------------------',$str);
    $array_text = array_values(array_diff($array_text, array('')));
    //$array_text = array_values($array_text);
    //print_r($array_text);
    global $pictures;                                           // возможно нужно будет чистить
    //echo "$str <br><hr>";
    $i=0;
    foreach ($array_text as $data) {
        preg_match_all('/^\s*\'(.+)\'\s+=>\s+\'(.+)\'/im', $data, $matches);
    //    print_r($matches);
    //    echo $matches[1][0], "=>", $matches[2][0], "<br>";
    //    foreach ($matches as $i ) {
        for ($j = 0; $j<count($matches[0]); $j++) {
            $pictures[$i][$matches[1][$j]] =   $matches[2][$j];
        }
        $i++;
    }
}

// парсим JSON содержимое PIC_ARRAY_JSON в массив $pictures (JSON парсер)
function parsJsonFilePicToArray() {
    $file_json = PIC_ARRAY_JSON;
    $json_str = file_get_contents($file_json);
    global $pictures;                                           // возможно нужно будет чистить
    $pictures = json_decode($json_str,true);
}

// парсим txt содержимое USER_ARRAY_TXT в массив $users (МОЙ парсер)
function parsTxtFileUsersToArray() {
    $file = USERS_ARRAY_TXT;
    $str = file_get_contents($file);
    $array_text = explode('-------------------------------------------------------------', $str);
    $array_text = array_values(array_diff($array_text, array('')));
    //$array_text = array_values($array_text);
    //print_r($array_text);
    global $users;
    //echo "$str <br><hr>";
    $i = 0;
    foreach ($array_text as $data) {
        preg_match_all('/^\s*\'(.+)\'\s+=>\s+\'(.+)\'/im', $data, $matches);
    //    print_r($matches);
    //    echo $matches[1][0], "=>", $matches[2][0], "<br>";
    //    foreach ($matches as $i ) {
        for ($j = 0; $j < count($matches[0]); $j++) {
            $users[$i][$matches[1][$j]] = $matches[2][$j];
        }
        $i++;
    }
    //print_r($pictures);

    //preg_match_all('/\'(name|src|text|url)\'\s+=>\s+\'(.+)\'/i', $str, $matches);
    ////    [\w\.]{1,20}+@[\w]+\.?[\w]+\.[\w]{1,4}+)
    //
    //
    //print_r($matches);
    //
    //
    //
    //foreach ($matches as $dann) {
    //    echo "$dann[1] => $dann[2]<br>";
    //
    //
    // }
    //
    //
}

// парсим JSON содержимое USER_ARRAY_JSON в массив $users (JSON парсер)
function parsJsonFileUsersToArray() {
    $file_json = USERS_ARRAY_JSON;
    $json_str = file_get_contents($file_json);
    global $users;                                           // возможно нужно будет чистить
    $users = json_decode($json_str,true);
}

// наполняем массив $users из файлов в зависимости от выбранного парсера
function getUsersArray() {
    getFormConfig();
    global $config;
    if ($config['PARSER'] == "MY") {
        parsTxtFileUsersToArray();
    } elseif ($config['PARSER'] == "JSON") {
        parsJsonFileUsersToArray();
    }
}

// наполняем массив $pictures из файлов в зависимости от выбранного парсера
function getPicArray() {
    getFormConfig();
    global $config;
    if ($config['PARSER'] == "MY") {
        parsTxtFilePicToArray();
    } elseif ($config['PARSER'] == "JSON") {
        parsJsonFilePicToArray();
    }
}

// изменяем используемый парсер (значение передается из формы)
function changeParser($parser) {
    global $config;
    switch ($parser) {
        case "JSON" :
            $config['PARSER'] = "JSON";
            break;
        case "MY"   :
            $config['PARSER'] = "MY";
            break;
        default:
            header("Location:index.php");
    }

    file_put_contents(FORM_CONFIG,json_encode($config, JSON_PRETTY_PRINT));
    header("Location:index.php");
}

// проверка введенного логина пароля c базой $users
function pass($user_name, $passwd, $basa) {
    $good = -1;

    foreach ($basa as $kk => $key) {
        if ($user_name===$key['user'] && $passwd===$key['password']) {
//            echo $key['password'], $key['user'],$kk;
            $good = "$kk";

        }
    }
    return $good;
}

// записываем массив $pictures в txt содержимое PIC_ARRAY_TXT (МОЙ парсер)
function writePicArrayToTxtFile() {
    $file = PIC_ARRAY_TXT;
    global $pictures;
    $text_array = "";
    $text_array .= "-------------------------------------------------------------\n";
    foreach ($pictures as $item) {
        foreach ($item as $key => $value) {
            $text_array .= "'" . $key . "'" . " => " . "'" . $value . "'" . "\n";
        }
        $text_array .= "-------------------------------------------------------------\n";
    }
//        $array_text = implode("-------------------------------------------------------------",$pictures);
//        echo $text_array;
    $str = file_put_contents($file, $text_array);
}

// записываем массив $pictures в JSON содержимое PIC_ARRAY_JSON (JSON парсер)
function writePicArrayToJsonFile() {
    $file_json = PIC_ARRAY_JSON;
    global $pictures;
    file_put_contents($file_json,json_encode($pictures, JSON_PRETTY_PRINT));
}

// пишем массив $pictures в файлов в зависимости от выбранного парсера
function writePicArray() {
    getFormConfig();
    global $config;
    if ($config['PARSER'] == "MY") {
        writePicArrayToTxtFile();
    } elseif ($config['PARSER'] == "JSON") {
        writePicArrayToJsonFile();
    }
}