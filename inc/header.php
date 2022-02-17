<?php
session_start();
$auth = $_SESSION['auth'];
$login = $_SESSION['login'];
?>

<?php ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/header.css">
    <title>Document</title>
</head>
<body>
<header>
    <div class="header">
        <div>
            <img id="img1" src="images/logo1.png" alt="Лого">
        </div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div class="auth">
            <? if ($auth != ''){
                echo "<p>Добро пожаловать, $login</p>";
            }
            ?>
        </div>
        <div class="auth">
            <?
            if ($auth != ''){
                echo "<p><a href='inc/unlogin.php'>Выйти</a></p>";
            } else echo "<p><a href='inc/login.php'>Войти</a></p>";
            ?>
        </div>
        <div style="width: 50px">
            <nav class="nav">
                <ul class="topmenu">
                    <li><a style="width: 50px" href=""><img style="border-radius: 25px" width="100%" src="images/awesome_burger.gif" alt="Меню"></a>
                        <ul class="submenu">
                            <li><a href="inc/mendeleev.html">Менделеев</a></li>
                            <li><a href="inc/dop_homework.html">Доп. задание</a></li>
                            <li><a href="inc/09.02.2022.php">Задание от 09.02.2022</a></li>
                            <li><a href="inc/14.02.2022.php">Задание от 14.02.2022</a></li>
                            <li><a href="inc/func.php">Тестовый полигон</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>