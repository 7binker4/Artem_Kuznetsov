<?
// Скрипт проверки

// Соединямся с БД
$hostname = 'localhost';
$username = 'Artem';
$password = '123';
$dbname = 'fact';
$db_con = mysqli_connect($hostname, $username, $password, $dbname);
if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
{
    $query = mysqli_query($dbname, "SELECT *,INET_NTOA(id_user) AS id_user FROM user WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");
    $userdata = mysqli_fetch_assoc($query);

    if(($userdata['user_hash'] !== $_COOKIE['hash']) or ($userdata['user_id'] !== $_COOKIE['id'])){
        setcookie("id", "", time() - 3600*24*30*12, "/");
        setcookie("hash", "", time() - 3600*24*30*12, "/", null, null, true); // httponly !!!
        print "Хм, что-то не получилось";
    }
    else
    {
        print "Привет, ".$userdata['user_login'].". Всё работает!";
    }
}
else
{
    print "Включите куки";
}
?>