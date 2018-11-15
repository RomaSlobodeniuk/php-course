<?php

require_once '../helpers/functions.php';


if (empty($_POST['name']) && empty($_POST['surname'])) {
    debug('NO POST PARAMS');
}

if (!empty($_POST['name'])) {
    debug('User name: "' . $_POST['name'] . '"');
}

if (!empty($_POST['surname'])) {
    debug('User surname: "' . $_POST['surname'] . '"');
}

?>

<form method="post">

    <label for="name">Enter Your Name</label>
    <input id="name" type="text" name="name">

    <label for="surname">Enter Your Surname</label>
    <input id="surname" type="text" name="surname">

    <input type="submit">

</form>
