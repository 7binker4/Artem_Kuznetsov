<?php
session_start();
setcookie(session_name(), session_id(), time() + 3600);
//$auth = $_SESSION['auth'];
//$login = $_SESSION['login'];
//$password = $_SESSION['password'];
$color = false;
//окрашивание из списка
if (isset($_POST['colors'])) {
    if ($_POST['select'] == 'white') {
        echo '<style>body {background-color: white;}</style>';
        //$color = 'style = "background-color: white"';
    } elseif ($_POST['select'] == 'yellow') {
        echo '<style>body {background-color: yellow;}</style>';
        //$color = 'style = "background-color: white"';
    } elseif ($_POST['select'] == 'blue') {
        echo '<style>body {background-color: blue;}</style>';
        //$color = 'style = "background-color: white"';
    }
}
?>
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
<body <?= $color ?>>
<header>
    <div style="display: inline; float:left"><img id="img1" src="images/logo1.png" alt="Лого"></div>
    <div style="display: inline; float:left">
        <a href="inc/bitrix.php">bitrix</a><br>
        <a href="inc/fact.php">fact</a>
    </div>
    <div>
        <?
        if (count($_POST) > 0) {
            if ($_POST['login'] !== '') {
                if (isset($_SESSION['page'])) {
                    foreach ($_SESSION['page'] as $value) {
                        echo $value;
                    }
                    exit;
                }
            }
        } else {
            if (isset($_SESSION['page'])) {
                foreach ($_SESSION['page'] as $value) {
                    echo $value;
                }
            }
        }
        ?>
    </div>
    <div>
        <form name="my" method="post">
            <select name="select">
                <option value="white" <? if ($_POST['select'] == 'red') echo 'Выбрано'; ?> name="Белый">Белый</option>
                <option value="yellow" <? if ($_POST['select'] == 'yellow') echo 'Выбрано '; ?> name="Желтый">Желтый
                </option>
                <option value="blue" <? if ($_POST['select'] == 'blue') echo 'Выбрано'; ?> name="Синий">Синий</option>
            </select>
            <input " type="submit" name="colors" value="Изменить">
        </form>
    </div>
    <div style="width: 150px; display: inline; float:right; ">
        <nav class="nav">
            <ul class="topmenu">
                <li><a href=""><img style="border-radius: 25px" width="50px" src="images/awesome_burger.gif" alt="Меню"></a>
                    <ul class="submenu">
                        <li><a href="inc/mendeleev.html">Менделеев</a></li>
                        <li><a href="inc/dop_homework.html">Доп. задание</a></li>
                        <li><a href="inc/09.02.2022.php">Задание от 09.02.2022</a></li>
                        <li><a href="inc/14.02.2022.php">Задание от 14.02.2022</a></li>
                        <li><a href="inc/16.02.2022.php">Задание от 16.02.2022</a></li>
                        <li><a href="inc/18.02.2022.php">Задание от 18.02.2022</a></li>
                        <li><a href="inc/21.02.2022.php">Задание от 21.02.2022</a></li>
                        <li><a href="inc/func.php">Тестовый полигон</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <div class="auth" style="width: 250px;"></div>

    <div style=" float:right; display: inline" class="auth">
        <?
        if ($_POST['login'] != '') {
            echo "<p><button><a href='inc/unlogin.php'>Выйти</a></button></p>";
        } else echo "<p><button><a href='inc/login.php'>Войти</a></button></p>";
        ?>
    </div>


    <div style="margin-right: 50%" class="auth">
        <? if ($_POST['login'] != '') {
            echo 'Добро пожаловать' . $_POST['login'];
        }
        ?>
    </div>

</header>