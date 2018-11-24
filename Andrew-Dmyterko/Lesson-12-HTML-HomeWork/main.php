<div>
<!--Выводим заставку-->
    <div class="jumbotron">
        <div class="container">
        <h1 class="display-4"><u> World War II Weapons</u></h1>
            <p class="lead"><em>World War II (often abbreviated to WWII or WW2), also known as the Second World War, was a global war that lasted from 1939 to 1945.</em></p>
        <p>I<em> World war is generally said to have begun on 1 September 1939, with the invasion of Poland by Germany...</em></p>
        <a class="btn btn-primary btn-lg" href="https://en.wikipedia.org/wiki/World_War_II" target="_blank" role="button" >To learn more...</a>
    </div>
    </div>

<!--Выводим заставку 2-->

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><u>List of World War II weapons</u></h1>
            <p class="lead"><em>World War II saw rapid technological innovation in response to the needs of the various combatants. Many different weapons systems evolved as a result.</em></p>
            <hr class="my-8">
            <p><b>Note:</b> This list does not consist of all weapons used by all countries in World War II.</p>
        </div>
    </div>

<!--Выводим в цикле все оружие -->
    <div class="row">
        <?php if (!empty($pictures)):?>
            <?php foreach ($pictures as $picture):?>
                <div class="card col-sm-3" style="width: 18rem;background-color: #e9ecef">
                    <img class="card-img-top" src="<?php echo $picture['src'] ?>" title="<?php echo $picture['name'] ?>" alt="black-humor">
                    <div class="card-body">
                        <h5 class="card-title"><u><?php echo $picture['name'] ?></u></h5>
                        <p class="card-text"><?php echo $picture['text'] ?></p>
                        <a href="<?php echo $picture['url'] ?>" class="btn btn-primary">See more about <u><?php echo $picture['name']?></u></a>
                    </div>
                </div>
            <?php endforeach;?>
        <?php endif;?>
    </div>

    <div class="jumbotron">
        <a name="login"></a>
        <p class="lead"><em>Please enter your login and password to enter the secret area</em></p>
        <div class="row justify-left-left">
            <form class="col-sm-6" id="main-form" name="form" method="post" enctype="multipart/form-data" action="action.php">
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
<!--                <div class="form-group">-->
<!--                    <label for="exampleFormControlFile1">Choose file to load</label>-->
<!--                    <input name="file_f" type="file" class="form-control-file" id="exampleFormControlFile1">-->
<!--                </div>-->
<!--                <div class="form-group form-check">-->
<!--                    <input name="check_c" type="checkbox" class="form-check-input" id="exampleCheck1">-->
<!--                    <label class="form-check-label" for="exampleCheck1">Check me out</label>-->
<!--                </div>-->
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</div>