<?php
//Удаление сессии
session_start();
 session_unset();
 header('Refresh: 0; URL = ../index.php');
?>