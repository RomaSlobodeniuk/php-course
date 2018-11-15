<?php
// глобальная переменная для сохранения данных форм
define('FORM_CONFIG'                 , 'config/config.json');
// путь к массиву картинок моего парсера
define('PIC_ARRAY_TXT'               , 'database/array_of_weapon.txt');
// путь к массиву пользователей моего парсера
define('USERS_ARRAY_TXT'             , 'database/array_of_users.txt');
// путь к массиву картинок JSON парсера
define('PIC_ARRAY_JSON'              , './database/array_of_weapon.json');
// путь к массиву пользователей JSON парсера
define('USERS_ARRAY_JSON'            , './database/array_of_users.json');
// путь к каталогу картинок
define('USERS_PIC_PATH'              , '/var/www/html/MyPHP/Lesson-12-HTML-HomeWork_refactor/weapon_img/');
// путь к каталогу картинок
define('USERS_SESSION_PATH'          , 'database/session.json');
// путь к файлу шаблона header
define('TEMPLATE_HEADER_PATH'        , './templates/header/header.html');

// путь к файлу шаблона footer
define('TEMPLATE_FOOTER_PATH'        , './templates/footer/footer.html');
// путь к файлу шаблона alert
define('ALERT_TEMPLATE_PATH'        , './templates/alert/alert.html');

// путь к файлу шаблона кнопки назад
define('TEMPLATE_BUTTON_RETURN'                 , './templates/button/return.html');

// путь к файлу данных для index.php
define('ACTION_SOURCE_PATH'                     , './page_source/action.json');

// путь к файлу шаблона action
define('ACTION_TEMPLATE_PATH'                   , './templates/action/action_main_form.html');


// путь к файлу данных для index.php
define('INDEX_SOURCE_PATH'                      , './page_source/index.json');
// путь к файлу шаблона welcome для index.php
define('INDEX_TEMPLATE_WELCOME_PATH'            , './templates/index/welcome.html');
// путь к файлу шаблона main для index.php
define('INDEX_TEMPLATE_MAIN_PATH'               , './templates/index/main.html');
// путь к файлу шаблона контента main для index.php
define('INDEX_TEMPLATE_CONTENT_PATH'            , './templates/index/main1.html');
// путь к файлу шаблона контента login формы для index.php
define('INDEX_TEMPLATE_LOGIN_FORM_PATH'         , './templates/index/login_form.html');
// путь к файлу шаблона контента exists_user формы для index.php
define('INDEX_TEMPLATE_EXISTS_USER_FORM_PATH'   , './templates/index/exists_user_form.html');





//define("PARSER", "JSON");
//echo PARSER;
//$eee =  ((PARSER === "MY") ? 'checked' : "");