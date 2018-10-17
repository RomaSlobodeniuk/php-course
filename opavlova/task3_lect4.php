<?php

for($i=0; $i<10; $i++) {
    $arr[$i] = rand(0,10);
}
print_r($arr);
for($i=0; $i<10; $i++) {
    print_r(max($arr) . '<br/>') ;
    //echo min($arr) . '<br/>';
}

?>