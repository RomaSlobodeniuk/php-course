<?php

require_once '../helpers/functions.php';

class MyCloneable
{
    public $object = 1;

    public function __clone() {
        $this->object++;
    }
}

$myCloneable = new MyCloneable();
$cloned = clone $myCloneable;

debug("Оригінальний об'єкт:");
debug($myCloneable);

debug("Клонований об'єкт:");
debug($cloned);
