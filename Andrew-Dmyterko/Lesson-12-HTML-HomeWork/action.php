
<?php
/**
 * Отрабатывае по кнопке submit
 * User: sky_fox
 * Date: 01.11.18
 * Time: 9:08
 */

require_once '../helpers/functions.php';
require_once './add_bootstrap.php';


$params = $_POST;
//if (!empty($params['email'])) {
//
//    print_r($params);
//    print_r($_FILES);
//}
// База данных пользователей
require_once './pars_file_users_to_array.php';
//$users = [
//  1=>  [    'user'     => 'andrew.dmyterko@gmail.com',
//            'password' => '1234',
//            'name'     => 'Andrew Dmyterko'
//  ],
//
//  2=>  [    'user'     => 'sky_fox123@ukr.net',
//            'password' => '701051',
//            'name'     => 'Ivanov Ivan'
//  ],
//];

//var_dump($users);

function pass($user_name, $passwd, $basa) {
    $good = -1;

   foreach ($basa as $kk => $key) {
        if ($user_name===$key['user'] && $passwd===$key['password']) {
//            echo $key['password'], $key['user'],$kk;
            $good = "$kk";

        }
    }
    return $good;
}
//echo array_search('sky_fox123@ukr.net', $users);
//die();
?>

<?php if (!empty($params)):
//    debug($params);
//    debug($_FILES);
    $error=0;
//    die();
    if ($params['passwd']!==$params['passwd_confirm']): $error++?>
                <div class="alert alert-primary" role="alert">
                  Пароли не совпадают!!!!
                </div>
    <?php endif;
    if (empty($params['email'])): $error++ ?>
                <div class="alert alert-primary" role="alert">
                    ВВедите E-Mail!!!!
                </div>
    <?php endif; ?>
    <?php if ((pass($params['email'], $params['passwd'], $users))>=0 && $error==0): ?>
                <!-- если пароль правильный Выводим заставку Secret Area-->

                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4"><u><?php echo $users[pass($params['email'], $params['passwd'], $users)]['name'],"<br>";  ?>Welcome to the Secret Area!!!!</u></h1>
                        <p class="lead"><em> Your password is -- <?php echo $params['passwd']; ?> </em></p>
                        <p class="lead"><em> Your MD5 password hash  -- <?php echo md5($params['passwd']); ?> </em></p>
                        <p class="lead"><em> Your E-Mail is  -- <?php echo $params['email']; ?> </em></p>
                        <div class="row">
                            <a class="btn btn-primary" href="./index.php#login" role="button">Вернуться назад</a>

                            <form name="form1" enctype="multipart/form-data" action="./admin.php" method="post">
<!--                        <a class="btn btn-danger" href="./admin.php" role="button">Добавить картинку</a>-->
                                <input type="hidden" name="add_pic" value="add_pic">
                                <input type="submit" class="btn btn-danger" value="Добавить картинку">
                            </form>

                            <form name="form1" enctype="multipart/form-data" action="./admin.php" method="post">
                                <input type="hidden" name="change" value="change">
                                <input type="submit" class="btn btn-primary" value="Изменить данные">
                            </form>
<!--                        <a class="btn btn-danger" href="./admin1.php" name="change" role="button">Изменить данные</a>-->
                        </div>
                        <hr class="my-8">
                        <p><b>Note:</b> This is a secret data do not pass them on to third persons.</p>
                    </div>
                </div>


    <?php elseif($error==0): $error++;  ?>
                <div class="alert alert-primary" role="alert">
                    Неправильный логин пароль!!!
                </div>
    <?php endif; ?>

    <?php if ($error): ?>
                <form class="col-sm-6" id="main-form" name="form" method="post" enctype="multipart/form-data" action="./index.php#login">
                    <button type="submit" class="btn btn-primary">Вернуться назад</button>
                </form>
    <?php endif; ?>

<?php endif; ?>
<!---->
<!---->
<!--//if (!empty($params['email'])) {-->
<!--//    print_r($params);-->
<!--//    print_r($_FILES);-->
<!--////    die();-->
<!--//}-->

<?php require_once './footer.php'; ?>