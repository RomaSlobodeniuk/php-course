<?php

require_once '../helpers/functions.php';

/**
 * '/pattern/i'
 */

$string = 'This is a simple string example!';
preg_match('/^t(his)/i', $string, $matches);
debug($string);
debug($matches);

$quote = 'Nothing is true, everything is permitted';
preg_match('/^.*,\s([\w]+)\s.*$/i', $quote, $matches);
debug($quote);
debug($matches);

$str = 'The matrix is the our world!!!';
preg_match('/\s([a-z]{1,5}!+)$/', $str, $matches);
debug($str);
debug($matches);

$str = '/* первый комментарий */ не комментарий /* второй комментарий */';
preg_match_all('/\*\s(.*)\s\*/', $str, $matches);
debug($str);
debug($matches);