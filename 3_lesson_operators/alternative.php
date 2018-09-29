<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Альтернативний синтаксис</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<h3>php echo $a = <?php echo $a = 5; ?></h3>
<hr>
<h3>$a = <?= $a = 7; ?></h3>
<body>

<?php if ($a === 5): ?>
    <h1 class="purple">"$a" дорівнює <?= $a?></h1>
<?php else: ?>
    <h2 class="red">"$a" НЕ дорівнює 5!</h2>
    <h2 class="red">"$a" рівне <?=$a?></h2>
<?php endif; ?>

</body>
</html>