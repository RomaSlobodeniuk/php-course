<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Альтернативний синтаксис</title>
</head>
<?php echo $a = 5; ?>
<?= $a = 5; ?>
<body>

<?php if ($a === 5): ?>
    <h1 style="color: rebeccapurple">"$a" дорівнює <?= $a?></h1>
<?php else: ?>
    <h2 style="color: red">"$a" НЕ дорівнює 5!</h2>
    <h2 style="color: red">"$a" рівне <?=$a?></h2>
<?php endif; ?>

</body>
</html>