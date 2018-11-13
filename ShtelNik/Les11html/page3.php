<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Les11.HTML</title>
    <style>
        .red {
            color: red
        }
    </style>
    <!--coment-->
    <link rel="stylesheet" href="../assets/style.css">
    <script async="async" rel="script" src="../assets/script.js"></script>
<!--    <script defer="defer" rel="script" src="../assets/script.js"></script>  -->
</head>
<body class="background-image">
    <h1 class = "red">Heading1 </h1>

    <div class="red">
        Вы вошли на наш сайт под именем:
        <?php
        session_start();
        echo $_SESSION['data']['login'];
        ?>
        <br>
    </div>
    <br>
    <div>
        <h2>
        <span>
            Heading2
        </span>
        </h2>
    </div>
    <div>
        <p>
        <h3>Heading3</h3>
        </p>
    </div>
    <h4>Heading4</h4>
    <h5>Heading5</h5>
    <h6>Heading6</h6>
    <img src="image/black-humor.jpg" alt="BlackHumor">
    <img src="image/smile.jpeg" alt="smile">
    <br>
    <a href = "http://google.com.ua">Link to Google </a>
    <p> Text Article</p>
    <br>
       <span>__Span1_ </span>    <span>  Span2  </span>    <span>==Span3==</span>
    <!--
        <script>
            var article = window.document.getElementById('article-1');
            consjle.log(article.getAttribute('class'))
        </script>
        -->
</body>
</html>