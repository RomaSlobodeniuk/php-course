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

if ($es['user_id'] !== -1) {
    // выводим заголовок
    $header = getHeader($sourceData, $es);
    echo $header;
}

$params = $_POST;
if (!empty($params)) {
//    print_r($params);
//    print_r($_FILES);
}

// База данных пользователей
getUsersArray();   //var_dump($users);

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
