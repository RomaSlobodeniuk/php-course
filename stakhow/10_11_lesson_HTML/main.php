<!-- <div>
    <div class="jumbotron">
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">Текст статьи: This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="http://google.com.ua" role="button" target="_blank">Google</a>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Articles</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
        <div class="row">
            <?php if (!empty($pictures)):?>
                <?php foreach ($pictures as $picture):?>
                    <div class="card col-sm-4" style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo $picture['src'] ?>" title="Humor" alt="black-humor">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $picture['name'] ?></h5>
                            <p class="card-text"><?php echo $picture['text'] ?></p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>
        <div class="jumbotron">
            <div class="row justify-content-center">
                <form class="col-sm-6" id="main-form" name="form" method="post" enctype="multipart/form-data" action="">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword2">Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm Your Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Choose file to load</label>
                        <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
 -->
 <div class="container">
     <div class="form-wrap">
        <form action="index.php" method="POST">
            <div class="form-group">
                <input name="name" type="text" placeholder="Введите Ваше имя"></div>
            <div class="form-group">
                <input name="email" type="email" placeholder="Введите Ваш email"></div>
            <div class="form-group">
                <input name="pass" type="password" placeholder="Введите Ваш пароль"></div>
            <div class="form-group">
                <input name="pass-repeat" type="password" placeholder="Повторите Ваш"></div>
            <div class="form-group">
               <button type="submit" class="btn-submit">Отправить</button>
            </div>

        </form>
         <div class="info-wrap">
             <p>
<!--                 --><?php //if(!empty($userName)):?>
<!--                     Поздравляем, --><?php //echo $userName; ?><!-- Вы успешно авторизировались!-->
<!--                 --><?php //else:?>
<!--                     -->
<!--                 --><?php //endif;?>
<!--                 --><?php //if(isset($params['email']) && empty($params['pass'])):?>
<!--                     Введите email-->
<!--                 --><?php //endif;?>
<!--                 --><?php //if(isset($params['pass']) && empty($params['pass'])):?>
<!--                     Введите пароль-->
<!--                 --><?php //endif;?>
                 <?php  ?>
             </p>
         </div>
     </div>
 </div>s