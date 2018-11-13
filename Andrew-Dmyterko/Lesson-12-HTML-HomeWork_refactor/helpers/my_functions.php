<?php
/**
 * Основные функции сайта
 * User: sky_fox
 * Date: 08.11.18
 * Time: 18:46
 */

//подключаем глобальные параметры
require_once 'config/config.php';

session_start();

$config = [];   // массив сохраненных данных форм
$pictures = []; // массив картинок
$users = [];    // массив пользователей
$sessions =[];   // массив пользовательских сессий

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
function changeParser($parser, $session_time) {
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
    $config['SESSION_TIME'] = $session_time;

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

// создаем новую сессию
function new_session($user_id, $user_name, $user) {
    $file = USERS_SESSION_PATH;
    global $sessions;

    $sessions=json_decode(file_get_contents($file), true);

    $_SESSION['user_session_id'] = session_id();
    $_SESSION['user_id'] = $user_id;
    $_SESSION['user_name'] = $user_name;
    $_SESSION['user'] = $user;
    $_SESSION['time'] = time();

    array_push($sessions,$_SESSION);
    file_put_contents($file,json_encode($sessions, JSON_PRETTY_PRINT));
}

// проверяем сессию
function exists_session() {

    getFormConfig();

    $file = USERS_SESSION_PATH;
    $exists = ['user_id' => -1];

    global $sessions;
    global $config;

    $sessions=json_decode(file_get_contents($file), true);

    // проверяем наличие зарегистрированной сессии
    foreach ($sessions as $key => $val) {
        // проверяем наличие сессии и чтоб сессия была не просрочена
        if ($val['user_session_id'] == session_id() && ((time() - $val['time'])<= $config["SESSION_TIME"])) {
            // обновляем сессию пишем новое время
            $sessions[$key]['time'] = time();
            // выбираем параметры по сессии - имя, email, id
            $exists = [
                'user_id' => $val['user_id'],
                'user_name' => $val['user_name'],
                'user' => $val['user']
            ];
//            print_r($sessions);
            sessionWrite();
        }
        // проверяем наличие сессии и если сессия просрочена unset
        if ($val['user_session_id'] == session_id() && ((time() - $val['time']) > $config["SESSION_TIME"])) {
            unset($sessions[$key]);
            sessionWrite();
            // не делать редирект сам на себя
            if (basename(($_SERVER['SCRIPT_FILENAME']))<>"index.php") header("Location:index.php");
        }
    }
    return $exists;
}

// пишем массив $session в JSON файл выбор парсера не учитываем используем только JSON
function sessionWrite() {
    $file = USERS_SESSION_PATH;
    global $sessions;
    $sessions = array_values($sessions);
    file_put_contents($file,json_encode($sessions, JSON_PRETTY_PRINT));
}