<?php

use Factories\TeddyToysFactory;
use Factories\WoodenToysFactory;

spl_autoload_register(function ($class) {
    $file_name = str_replace('\\', '/', $class) . '.php';
    if (file_exists($file_name)) {
        require_once($file_name);
    } else {
        echo "file does not exist!";
    }
});


/**
 * Спочатку створимо «дерев'яну» фабрику
 */
$toyFactory = new WoodenToysFactory();
$bear = $toyFactory->getBear();
$cat = $toyFactory->getCat();
echo '<hr>';
echo sprintf("I've got %s and %s", $bear->name, $cat->name);
echo '<hr>';
/**
 * Вивід на консоль буде: [I've got Wooden Bear and Wooden Cat]
 */

/**
 * А тепер створимо «плюшеву» фабрику, наступна лінійка є єдиною різницею в коді
 */
$toyFactory = new TeddyToysFactory();

/**
 * Як бачимо код нижче не відрізняється від наведеного вище
 */
$bear = $toyFactory->getBear();
$cat = $toyFactory->getCat();
echo '<hr>';
echo sprintf("I've got %s and %s", $bear->name, $cat->name);
echo '<hr>';
/**
 * А вивід на консоль буде інший: [I've got Teddy Bear and Teddy Cat]
 */
