 <pre>
<?php

$mail='strandrewdunets@gmail.com';
$pattern= '/^[a-z0-9_]{1,20}[@][a-z0-9_]{1,10}\.[a-z]{1,4}$/i';
$result= preg_match($pattern,$mail,$matches);
var_dump ($matches)


?>
</pre>


