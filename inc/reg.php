<?//
require_once 'registers.php';

//// Страница регистрации нового пользователя
//
//// Соединямся с БД
//$hostname = 'localhost';
//$username = 'Artem';
//$password = '123';
//$dbname = 'fact';
//$db_con = mysqli_connect($hostname, $username, $password, $dbname);
//
//$data = $_POST;
//
//if (isset($data['enter'])){
//    if ($data['upassword'] == $data['urpassword']){
//        $login = $data['login'];
//        $urpassword = $data['urpassword'];
//        $upassword = $data['upassword'];
//        $query = "INSERT INTO `users`(`id_users`, `login`, `password`) VALUES (NULL, '$login', '$upassword')";
//        $insert = mysqli_query($db_con, $query);
//        echo "Регистрация прошла успешно";
//    } else echo "Ошибка при вводе данных";
//}
//?>
<!---->
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--<form method="POST" class="reg">-->
<!--    <h4>Регистрация</h4>-->
<!--    <div><input type="text" name="login" value="--><?// echo @$data['login']; ?><!--" placeholder="Login"></div>-->
<!--    <div><input type="password" name="upassword" value="--><?// echo @$data['upassword']; ?><!--" placeholder="Password"></div>-->
<!--    <div><input type="password" name="urpassword" value="--><?// echo @$data['urpassword']; ?><!--" placeholder="Repeat Password"></div>-->
<!--    <div><input type="submit" name="enter" value="Registration"></div>-->
<!--    <a href="login.php" target="_blank">Авторизация</a>-->
<!--</form>-->
<!--</body>-->
<!--</html>-->

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
<form method="post">
    <h3>Registration</h3>
    <div><input type="text" name="login" placeholder="Login" required></div>
    <div><input type="password" name="password" placeholder="Password" required></div>
    <button type="submit">Регистрация</button>
    <a href="login.php">Autharisation</a>

</form>
<p>
    <?php
    if (isset($_POST['submit'])){
        $passwordUser = hash("md2", $_POST['password']);
        $hostname = 'localhost';
        $username = 'Artem';
        $password = '123';
        $dbname = 'fact';

        $register = new registers($hostname, $username, $password, $dbname);
        $result = $register->checkLoginUser($_POST['login']);
        if (!$result){
            echo "Логин занят";
        } else {
            $query = $register->addUsers($_POST['login'], $passwordUser);
            echo "Ргеистрация прошла упешно!";
        }
    }
    ?>
</p>
</body>
</html>

