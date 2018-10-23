<pre>
<?php


$string = '/* первый комментарий */ не комментарий /* второй комментарий */';

preg_match_all('/\*.*\*/U', $string, $matches);

var_dump($matches);





?>
</pre>