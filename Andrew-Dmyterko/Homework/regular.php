
<pre>
<?php


$email = "andrew.dddd.@dyterko@my.ffdf.comm";
echo "$email <br><hr>";


if (preg_match('/(^[\w\.]{1,20}+@[\w]+\.?[\w]+\.[\w]{1,4}+)$/i', $email, $matches)) {

    echo "E-Mail correct <br>";
    var_dump($matches);

};
if (!preg_match('/(^[[\w\.]{1,20})@.*/i', $email, $matches)) {
    echo "E-Mail incorrect <br>";
    echo "Name fail!!! -  ";
//    var_dump($matches);
    preg_match('/(.+)@[\w]+/i', $email, $matches);
    echo $matches[1], "<br>";
};
if (!preg_match('/(\.[\w]{1,4}+)$/i', $email, $matches)) {
    echo "E-Mail incorrect <br>";
    echo "Domain fail!!! -  ";
    preg_match('/(\.[\w]+$)/i', $email, $matches);
//    var_dump($matches);
//    preg_match('/\.[\w]+$/i', $email, $matches);
    echo $matches[1],"<br>";
};
if (!preg_match('/(.+@[\w]+\.?[\w]+\.[\w]{1,}+)$/i', $email, $matches)) {
    echo "E-Mail incorrect <br>";
    echo "Domain failllll!!! -  ";
    preg_match('/.+(@[\w\.]+\.)[\w]{1,}+$/i', $email, $matches);
//    var_dump($matches);
//    preg_match('/\.[\w]+$/i', $email, $matches);
    echo $matches[1],"<br>";
};





echo "<br><hr>";
preg_match('/(^[\w\.]{1,20}+)@([\w]+\.?[\w]+)\.([\w]{1,4}+$)/i', $email, $matches);

var_dump($matches);



//$greeting = 'Happy 2018 Year';
//$pattern = '/([^a-z\s]{1,4})/i';
//preg_match($pattern, $greeting, $matches);
//var_export($matches);

//preg_match('/(foo)(bar)(baz)/', 'foobarbazfoobarbazfoobarbazfoobarbaz', $matches); //, PREG_OFFSET_CAPTURE);
//print_r($matches);
//
//
//preg_match_all('/(foo)(bar)(baz)/', 'foobarbazfoobarbazfoobarbazfoobarbaz', $matches); //, PREG_OFFSET_CAPTURE);
//print_r($matches);


?>
</pre>
