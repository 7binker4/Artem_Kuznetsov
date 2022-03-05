<?//
require_once 'registers.php';
//// Страница авторизации
//// Соединямся с БД
//$hostname = 'localhost';
//$username = 'Artem';
//$password = '123';
//$dbname = 'fact';
//$db_con = mysqli_connect($hostname, $username, $password, $dbname);
//mysqli_set_charset($db_con, "utf8");
//$select = mysqli_query($db_con, "SELECT * FROM `users`");
//$select_array = mysqli_fetch_all($select);
//print_r($select_array);
//
//foreach($select_array as $key){
//    foreach ($key as $value => $item){
//        switch ($value){
//            case 'login':
//                $logins[] = $item;
//                break;
//            case 'upassword':
//                $upasswords[] = $item;
//                break;
//            default;
//                break;
//        }
//    }
//}
//
//    $data = $_POST;
//if (isset($data['enter'])){
//    $errors = [];
//    if (trim($data['login']) == ''){
//        $errors[] = 'Enter a login';
//    }
//    if (trim($data['upassword']) ==''){
//        $errors = 'Enter a password';
//    }
//    if (empty($errors)){
//        for ($i=0; $i < count($logins); $i++){
//            if (trim($data['login']) == $logins[$i] && $data['upassword'] == $upasswords){
//                setcookie('login', strtoupper($logins[$i]), time() + 600);
//                header('Refresh: 2; URL = ../index.php');
//                exit();
//            } else { echo "Ошибка авторизации";}
//        }
//    }
//}
//?>
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
<!--    <form method="post" class="auth">-->
<!--        <div><input type="text" name="login" value="--><?// echo @$data['login'];?><!--"></div>-->
<!--        <div><input type="password" name="upassword" value="--><?// echo @$data['upassword']; ?><!--"></div>-->
<!--        <div><input type="submit" name="enter" value="Autharisation"></div>-->
<!--        <a href="reg.php">Registration</a>-->
<!--    </form>-->
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
    <h3>LogIn</h3>
    <div><input type="text" name="login" placeholder="Login" required></div>
    <div><input type="password" name="password" placeholder="Password" required></div>
    <button type="submit" name="submit">Войти</button>
    <a href="reg.php">Registration</a>
</form>
<p>
    <?php
    $submit = $_POST['submit'];

    if (isset($submit)){
        $hostname = 'localhost';
        $username = 'Artem';
        $password = '123';
        $dbname = 'fact';
        $register = new registers($hostname, $username, $password, $dbname);
        $result = $register->checkUser($_POST['login'], $_POST['password']);
        if ($result){
            $loginUser = $_POST['login'];
            $url = "user.php";
            setcookie("Name", $_POST['login'], time() + 600);
            echo "Вы успешно авторизовались в системе. Сейчас вы будете переадресованы на главную страницу сайта.";
            header('Refresh: 2; URL = ../index.php');
            exit();
        } else {
            echo "Error";
        }
 }
    ?>
</p>
</body>
</html>
