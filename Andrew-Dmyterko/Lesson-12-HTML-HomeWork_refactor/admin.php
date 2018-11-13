<?php
require_once './helpers/my_functions.php';
require_once './add_bootstrap.php';

// База данных картинок
getPicArray();
// проверяем наличие сессии и обновляем ее
$ec = exists_session();

$params = $_POST;
if (!empty($params)) {

//    print_r($params);
//    print_r($_FILES);

    if (!empty($_FILES['userfile']['name'])):

        $uploaddir = USERS_PIC_PATH;
        $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
            echo <<<END
                <div class="alert alert-primary" role="alert">
                Файл корректен и был успешно загружен.
                </div>        
END;
        } else {
            echo <<<END
                <div class="alert alert-primary" role="alert">
                Возможная атака с помощью файловой загрузки!
                </div>        
END;
        }

//    print_r($_FILES);

        echo "<img src=\"weapon_img/" . $_FILES['userfile']['name'] . "\" alt=\"альтернативный текст\">";
        ?>

        <!--Фома добавления картинки ввод атребутов -->
        <div class="jumbotron">
            <form name="form" method="post" class="col-sm-6" enctype="multipart/form-data" action="">
                <input type="text" name="name" class="form-control" required placeholder="Имя оружия">
                <input type="hidden" name="src" value="<?php echo "weapon_img/" . $_FILES['userfile']['name']; ?>">
                <textarea name="text" required class="form-control" placeholder="Описание оружия"></textarea>
                <input type="text" name="url" class="form-control" size="100" required placeholder="Ссылка URL">
                <!--            <input type="hidden" name="my_dir" value="--><?php //echo $uploaddir;
                ?><!--">-->
                <button type="submit" class="btn btn-primary">В базу</button>
            </form>
        </div>


    <?php
    endif;


//    нажата кнопка изменить данные
    if (!empty($_POST['change'])):
        ?>
        <!--Выводим для изменения в цикле все оружие -->
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-7"><u>Выберите картинку которую хотите изменить</u></h1>
                <hr class="my-8">
                <p><b>Note:</b> Подтвердите выбор нажатием кнопки "Изменить"</p>
            </div>
        </div>
        <div class="row">
            <?php if (!empty($pictures)): ?>
                <?php foreach ($pictures as $index => $picture): ?>
                    <div class="card col-sm-2" style="width: 18rem;background-color: #e9ecef">
                        <img class="card-img-top" src="<?php echo $picture['src'] ?>"
                             title="<?php echo $picture['name'] ?>" alt="black-humor">
                        <div class="card-body">
                            <h5 class="card-title"><u><?php echo $picture['name'] ?></u></h5>
                            <p class="card-text"><?php echo $picture['text'] ?></p>
                            <form name="form2" enctype="multipart/form-data" action="./admin.php" method="post">
                                <input type="hidden" name="change_pic" value="change_pic">
                                <input type="hidden" name="number_pic" value="<?php echo $index ?>">
                                <input name="delete_pic" type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Удалить картинку</label>
                                <input type="submit" class="btn btn-primary" value="Изменить">
                            </form>
                            <!--                        <a href="-->
                            <?php //echo $picture['url'] ?><!--" class="btn btn-primary">Изменить</a>-->
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

    <?php endif;

    // изменение данных
    if (!empty($_POST['change_pic']) && empty($_POST['delete_pic'])):

        ?>
        <!--Фома добавления изменения атребутов -->
        <div class="jumbotron">
            <h3 class="display-6"><u>Измените необходимые атрибуты</u></h3>
            <hr class="my-8">
            <p><b>Note:</b> Подтвердите выбор нажатием кнопки <u>"Изменить данные"</u></p>
            ​
            <picture>
                <!--            <source srcset="..." type="image/svg+xml">-->
                <img src="<?php echo $pictures[$_POST['number_pic']]['src'] ?>" class="img-fluid img-thumbnail"
                     alt="...">
            </picture>

            <form name="form3" method="post" class="col-sm-6" enctype="multipart/form-data" action="">
                <input type="text" name="name" class="form-control" required
                       value="<?php echo $pictures[$_POST['number_pic']]['name'] ?>">
                <textarea name="text1" required class="form-control"
                          placeholder="Описание оружия"><?php echo $pictures[$_POST['number_pic']]['text'] ?></textarea>
                <input type="text" name="url" class="form-control" size="100" required
                       value="<?php echo $pictures[$_POST['number_pic']]['url'] ?>">
                <input type="hidden" name="number_pic" value=" <?php echo $_POST['number_pic']; ?>">
                <button type="submit" class="btn btn-primary">Изменить данные</button>
            </form>
        </div>

    <?php
    endif;
    // если стоит чекбокс удалить картинку
    if (!empty($_POST['delete_pic']) && ($_POST['delete_pic'] == 'on')) {
        unset($pictures[$_POST['number_pic']]);
        $pictures = array_values($pictures);
        writePicArray();
        header("Location:index.php");
    }

// изменяем данные элеметна массива
    if (!empty($_POST['text1'])) {
        $pictures[trim($_POST['number_pic'])]['name'] = $_POST['name'];
        $pictures[trim($_POST['number_pic'])]['text'] = $_POST['text1'];
        $pictures[trim($_POST['number_pic'])]['url'] = $_POST['url'];
        writePicArray();
        header("Location:index.php");
    }

// пишем в базу новый файл картинки
    if (!empty($_POST['text'])):
        array_push($pictures, $_POST);
        //    print_r($pictures);
        writePicArray();
        header("Location:index.php");
    endif;

}

// нажата кнопка добавить картинку
    if (!empty($_POST['add_pic'])):
?>
<!--Форма добавления картинки ввод картинки -->
<div class="jumbotron">
    <p class="lead"><b>Выберите картинку и загрузите на сервер</b></p>
<!-- Тип кодирования данных, enctype, ДОЛЖЕН БЫТЬ указан ИМЕННО так -->
    <form name="form" enctype="multipart/form-data" action="" method="post">
        <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
        <input type="hidden" name="MAX_FILE_SIZE" value="30000">
        <!-- Название элемента input определяет имя в массиве $_FILES -->
        Отправить этот файл: <input name="userfile" class="form-control-file" type="file">
        <br>
        <input type="submit" class="btn btn-primary" value="Отправить файл">
        <a class="btn btn-primary" href="./index.php" role="button">Вернуться на центральную страницу</a>
    </form>
</div>

<?php endif; ?>




