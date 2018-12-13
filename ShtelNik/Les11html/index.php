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
    <div>
        <form name="form1" action="validac.php" method="post">
        Введи логин! БЕГОМ!!!<br>
        (от 1 до 6 символов: латинские буквы, цифры, знак подчерка)<br>
        <input type="text" name="login" required value="Vasja"><br>
        Введи пароль! БЕГОМ!!!<br>
        (от 1 до 6 символов: латинские буквы, цифры, знак подчерка)<br>
        <input type="password" name="password1" required value="111"><br>
        Повтори пароль! БЕГОМ!!!<br> (точно такой же как предыдущий)<br>
        <input type="password" name="password2" required value="111"><br>
        Введи Е-мэйл! <br>
        (от 1 до 20 латинсих букв, цифр и _ , затем @ затем от 1 до 10 латинсих букв, точка, и от 2 до 4 латинсих букв )<br>
        <input type="email" name="email" required value="anyEmail@gmaail.com"><br>
        Вставляй файл!!! <br>
        <input type="file" name="file"><br>
        И напиши чето просебя. Прям сюды:<br>
        <textarea name="coment" cols="50"></textarea><br>
        И затем нажми кнопку =>
        <input type="submit" name="submit" required value="Ok">
        </form>
        <br>

    </div>

    <h2>Heading2    <small>SmallText=85%</h2>
    <h3>Heading3   <small>SmallText=85%</h3>
    <h4>Heading4  <small>SmallText=85%</small></h4>
    <h5>Heading5  <small>SmallText=85%</small></h5>
    <h6>Heading6  <small>SmallText=85%</small></h6>
    <img src="image/black-humor.jpg" alt="BlackHumor">
    <img src="image/smile.jpeg" alt="smile">
    <br>
    <a href = "http://google.com.ua">Link to Google</a>
    <p> Text Article</p>
    <br>
       <span>__Span1__</span>    <span>  Span2  </span>    <span>==Span3==</span>
    <div>
        <p>
            Text <mark>TextMarked</mark>

        </p>
    </div>

    <!--
        <script>
            var article = window.document.getElementById('article-1');
            consjle.log(article.getAttribute('class'))
        </script>
        -->
</body>
</html>