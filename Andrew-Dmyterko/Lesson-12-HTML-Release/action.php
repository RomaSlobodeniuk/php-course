<?php
/**
 * Отрабатывае по кнопке submit
 * User: sky_fox
 * Date: 01.11.18
 * Time: 9:08
 */

require_once './helpers/my_functions.php';

// проверяем наличие сессии и обновляем ее
$es = exists_session();

// база данных для action.php
$fileName = ACTION_SOURCE_PATH;
$sourceData = getSourceData($fileName);

$params = $_POST;
if (!empty($params)) {
//    print_r($params);
//    print_r($_FILES);
}

// проверяем логин через facebook или нет
if (!empty($_GET)) {
//    var_dump($_GET);
//    if (!$_GET['code']) {
//        exit('error code!!!!');
//
//    }
    $token = json_decode(file_get_contents("https://graph.facebook.com/v3.2/oauth/access_token?client_id=".ID."&redirect_uri=".URL."&client_secret=".SECRET."&code=".$_GET['code'].""), true);

    if (!$token) {
        exit('error token!!!!');

    }

    $data = json_decode(file_get_contents("https://graph.facebook.com/v3.2/me?client_id=".ID."&redirect_uri=".URL."&client_secret=".SECRET."&code=".$_GET['code']."&access_token=".$token['access_token']."&fields=id,name,email,gender,location,friends"), true);

    if (!$data) {
        exit('error data!!!!');

    }
//    echo "<br><br><br><pre>";
//    var_dump($token);
//    echo "</pre><br>";
//    var_dump($data);
    if (isset($token['access_token']) && isset($token['token_type'])
        && isset($token['expires_in']) && isset($data['id'])) {
        $user_id = "0.".$data['id'];
        $user_name = isset($data['name']) ? $data['name'] : "facebook_user" ;
        $user = isset($data['email']) ? $data['email'] : "facebook@" ;
        new_session($user_id, $user_name, $user);
    }
}

// проверяем наличие сессии и обновляем ее
$es = exists_session();
echo "<br>";
//var_dump($es);

// выводим заголовок
$header = getHeader($sourceData, $es);
echo $header;

// База данных пользователей
getUsersArray($es);   //var_dump($users);

//<!-- если нажата кнопка меняем парсер -->
if ($es['user_id']>=0 && !empty($params['Parser'])){
    changeParser($params['Parser'], $params['session_time']);
}

if ($es['user_id']=-1 && !empty($params) && empty($params["active_session"])) {
    $error=0;
    if ($params['passwd']!==$params['passwd_confirm']) {
        $error++;
        echo getAlert('Пароли не совпадают!!!!');
    }

    if (empty($params['email'])) {
        $error++;
        echo getAlert('ВВедите E-Mail!!!!');
    }

    if ((pass($params['email'], $params['passwd'], $users))>=0 && $error==0) {
                new_session(pass($params['email'], $params['passwd'], $users), $params['email'], $users[pass($params['email'], $params['passwd'], $users)]['name']);

        $user_id = pass($params['email'], $params['passwd'], $users);

        // проверяем наличие сессии и обновляем ее
        $es = exists_session();
        // выводим заголовок
        $header = getHeader($sourceData, $es);
        echo $header;

        $action_main_form = getActionForm($user_id);
        echo $action_main_form;

    }
    elseif($error==0) {
        $error++;
        echo getAlert('Неправильный логин пароль!!!');
    }

    if ($error) {
        echo getButton(TEMPLATE_BUTTON_RETURN);
    }
}

if ($es['user_id']>=0 && !empty($params) && (isset($params["active_session"]))) {
    $es = exists_session();

    $action_main_form_after_session = getActionForm($es['user_id']);
    echo $action_main_form_after_session;
}

if ($es['user_id']>=0 && empty($params)) {
    $es = exists_session();

    $action_main_form_after_session = getActionForm($es['user_id']);
    echo $action_main_form_after_session;
}

// выводим футер
$footer = getFooter($sourceData);
echo $footer;
