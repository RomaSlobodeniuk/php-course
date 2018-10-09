<?php
/**
 * Created by PhpStorm.
 * User: slayer
 * Date: 09.10.18
 * Time: 19:42
 */

$file = file_get_contents('./NamesSurnames.txt');
$namesSurnames = [];
$namesSurnames = explode("\n", $file);
print_r($namesSurnames);
?>