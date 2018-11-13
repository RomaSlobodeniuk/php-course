<pre>
<?php

$file = './array_of_users.txt';

$str = file_get_contents($file);

$array_text = explode('-------------------------------------------------------------',$str);


$array_text = array_values(array_diff($array_text, array('')));
//$array_text = array_values($array_text);
//print_r($array_text);

$users =[];

//echo "$str <br><hr>";
$i=0;
foreach ($array_text as $data) {
    preg_match_all('/^\s*\'(.+)\'\s+=>\s+\'(.+)\'/im', $data, $matches);
//    print_r($matches);
//    echo $matches[1][0], "=>", $matches[2][0], "<br>";


//    foreach ($matches as $i ) {

    for ($j = 0; $j<count($matches[0]); $j++) {

        $users[$i][$matches[1][$j]] =   $matches[2][$j];
    }

    $i++;
}

//print_r($pictures);

//preg_match_all('/\'(name|src|text|url)\'\s+=>\s+\'(.+)\'/i', $str, $matches);
////    [\w\.]{1,20}+@[\w]+\.?[\w]+\.[\w]{1,4}+)
//
//
//print_r($matches);
//
//
//
//foreach ($matches as $dann) {
//    echo "$dann[1] => $dann[2]<br>";
//
//
// }
//
//
 
?>

</pre>