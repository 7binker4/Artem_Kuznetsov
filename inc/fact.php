<?php
session_start();
$index="В последний раз вы были на fact.php";
$_SESSION["page"]=array();
if(isset($_SESSION["page"]))
{
    if(count($_SESSION["page"])<1)
    {
        $_SESSION["page"][]=$index;
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
    <h1>FACT DIGITAL</h1>
    <a href="../index.php">Вернуться на главную</a>
</body>
</html>