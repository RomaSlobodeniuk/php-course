<pre>
<?php

$file = './array_of_weapon.txt';

$str = file_get_contents($file);


echo "$str <br><hr>";


preg_match_all('/\'(name|src|text|url)\'\s+=>\s+\'(.+)\'/i', $str, $matches);
//    [\w\.]{1,20}+@[\w]+\.?[\w]+\.[\w]{1,4}+)


print_r($matches);



foreach ($matches as $dann) {
    echo "$dann[1] => $dann[2]<br>";
 

 }
 
 
 
?>

</pre>