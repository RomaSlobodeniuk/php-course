
<pre>
<?php


$email = "andrew.dddd.dyterko@my.ffdf.commmmm";
echo "$email <br><hr>";


//if (preg_match('/(^[\w\.]{1,20}+@[\w]+\.?[\w]+\.[\w]{1,4}+)$/i', $email, $matches)) {
//
//    echo "E-Mail correct <br>";
//    var_dump($matches);
//
//};
preg_match('/(^[^\W\.]{1,20})@.+/i', $email, $matches);
//    echo "E-Mail incorrect <br>";
//    echo "Name fail!!! -  ";
   var_dump($matches);
//    preg_match('/(.+)@[\w]+/i', $email, $matches);
//    echo $matches[1], "<br>";