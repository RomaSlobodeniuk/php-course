<!--navigation-->

<div class="pos-f-t">
<h1 class="header-text">Robots is our future</h1>
<span class="header-description">Robots are awesome. Humans are okey</span>
<nav class="navbar navbar-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>
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
</div>

<!--main content-->

<section main-content>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <article id="article-1" class="articles col-xl-8">
                <h3 class="display-4 article-head">Robot name</h3>
                <img src="img/robo1.gif" class="robo-img" alt="Robot" title="Robot" width="600" height="500"><br>
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
    /*form*/

    <form name="robo-form" id="form" method="get" enctype="multipart/form-data">
        <input type="text" name="login" required>
        <input type="password" name="password" placeholder="Pls enter your password" required>
        <input type="email" name="email" required><br>
        <input type="hidden" name="info"><br>
        <label><input type="checkbox" name="chosen-robot" value="1" checked> Robot 1</label><br>
        <label><input type="checkbox" name="chosen-robot" value="2"> Robot 2</label><br>
        <label><input type="checkbox" name="chosen-robot" value="3"> Robot 3</label><br>
        <label><input type="checkbox" name="chosen-robot" value="4"> Robot 4</label><br>
        <label><input type="checkbox" name="chosen-robot" value="5"> Robot 5</label><br>
        <textarea name="comment"></textarea>
        <input type="submit" value="Send"><br>
    </form>
</section>