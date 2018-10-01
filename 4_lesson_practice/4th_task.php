<?php

require_once '../3_lesson_operators/functions.php';

/**
 * У користувача онлайн сервісу є 2000 у.о., проімітуйте списування покупок, використовуючи рандомні значенні rand(),
 * при цьому потрібно виводити залишок на рахунку; у разі недостатньої суми на рахунку виведіть повідмлення.
 * Використовувати Do-While або While
 */

$balance = 2000;

while ($balance >= 0) {
    $balanceBefore = $balance;
    $sumToSpend = rand(1, 500);
    $balance -= $sumToSpend;
    if ($balance >= 0) {
        debug('Баланс перед покупкою: $' . $balanceBefore);
        debug('Ви витратили: $' . ($balanceBefore - $balance));
        debug('Ваш поточний баланс: $' . $balance);
        echo '<hr>';
    } else {
        debug('На Вашому рахунку недостатньо коштів!');
        debug('Сума покупки: $' . $sumToSpend);
        debug('Ваш поточний баланс: $' . $balanceBefore);
    }
}

