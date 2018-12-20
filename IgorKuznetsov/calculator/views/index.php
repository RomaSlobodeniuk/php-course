<?php
if (!$arg === false) {
    echo $arg;
}
?>

<form action="<?php echo URL?>calculator/index" method="post">
    <input type="text" name="val1">
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
    </select>
    <input type="text" name="val2">

    <input type="submit" name="ok">


</form>
