<?php

require_once '../helpers/functions.php';

$sevenMiracles = [
    'Colossus of Rhodes', 'Great Pyramid of Giza', 'Hanging Gardens of Babylon',
    'Lighthouse of Alexandria', 'Mausoleum at Halicarnassus', 'Statue of Zeus at Olympia',
    'Temple of Artemis at Ephesus',
];

debug($sevenMiracles);
echo '<hr>';

if  (in_array('Great Pyramid of Giza', $sevenMiracles)) { // true
    echo 'The "Great Pyramid of Giza" has been found in $sevenMiracles';
    echo '<br>';
}

if  (!in_array('Me', $sevenMiracles)) { // false
    echo 'Sorry, but YOU are not a part of The Seven Miracles of the world...';
    echo '<br>';
}