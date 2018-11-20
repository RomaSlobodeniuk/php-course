<?php
require_once './helpers/my_functions.php';

// проверяем наличие сессии и обновляем ее
$es = exists_session();

// база данных для action.php
$fileName = ADMIN_SOURCE_PATH;
$sourceData = getSourceData($fileName);

// выводим заголовок
$header = getHeader($sourceData);
echo $header;

// База данных картинок
getPicArray();

$params = $_POST;
if ($es['user_id'] >= 0 && !empty($params)) {

//    print_r($params);
//    print_r($_FILES);

    if ($es['user_id']>=0 && !empty($_FILES['userfile']['name'])):

        $uploaddir = USERS_PIC_PATH;
        $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
            echo getAlert("Файл корректен и был успешно загружен.");
        } else {
            echo getAlert("Возможная атака с помощью файловой загрузки!");
        }

        $addPicAttrContent = getAddPicAttr($_FILES);
        echo $addPicAttrContent;

////    print_r($_FILES);
//
//        echo "<img src=\"weapon_img/" . $_FILES['userfile']['name'] . "\" alt=\"альтернативный текст\">";
//        ?>
<!---->
<!--        <!--Форма добавления картинки ввод атребутов -->-->
<!--        <div class="jumbotron">-->
<!--            <form name="form" method="post" class="col-sm-6" enctype="multipart/form-data" action="">-->
<!--                <input type="text" name="name" class="form-control" required placeholder="Имя оружия">-->
<!--                <input type="hidden" name="src" value="--><?php //echo "weapon_img/" . $_FILES['userfile']['name']; ?><!--">-->
<!--                <textarea name="text" required class="form-control" placeholder="Описание оружия"></textarea>-->
<!--                <input type="text" name="url" class="form-control" size="100" required placeholder="Ссылка URL">-->
<!--                <!--            <input type="hidden" name="my_dir" value="-->--><?php ////echo $uploaddir;?><!--<!--">-->-->
<!--                <button type="submit" class="btn btn-primary">В базу</button>-->
<!--            </form>-->
<!--        </div>-->


    <?php
    endif;


//    нажата кнопка изменить данные
    if ($es['user_id']>=0 && !empty($_POST['change'])) {
        $forChangesContent = getForChangesContent($pictures);
        echo $forChangesContent;
    }

    // изменение данных
    if ($es['user_id']>=0 && !empty($_POST['change_pic']) && empty($_POST['delete_pic'])){

        $add_changes_form = getAddChangesForm($_POST['number_pic']);
        echo $add_changes_form;
    }
//echo $es;
    // если стоит чекбокс удалить картинку
    if ($es['user_id']>=0 && !empty($_POST['delete_pic']) && ($_POST['delete_pic'] == 'on')) {
        unset($pictures[$_POST['number_pic']]);
        $pictures = array_values($pictures);
        writePicArray();
        header("Location:index.php");
    }

// изменяем данные элеметна массива
    if ($es['user_id']>=0 && !empty($_POST['text1'])) {
        $pictures[trim($_POST['number_pic'])]['name'] = $_POST['name'];
        $pictures[trim($_POST['number_pic'])]['text'] = $_POST['text1'];
        $pictures[trim($_POST['number_pic'])]['url'] = $_POST['url'];
        writePicArray();
        header("Location:index.php");
    }

// пишем в базу новый файл картинки
    if ($es['user_id']>=0 && !empty($_POST['text'])):
        array_push($pictures, $_POST);
        //    print_r($pictures);
        writePicArray();
        header("Location:index.php");
    endif;

}

// нажата кнопка добавить картинку
    if ($es['user_id']>=0 && !empty($_POST['add_pic'])) {


    $add_file = getSourceContent(ADMIN_ADD_FILE_TEMPLATE_PATH);
    echo $add_file;
    }





