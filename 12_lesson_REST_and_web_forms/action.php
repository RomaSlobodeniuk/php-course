<?php

require_once '../helpers/functions.php';

define('ROOT_PATH_LESSON_12', 'php_course/12_lesson_REST_and_web_forms/');

if (!empty($_GET)) {
    validateData($_GET);
}

if (!empty($_POST)) {
    validateData($_POST);
}

function validateData($params) {
    if (empty($params['age']) || (int)$params['age'] < 0) {
        header("Location: /" . ROOT_PATH_LESSON_12 . $params['redirect']);
    }

    $age = (int)$params['age'];
    $name = trim($params['name']);
    debug("Ваше Ім'я: '$name'");
    if ($age > 0 && $age < 18) {
        debug("Ваш вік: $age - ви неповнолітній");
    } elseif ($age >= 18 && $age < 60) {
        debug("Ваш вік: $age - ви повнолітній");
    } else {
        debug("Ваш вік: $age - вітаємо, ви дожили до пенсії!");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web-forms</title>
</head>
<body>
<div>
    <a href="<?php echo 'index.php'?>">Повернутися до форми</a>
</div>
</body>
</html>
