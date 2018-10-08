<?php

require_once '../helpers/functions.php';

debug("Programs array:");
$programsArray = [
    0 => 'telegram',
    1 => 'slack',
    2 => 'skype',
    3 => 'viber',
    'key_1' => 'chrome',
    'key_2' => 'phpstorm',
    'key_3' => 'xampp'
];
debug($programsArray);

debug("Reversed programs array:");
$reverseArray = array_reverse($programsArray);
debug($reverseArray);


debug("Reversed programs array saving integer keys:");
$reverseArrayWithSavedKeys = array_reverse($programsArray, true);
debug($reverseArrayWithSavedKeys);
