<pre>
<?php

$file = "./data_string.txt";

$strFromFile = file_get_contents($file);

$arr = ["of", "in", "new", "from", "this", "rail splitter"];
$arrNew = [];

foreach ($arr as $need) {

    $pos = 0;

    do {

        $pos = stripos($strFromFile, $need, $pos+1);

        if ($pos) $arrNew[] = "$need - $pos";

//        echo ($pos ? ("$need $pos <br />") : "<br />");

    } while ($pos);
}

foreach ($arrNew as $index => $value) echo $value, "<br>";

?>
</pre>
