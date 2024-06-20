<?php
$name = filter_var(trim($_POST['name']));
$surname = filter_var(trim($_POST['surname']));
$email = filter_var(trim($_POST['email']));
$password = filter_var(trim($_POST['password']));

include('../php/db.php');

$password = md5($password."test");

$mysql->query("INSERT INTO `user` (`name`, `surname`, `email`, `password`, `role`) 
VALUES ('$name', '$surname', '$email', '$password', 1);");
$mysql->close();
header('Location: ../pages/reg_hellow.php');


?>