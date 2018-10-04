<?php

require_once '../helpers/functions.php';

$colorsInString = '    red & green & blue => RGB ';
debug("'$colorsInString'");

$colorsInString = trim($colorsInString);
debug("'$colorsInString'"); //'red & green & blue => RGB'

echo '<hr>';

$string = '/path/to/file/some.txt/)';
$string = trim($string, '/)');
debug("'$string'"); //'path/to/file/some.txt'

echo '<hr>';

$text = ', my custom text goes here///';
$text = rtrim($text, '/');
debug("'$text'"); //', my custom text goes here'

$text = ltrim($text, ', ');
debug("'$text'"); //'my custom text goes here'