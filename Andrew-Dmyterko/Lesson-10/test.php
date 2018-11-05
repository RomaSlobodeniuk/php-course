<pre>
<?php
// проверяем жадность квантификаторов

//$string = '/* первый комментарий */ не комментарий /* второй комментарий */';
//
//preg_match_all('/\*.*\*/U', $string, $matches);
//
//var_dump($matches);

$string = 'cat cataract rrrr caterpillar';

preg_match_all('/cat(aract|erpillar)/', $string, $matches);

var_dump($matches);


?>
</pre>