<?php

session_start();

$_SESSION['time'] = time();

require_once '../helpers/functions.php';

if (!empty($_FILES['name_of_input'])) {
    debug($_FILES);
    $uploads_dir = './files/';
    if ($_FILES['name_of_input']['error'] == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["name_of_input"]["tmp_name"];
        // basename() може запобігти атаці на файлову систему;
        // може бути доцільним додатково перевірити ім'я файлу;
        $name = basename($_FILES["name_of_input"]["name"]);
        if (move_uploaded_file($tmp_name, $uploads_dir . $name)) {
            $_SESSION['file_path'] = $uploads_dir . $name;
        }
    }
}

?>

<?php if (!empty($_SESSION['file_path']) && file_exists($_SESSION['file_path'])): ?>
    <h1>Your last uploaded file:</h1>
    <img src="<?= $_SESSION['file_path'] ?>" width="500px" height="400px">
<?php endif; ?>

<form method="post" enctype="multipart/form-data">
    <label for="file_upload">Choose file for uploading</label>
    <input id="file_upload" type="file" name="name_of_input">
    <input type="submit">
</form>
