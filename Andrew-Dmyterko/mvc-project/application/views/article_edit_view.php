<?php
// Формируем главную страницу

foreach($data as $row)
{ ?>
<!--    col-md-offset-3 <div class="jumbotron col-lg-10" style="margin-right: auto; margin-left: auto;"> -->
<!--    <div class="jumbotron jumbotron-fluid">-->
    <div class="jumbotron col-xs-110 col-sm-10 col-md-10 col-lg-10" style="margin-right: auto; margin-left: auto;">
<!--        <div class="container">-->
            <h1 class="display-6"><u><?= $row['title'] ?>  EDIT</u></h1>

            <hr class="my-8">
            <p class="lead"><em><?= $row['full_text'] ?></em></p>
            <a class="btn btn-primary btn-lg" href="http://<?=SITE_NAME?>" target="_self" role="button" >Вернуться на главную</a>
            <a class="btn btn-primary btn-lg" href="http://<?=SITE_NAME?>/Article/update/<?= $row['id'] ?>" target="_self" role="button" >Внести изменения</a>
            <hr class="my-8">
            <p>Дата создания - <?= $row['date_create'] ?></p>
<!--        </div>-->
    </div>
    <?php
}

?>
<!-- форма изменения статьи -->
<div class="jumbotron col-xs-110 col-sm-10 col-md-10 col-lg-10" style="margin-right: auto; margin-left: auto;">
    <a name="edit_article"></a>
    <p class="lead"><em>Пожалуйста внесите изменения в статью и нажмите <u>"Внести изменения"</u></em></p>
    <div class="row justify-left-left">
        <form class="col-sm-12" id="main-form" name="form" method="post" enctype="multipart/form-data" action="./action.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="passwd" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword2">Confirm Password</label>
                <input name="passwd_confirm" type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm Your Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="https://www.facebook.com/v3.2/dialog/oauth?client_id={{ID}}&redirect_uri={{URL}}&response_type=code&scope=public_profile,email,user_location">Войти через FB</a>
        </form>
    </div>
</div>
