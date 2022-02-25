<?php
$text = $_GET['text'];
file_put_contents('text.txt', $text);
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
<div>
    <h4>Задание №1</h4>
    <form>
        <label>Введите текст:</label>
        <input type="text" name="text">
        <input type="submit">
    </form>
</div>
<div>
    <h4>Задание №2</h4>
    <? if (mkdir('test')){
        echo "Папка создана";
    } else "Ошибка" ?>
</div>
<div>
    <h4>Задание №3</h4>
    <?
    $file = fopen('file.txt', 'r');
    $text = fread($file, 1);
    if ($text != null){
        $text = fread($file, 16);
        echo $text;
    }
    ?>
</div>
<div>
    <h4>Задание №4</h4>
    <?
    $str = file_put_contents('.', 'text2.txt');
    $str1 = file_put_contents('.', 'text3.txt');
    $str2 = explode(' ', $str);
    $str3 = explode(' ', $str1);
    $result = array_merge($str2, $str3);
    $result2 = array_unique($result);
    file_put_contents('text4.txt', $result2);
    ?>
</div>
</body>
</html>
