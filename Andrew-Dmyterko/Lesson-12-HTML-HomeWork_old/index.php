<?php
/**
 * Создаем сайт используя Bootstrap и вставки PHP
 *
 */

require_once '../helpers/functions.php';
// подключаем файл конфигурации config/config.json
require_once './pars_config_json_file_to_array.php';
// подключаем парсер в зависимости от конфигурации
require_once ($config['PARSER']=="MY") ? './pars_file_weapon_to_array.php' : './pars_json_weapon_to_array.php' ;



//require_once './pars_file_weapon_to_array.php';


require_once './header.php';
require_once './main.php';
require_once './footer.php';


?>
