<?php

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
<form action="" method="post">
    <h1>Задание 1</h1>
    <p>
        <label for="name">Имя</label>
        <input type="text" id="name" name="name">
    </p>
    <p>
        <label for="aboutMe">О себе</label>
        <textarea type="text" name="aboutMe" id="aboutMe"></textarea>
    </p>
    <div>
        <p>Ваш любимый цвет</p>
        <label>Красный</label>
        <input type="radio" name="color" value="red">
        <label>Синий</label>
        <input type="radio" name="color" value="blue">
        <label>Зеленый</label>
        <input type="radio" name="color" value="green">
    </div>
    <div>
        <p>Любимое время года</p>
        <label>Зима</label>
        <input type="checkbox" name="check[]" value="winter">
        <label>Весна</label>
        <input type="checkbox" name="check[]" value="spring">
        <label>Лето</label>
        <input type="checkbox" name="check[]" value="summer">
        <label>Осень</label>
        <input type="checkbox" name="check[]" value="autumn">
    </div>
    <input type="submit" name="submit">
    <?
        $submit = $_POST['submit'];
        if (isset($submit)){
            echo $_POST['name'] . '<br>' .
                 $_POST['aboutMe'];
            echo $_POST['color'] . '<br>';
            print_r($_POST['check']);
        }
    ?>
</form><br>
<h1>Задание 2-3</h1>
<form method="post">
    Логин<input type="text" name="login"><br>
    Пароль<input type="password" name="password"><br>
    <input type="submit" value="Авторизация">
    <?
    $logins = ['test1', 'test2'];
    $passwords = ['test1', 'test2'];
    if (!empty($_POST)) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        if (in_array($login, $logins) && $password == $passwords[array_search($login, $logins)]){
            $auth = true;
        } else $auth = false;

        if (isset($_POST['password']) && in_array($_POST['password'], $_POST)) {
            $_POST['password'] = md5($_POST['password']);
        }

        if ($auth){
            echo 'Доступ открыт!';
        }
        print_r($_POST);
    }
    ?>
</form>
<h1>Задание 5</h1>
<form>
    Логин<input type="text" name="login"><br>
    Пароль<input type="password" name="password"><br>
    <input type="submit" value="Авторизация">
    <?
    if (!empty($_POST)) {
        $login = $_POST['login']; //Типо сохранение логина на сервере
        $password = $_POST['password'];//Типо сохранение пароля на сервере

        if (isset($_POST['password']) && in_array($_POST['password'], $_POST)) {
            $_POST['password'] = md5($_POST['password']);
        }
        print_r($_POST);
    }
    ?>
</form>
<h1>Задание 6</h1>
<form method="get">
    <div>
        <p>Анкета</p>
        <label>1. Считаете ли Вы, что у многих ваших знакомых хороший характер? </label>
        Да <input type="radio" name="num1" value="yes" checked> Нет<input type="radio" name="num1" value="no"><br>

        <label>2. Раздражают ли Вас мелкие повседневные обязанности?</label>
        Да <input type="radio" name="num2" value="yes" checked> Нет<input type="radio" name="num2" value="no"><br>

        <label>3. Верите ли Вы, что ваши друзья преданы Вам?</label>
        Да <input type="radio" name="num3" value="yes" checked> Нет<input type="radio" name="num3" value="no"><br>

        <label>4. Неприятно ли Вам, когда незнакомый человек делает Вам замечание? </label>
        Да <input type="radio" name="num4" value="yes" checked> Нет<input type="radio" name="num4" value="no"><br>

        <label>5. Способны ли Вы ударить собаку или кошку? </label>
        Да <input type="radio" name="num5" value="yes" checked> Нет<input type="radio" name="num5" value="no"><br>

        <label>6. Часто ли Вы принимаете лекарства? </label>
        Да <input type="radio" name="num6" value="yes" checked> Нет<input type="radio" name="num6" value="no"><br>

        <label>7. Часто ли Вы меняете магазин, в который ходите за продуктами? </label>
        Да <input type="radio" name="num7" value="yes" checked> Нет<input type="radio" name="num7" value="no"><br>

        <label>8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись? </label>
        Да <input type="radio" name="num8" value="yes" checked> Нет<input type="radio" name="num8" value="no"><br>

        <label>9. Тяготят ли Вас общественные обязанности? </label>
        Да <input type="radio" name="num9" value="yes" checked> Нет<input type="radio" name="num9" value="no"><br>

        <label>10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства? </label>
        Да <input type="radio" name="num10" value="yes" checked> Нет<input type="radio" name="num10" value="no"><br>

        <label>11. Часто ли Вам приходят в голову мысли о Вашей невезучести?</label>
        Да <input type="radio" name="num11" value="yes" checked> Нет<input type="radio" name="num11" value="no"><br>

        <label>12. Сохранилась ли у Вас фигура по сравнению с прошлым? ь</label>
        Да <input type="radio" name="num12" value="yes" checked> Нет<input type="radio" name="num12" value="no"><br>

        <label>13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей? </label>
        Да <input type="radio" name="num13" value="yes" checked> Нет<input type="radio" name="num13" value="no"><br>

        <label>14. Нравится ли Вам семейная жизнь? </label>
        Да <input type="radio" name="num14" value="yes" checked> Нет<input type="radio" name="num14" value="no"><br>

        <label>15. Злопамятны ли Вы? </label>
        Да <input type="radio" name="num15" value="yes" checked> Нет<input type="radio" name="num15" value="no"><br>

        <label>16. Находите ли Вы, что стоит погода, типичная для данного времени года? </label>
        Да <input type="radio" name="num16" value="yes" checked> Нет<input type="radio" name="num16" value="no"><br>

        <label>17. Случается ли Вам с утра быть в плохом настроении?</label>
        Да <input type="radio" name="num17" value="yes" checked> Нет<input type="radio" name="num17" value="no"><br>

        <label>18. Раздражает ли Вас современная живопись? </label>
        Да <input type="radio" name="num18" value="yes" checked> Нет<input type="radio" name="num18" value="no"><br>

        <label>19. Надоедает ли Вам присутствие чужих детей в доме более одного часа?</label>
        Да <input type="radio" name="num19" value="yes" checked> Нет<input type="radio" name="num19" value="no"><br>

        <input type="submit" name="enter">
    </div>
    <?
    $sum = 0;
    $enter = $_GET['submit'];
    if (!empty($_GET)){
        if ($_GET['num1'] == 'no'){
            $sum += 1;
        } else $sum = $sum;
        if ($_GET['num2'] == 'no'){
            $sum += 1;
        } else $sum = $sum;
        if ($_GET['num3'] == 'yes'){
            $sum += 1;
        } else $sum = $sum;
        if ($_GET['num4'] == 'no'){
            $sum += 1;
        } else $sum = $sum;
        if ($_GET['num5'] == 'no'){
            $sum += 1;
        } else $sum = $sum;
        if ($_GET['num6'] == 'no'){
            $sum += 1;
        } else $sum = $sum;
        if ($_GET['num7'] == 'no'){
            $sum += 1;
        } else $sum = $sum;
        if ($_GET['num8'] == 'no'){
            $sum += 1;
        } else $sum = $sum;
        if ($_GET['num9'] == 'yes'){
            $sum += 1;
        } else $sum = $sum;
        if ($_GET['num10'] == 'yes'){
            $sum += 1;
        } else $sum = $sum;
        if ($_GET['num11'] == 'no'){
            $sum += 1;
        } else $sum = $sum;
        if ($_GET['num12'] == 'no'){
            $sum += 1;
        } else $sum = $sum;
        if ($_GET['num13'] == 'yes'){
            $sum += 1;
        } else $sum = $sum;
        if ($_GET['num14'] == 'yes'){
            $sum += 1;
        } else $sum = $sum;
        if ($_GET['num15'] == 'no'){
            $sum += 1;
        } else $sum = $sum;
        if ($_GET['num16'] == 'no'){
            $sum += 1;
        } else $sum = $sum;
        if ($_GET['num17'] == 'no'){
            $sum += 1;
        } else $sum = $sum;
        if ($_GET['num18'] == 'no'){
            $sum += 1;
        } else $sum = $sum;
        if ($_GET['num19'] == 'yes'){
            $sum += 1;
        } else $sum = $sum;
    }
    if ($sum > 15){
        echo "У вас покладистый характер";
    } elseif ($sum > 8 && $sum <= 15){
        echo "Вы не лишены недостатков, но с вами можно ладить";
    } elseif ($sum <= 8){
        echo "Вашим друзьям можно посочувствовать";
    }
    ?>
</form>
</body>
</html>
