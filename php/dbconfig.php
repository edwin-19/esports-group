<?php

session_start();

$DB_host = "localhost";
$DB_name = "test";
$DB_user = "root";
$DB_pass = "";

try {
   $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
   $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $ex) {
  echo $ex->getMessage();
}

include_once "user.php";

$user = new User($DB_con);
 ?>
