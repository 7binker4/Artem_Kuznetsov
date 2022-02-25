<?php
session_start();
$logins = ['artem', 'test'];
$passwords = ['artem', 'test'];
if (!(empty($_POST))){
    $login = $_POST['text'];
    $password = $_POST['password'];
    if (in_array($login, $logins) && $password == $passwords[array_search($login, $logins)]){
    $auth = true;
    } else $auth = false;
    if (isset($_POST['password']) && in_array($_POST['password'], $_POST)){
        $_POST['password'] = md5($_POST['password']);
    } else echo "Введите пароль";
    if($auth === true) {
        echo "Вы успешно авторизовались в системе. Сейчас вы будете переадресованы на главную страницу сайта.";
        header('Refresh: 2; URL = ../index.php');
    }
}
function auth($auth, $login){
    if ($auth = true){
        echo 'Добро пожаловать' . $login;
    } else {
        echo '<a href="inc/login.php">Войти</a>';
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
    <title>Document</title>
</head>
<body>
<style>
    .auth{
        width: 300px;
        text-align: center;
        margin: auto;
        margin-top: 100px;
        background-color: lightgray;
    }

    .title{
        font-size: 20px;
    }
</style>
<div class="auth">
    <form method="post">
        <fieldset><p class="title"><b>Форма авторизации</b></p>
        <p><label>Логин</label> <input type="text" name="text" id="login"><br></p>
        <p><label>Пароль</label> <input type="password" name="password" id="password"><br></p>
            <p><input name="" type="submit"></p>
        </fieldset>
    </form>
</div>
</body>
</html>

<?php
$_SESSION['auth'] = $auth;
$_SESSION['login'] = $login;
?>