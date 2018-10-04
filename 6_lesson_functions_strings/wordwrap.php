<?php

require_once '../helpers/functions.php';

$text = "A very long woooooooooooord could be here";
$newText = wordwrap($text, 8, "<br>", true);

debug($newText);
// A very
// long
// wooooooo
//ooooord
//could be
//here