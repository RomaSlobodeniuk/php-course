<header>
<div class="pos-f-t">
        <h1 class="header-text">Robots is our future</h1>
        <span class="header-description">Robots are awesome. Humans are okey</span>
    <!--navigation-->
    <nav>
        <div class="navbar navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="p-4">
                <div class="row">
                    <div class="col-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
</header>

<!--top content-->

<section class="main-content">
    <div class="jumbotron jumbotron-fluid">
        <div class="container row">
            <article id="article-1" class="articles col-lg-10 row">
                <h3 class="display-4 article-head">War machine 03</h3>
                <img src="img/robo1.gif" class="robo-img col-md-10" alt="Robot" title="Robot" width="600" height="500"><br>
                <a href="#" target="_blank" class="tec-char-link">Technical characteristics</a><br>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Cumque magnam odit quo? Architecto aspernatur assumenda consectetur consequatur cum eius fuga ipsam
                    laboriosam nisi numquam odit quam quas soluta suscipit, ut. Consequuntur debitis dicta eius fuga iusto.
                    Commodi, deleniti deserunt dolore doloribus ducimus enim ex, excepturi expedita libero magnam nobis officiis
                    praesentium rerum ullam voluptates. Aliquam enim fuga harum nemo officia!</p>
                <a class="btn btn-primary btn-lg" href="https://ru.wikipedia.org/wiki/%D0%A0%D0%BE%D0%B1%D0%BE%D1%82" role="button">Read more about robots</a>
            </article
        </div>
    </div>
</section>

<!--slider-->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item {{active}}">
            <img class="d-block w-100" src="{{src}}" alt="{{alt}}">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!--cards-->

<section>
    <div id="cards" class="jumbotron jumbotron-fluid">
        <div class="container-fluid row">
            <?php if(!empty($images)):?>
                <?php foreach($images as $image):?>
                    <div class="card col-lg-4" style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo $image['src']?>" alt="Card image cap" title="<?php echo $image['name']?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $image['name']?></h5>
                            <p class="card-text"><?php echo $image['description']?></p>
                            <a href="#" class="btn btn-primary">Go to <?php echo $image['name']?></a>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>
</section>

<!--robo-form-->

<div class="robo-form row">
    <form name="robo-form" id="robo-form" method="post" enctype="multipart/form-data" class="col-lg-8">
        <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Type your email" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword1" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword1" placeholder="Password" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword2" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword2" placeholder="Confirm your password" required>
            </div>
        </div>

    <!--select-->

        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Choose the robot do you like</label>
        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
            <option selected>Choose...</option>
            <option value="robotoy retro">robotoy retro</option>
            <option value="looksee retro">looksee retro</option>
            <option value="retro daddy">retro daddy</option>
            <option value="retro pups">retro pups</option>
            <option value="retro pirate">retro pirate</option>
            <option value="cheburashka">cheburashka</option>
        </select>

    <!--choose file-->

        <div class="form-group uploads">
            <label for="exampleFormControlFiles">Upload one or more files</label>
            <input type="file" class="form-control-file" id="exampleFormControlFiles" title="Upload one or more files" multiple>
        </div>

    <!--Submit button-->

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
