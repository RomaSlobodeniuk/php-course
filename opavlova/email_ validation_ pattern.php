
<?php

$email = 'olya1607pavlova@gmail.com';
$pattern = '/^([\w]{2,20}@[a-z]{2,10}\.[a-z]{2,4})$/i';

if (preg_match($pattern, $email, $matches)) {
    var_export($matches);
    echo  '<br>';
    echo  'Email is valid: "' . $matches[1] . '""';
} else {
    echo 'Email is not valid. Please try again';
}
