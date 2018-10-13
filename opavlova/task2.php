<?php
for($i=1;$i<=8;$i++) {
    for ($j = 1; $j <= 8; $j++) {
        if ($i % 2 === 1) echo '#';
        if ($i % 2 === 0) echo '&nbsp';
    }

    echo '<br/>';
    {
        if ($j % 2 === 0) echo '&nbsp';
        if ($j % 2 === 1) echo '#';
    }
}
?>