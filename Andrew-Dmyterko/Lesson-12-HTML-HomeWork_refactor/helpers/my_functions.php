<?php
/**
 * Основные функции сайта
 * User: sky_fox
 * Date: 08.11.18
 * Time: 18:46
 */

//подключаем глобальные параметры
require_once './config/config.php';

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
            if (basename(($_SERVER['SCRIPT_FILENAME']))!="index.php") {
                header("Location:index.php");
            }
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

// возвращаем массив раскодированныех JSON данных с $fileName
function getSourceData($fileName) {
    $sourceContent = getSourceContent($fileName);
    $sourceData = json_decode($sourceContent, true);
    return $sourceData;
}

// читаем файл $fileName
function getSourceContent($fileName) {
    $sourceContent = file_get_contents($fileName);
    return $sourceContent;
}

// получаем заголовок, берем шаблон header и меняем на данные из $data
function getHeader($data, $session_data) {
    $fileName = TEMPLATE_HEADER_PATH;
    $header = getSourceContent($fileName);
    $header = str_replace('{{title}}', $data['title'], $header);
    $header = str_replace('{{page_icon}}', $data['page_icon'], $header);

    $navigation = getNavigation($session_data);
    $header = str_replace('{{navigation}}', $navigation, $header);
    return $header;
}

// получаем приветствие, берем шаблон welcome и меняем на данные из $data
function getWelcomeContent($data) {
    $welcomeFileName = INDEX_TEMPLATE_WELCOME_PATH;
    $welcomeTemplate = getSourceContent($welcomeFileName);
    $welcomeTemplate = str_replace('{{welcome1}}', $data['welcome1'], $welcomeTemplate);
    $welcomeTemplate = str_replace('{{description1}}', $data['description1'], $welcomeTemplate);
    $welcomeTemplate = str_replace('{{additional1}}', $data['additional1'], $welcomeTemplate);
    $welcomeTemplate = str_replace('{{link1}}', $data['link1'], $welcomeTemplate);
    $welcomeTemplate = str_replace('{{link_name1}}', $data['link_name1'], $welcomeTemplate);
    $welcomeTemplate = str_replace('{{welcome2}}', $data['welcome2'], $welcomeTemplate);
    $welcomeTemplate = str_replace('{{description2}}', $data['description2'], $welcomeTemplate);
    $welcomeTemplate = str_replace('{{additional2}}', $data['additional2'], $welcomeTemplate);
    $welcomeTemplate = str_replace('{{link2}}', $data['link2'], $welcomeTemplate);
    $welcomeTemplate = str_replace('{{link_name2}}', $data['link_name2'], $welcomeTemplate);
//    $pageContent = $data['page_content'];
    return $welcomeTemplate;
}

// получаем основной контент, берем шаблон main.html,main1.html и меняем на данные из $data
function getMainContent($data) {
    $mainFileName = INDEX_TEMPLATE_MAIN_PATH;
    $contentFileName = INDEX_TEMPLATE_CONTENT_PATH;
    $contentTemplate = "";
    $mainTemplate = getSourceContent($mainFileName);

    if (!empty($data)){
        foreach ($data as $picture){
            $contentTemplate = $contentTemplate.getSourceContent($contentFileName);
            $contentTemplate = str_replace('{{src}}', $picture['src'], $contentTemplate);
            $contentTemplate = str_replace('{{name}}', $picture['name'], $contentTemplate);
            $contentTemplate = str_replace('{{text}}', $picture['text'], $contentTemplate);
            $contentTemplate = str_replace('{{url}}', $picture['url'], $contentTemplate);
        }
    }

    $mainTemplate = str_replace('{{main1}}', $contentTemplate, $mainTemplate);

    return $mainTemplate;
}

// получаем форму логина в зависимости от того есть сессия или нет
function getLoginForm ($sessionInfo) {
    $loginTemplate = "";
    if ($sessionInfo['user_id']>=0 ) {
        // если есть сессия показываем страницу существующего пользователя
        $fileName = INDEX_TEMPLATE_EXISTS_USER_FORM_PATH;
        $loginTemplate = getSourceContent($fileName);
        $loginTemplate = str_replace('{{user}}', $sessionInfo['user'], $loginTemplate);
    }
    else {
        // если сессия отсутствует показываем форму логина
        $fileName = INDEX_TEMPLATE_LOGIN_FORM_PATH;
        $loginTemplate = getSourceContent($fileName);
    }
    return $loginTemplate;
}

// получаем футер, берем шаблон footer и меняем на данные из $data
function getFooter($data) {
    $footerFileName = TEMPLATE_FOOTER_PATH;
    $footer = getSourceContent($footerFileName);
    $footer = str_replace('{{heading}}', $data['footer']['heading'], $footer);
    return $footer;
}

// получаем шаблон alert
function getAlert ($alertMessage) {
    $fileAlertTemplate = ALERT_TEMPLATE_PATH;
    $alertTemplate = getSourceContent($fileAlertTemplate);
    $alertTemplate = str_replace('{{alert_message}}', $alertMessage, $alertTemplate);
    return $alertTemplate;
}

// получаем шаблон button
function getButton ($buttonTemplate) {
    $fileAlertTemplate = $buttonTemplate;
    $buttonTemplate = getSourceContent($fileAlertTemplate);
    return $buttonTemplate;
}

// получаем шаблон action
function getActionForm ($user_id) {

    global $users;
    global $config;

    $fileActionTemplate = ACTION_TEMPLATE_PATH;
    $actionTemplate = getSourceContent($fileActionTemplate);
    $actionTemplate = str_replace('{{name}}', $users[$user_id]['name'], $actionTemplate);
    $actionTemplate = str_replace('{{password}}', $users[$user_id]['password'], $actionTemplate);
    $actionTemplate = str_replace('{{md5}}', md5($users[$user_id]['password']), $actionTemplate);
    $actionTemplate = str_replace('{{user}}', $users[$user_id]['user'], $actionTemplate);
    $actionTemplate = str_replace('{{PARSER}}', $config['PARSER'], $actionTemplate);
    $actionTemplate = str_replace('{{SESSION_TIME}}', $config['SESSION_TIME'], $actionTemplate);
    $actionTemplate = str_replace('{{PARSER_JSON_checked}}', (($config['PARSER']==="JSON") ? "checked" : ""), $actionTemplate);
    $actionTemplate = str_replace('{{PARSER_MY_checked}}', (($config['PARSER']==="MY") ? "checked" : ""), $actionTemplate);

    return $actionTemplate;
}

// получаем шаблон add_changes
function getAddChangesForm ($number_pic) {

    global $pictures;
    global $config;

    $fileActionTemplate = ADMIN_ADD_CHANGES_TEMPLATE_PATH;
    $actionTemplate = getSourceContent($fileActionTemplate);
    $actionTemplate = str_replace('{{src}}', $pictures[$number_pic]['src'], $actionTemplate);
    $actionTemplate = str_replace('{{name}}', $pictures[$number_pic]['name'], $actionTemplate);
    $actionTemplate = str_replace('{{text}}', $pictures[$number_pic]['text'], $actionTemplate);
    $actionTemplate = str_replace('{{url}}', $pictures[$number_pic]['url'], $actionTemplate);
    $actionTemplate = str_replace('{{number_pic}}', $number_pic, $actionTemplate);

    return $actionTemplate;
}

// получаем основной контент, берем шаблон main.html,main1.html и меняем на данные из $data
function getForChangesContent($data) {
    $mainFileName = ADMIN_VIEW_FOR_CHANGES_TEMPLATE_PATH;
    $contentFileName = ADMIN_VIEW_FOR_CHANGES_CONTENT_TEMPLATE_PATH;
    $contentTemplate = "";
    $forChangesTemplate = getSourceContent($mainFileName);

    if (!empty($data)){
        foreach ($data as $index => $picture){
            $contentTemplate = $contentTemplate.getSourceContent($contentFileName);
            $contentTemplate = str_replace('{{src}}', $picture['src'], $contentTemplate);
            $contentTemplate = str_replace('{{name}}', $picture['name'], $contentTemplate);
            $contentTemplate = str_replace('{{text}}', $picture['text'], $contentTemplate);
            $contentTemplate = str_replace('{{url}}', $picture['url'], $contentTemplate);
            $contentTemplate = str_replace('{{index}}', $index, $contentTemplate);
        }
    }

    $forChangesTemplate = str_replace('{{view_for_changes1}}', $contentTemplate, $forChangesTemplate);

    return $forChangesTemplate;
}

// получаем шаблон add_pic_attr
function getAddPicAttr($data) {
    $fileName = ADMIN_ADD_PIC_ATTR_TEMPLATE_PATH;
    $addPicAttrTemplate = getSourceContent($fileName);
    $addPicAttrTemplate = str_replace('{{name}}', "weapon_img/" . $data['userfile']['name'], $addPicAttrTemplate);

    return $addPicAttrTemplate;
}

function getNavigation($session_data) {
    $navigationFileName = './page_source/navigation.json';
    $navigationData = getSourceData($navigationFileName);
    if (empty($navigationData)) {
        return '';
    }

    $navigationTemplateName = './templates/header/navigation.html';
    $navigationTemplate = getSourceContent($navigationTemplateName);
    $navigationTemplate = str_replace('{{logo_title}}', $navigationData['logo_title'], $navigationTemplate);
    $userEmail = ($session_data['user_id'] !== -1) ? $session_data['user_name'] : '';
    $navigationTemplate = str_replace('{{user_email}}', $userEmail, $navigationTemplate);

    $linksFileName = './templates/header/links.html';
    $linksTemplateHtml = getSourceContent($linksFileName);
    $linksHtml = '';
    $links = $navigationData['links'];
    $isLoggedIn = ($session_data['user_id'] === -1) ? false : true;
    foreach ($links as $key => $link) {
        if ($isLoggedIn && $key === 'link_3') {
            continue;
        }

        if (!$isLoggedIn && $key === 'link_4') {
            continue;
        }

        if (!$isLoggedIn && $key === 'link_5') {
            continue;
        }

        if (!$isLoggedIn && $key === 'link_2') {
            continue;
        }

        $linksTemplate = $linksTemplateHtml;
        $linksTemplate = str_replace('{{name}}', $link['name'], $linksTemplate);
        $linksTemplate = str_replace('{{href}}', $link['href'], $linksTemplate);
        $linksHtml .= $linksTemplate;
    }

    $navigationTemplate = str_replace('{{links}}', $linksHtml, $navigationTemplate);
    $navigationTemplate = str_replace('{{user_email}}', $userEmail, $navigationTemplate);

    return $navigationTemplate;
}

// разлогиниваемся удаляем сессию
function logout() {

    getFormConfig();

    $file = USERS_SESSION_PATH;
//    $exists = ['user_id' => -1];

    global $sessions;
    global $config;

    $sessions=json_decode(file_get_contents($file), true);

    // проверяем наличие зарегистрированной сессии
    foreach ($sessions as $key => $val) {

        // находим сессии и unset
        if ($val['user_session_id'] == session_id()) {
            unset($sessions[$key]);
            sessionWrite();
            // не делать редирект сам на себя
            if (basename(($_SERVER['SCRIPT_FILENAME']))!="index.php") {
                header("Location:index.php");
            }
        }
    }
    return ;
}

// получаем слайдер
function getSlider() {

    $photoDir = PHOTO_PATH;
    $mainFileName = PHOTO_TEMPLATE_PATH;
    $contentFileName = PHOTO_ITEM_TEMPLATE_PATH;
    $contentTemplate = "";
    $picTemplate = getSourceContent($mainFileName);

    $files = scandir($photoDir);

    $i=0;
    foreach ($files as $index => $file) {

        if (!is_dir($file)) {
            $contentTemplate = $contentTemplate . getSourceContent($contentFileName);
            $contentTemplate = str_replace('{{active}}', ($i==0) ? "active" : "", $contentTemplate);
            $contentTemplate = str_replace('{{src_pic}}', $photoDir.$file, $contentTemplate);
            $contentTemplate = str_replace('{{alt_pic}}', $photoDir.$file, $contentTemplate);
            $i++;
        }
    }


    $picTemplate = str_replace('{{pic_item}}', $contentTemplate, $picTemplate);

    return $picTemplate;

}