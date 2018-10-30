<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Альтернативный синтаксис</title>
</head>
<?php $a = 7; ?>
<body>
    <?php if ($a === 5): ?>
        <h1 style="color: rebeccapurple">"$a" равняется <?= $a?></h1>
    <?php else: ?>
        <h2 style="color: red">"$a" НЕ равняется 5!</h2>
        <h2 style="color: red">"$a" равняется <?=$a?>!!!</h2>
    <?php endif; ?>
</body>
</html>