<?php

class registers
{
 private $db_con;

 public function __construct($hostname, $username, $password, $dbname){
     $this->db_con = mysqli_connect($hostname, $username, $password, $dbname);
 }

 public function checkLoginUser($loginUser){
     $query = mysqli_query($this->db_con, "SELECT login FROM `users`");
     $arraySelect = mysqli_fetch_all($query, MYSQLI_ASSOC);

     foreach ($arraySelect as $value) {
         if ($value['login'] = $loginUser){
             return false;
         }
     }
     return true;
 }

 public function checkUser($loginUser, $passwordUser): bool {
     $passwordUser = hash("md2", $passwordUser);
     $query = mysqli_query($this->db_con, "SELECT login FROM `users`");
     $arraySelect = mysqli_fetch_all($query, MYSQLI_ASSOC);

     foreach ($arraySelect as $value){
         if ($value['login'] == $loginUser and $value['password'] == $passwordUser){
             return false;
         }
     }
     return true;
 }
 public function addUsers($loginUser, $passwordUser){
     $passwordUser = hash("md2", $passwordUser);
     mysqli_query($this->db_con, "INSERT INTO `users`(`id_users`, `login`, `password`) VALUES (NULL, '$loginUser', '$passwordUser')");
 }
}