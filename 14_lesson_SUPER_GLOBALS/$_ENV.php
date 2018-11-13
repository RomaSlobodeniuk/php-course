<?php

require_once '../helpers/functions.php';

$_ENV["USER"] = 'CURRENT USER';

debug('Мое имя пользователя: ' . $_ENV["USER"] . '!');
