<div>
    <div class="jumbotron">
        <h1 class="display-4">My sample page</h1>
        <p class="lead">This page displays TOP-3 islands worth visiting</p>
        <hr class="my-4">
        <p>But it's just my subjective opinion. Google it to find more</p>

        <a href="https://www.google.com.ua/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Google all!</a>

    </div>



    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2 class="display-4">Highlights</h2>
            <p class="lead">Here you can read a little about each island.</p>
        </div>

        <div class="row">
            <?php if (!empty($pictures)):?>
                <?php foreach ($pictures as $picture):?>
                    <div class="card col-sm-4" style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo $picture['src'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $picture['name'] ?></h5>
                            <p class="card-text"><?php echo $picture['text'] ?></p>
                            <a href="<?php echo $picture['link'] ?>" class="btn btn-primary" target="_blank">Find out more</a>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>

        <div class="jumbotron">
            <p class="lead">Please Log In</p>
            <div class="row justify-content-center">
                <form class="col-sm-6" id="main-form" name="form" method="post" enctype="multipart/form-data" action="">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="password1" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword2">Confirm Password</label>
                        <input name="password2" type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm Your Password" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Choose file to load</label>
                        <input name="file" type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <div class="form-group form-check">
                        <input name="checkbox" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
