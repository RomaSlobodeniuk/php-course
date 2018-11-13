<?php

require_once '../helpers/functions.php';

/**
 * http://localhost/php_course/14_lesson_SUPER_GLOBALS/$_REQUEST.php?get_name=Roma&get_surname=Slobodeniuk
 */

debug($_REQUEST);

?>


<form method="post">

    <label for="post_name">Enter Your Name</label>
    <input id="post_name" type="text" name="post_name">

    <label for="post_surname">Enter Your Surname</label>
    <input id="post_surname" type="text" name="post_surname">

    <input type="submit">

</form>
