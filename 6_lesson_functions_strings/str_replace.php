<?php

require_once '../helpers/functions.php';

$proposal = 'Go to Kiev! Kiev - is a beautiful place to visit';
$result = str_replace('Kiev', 'Rome', $proposal); // Go to Rome! Rome - is a beautiful place to visit

debug($proposal);
debug($result);
