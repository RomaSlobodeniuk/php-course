<?php
$email = "Exam.ple_123@gmail.sfs.comu";
$p = '/^([a-z0-9\._-]{1,20}@[a-z0-9_-]{1,10}\..*[a-z]{1,4})$/i';

preg_match($p,$email,$m);

echo '<pre>';
print_r($m);
echo '</pre>';
//var_dump($m);
?>