<?php 
$id = filter_var(trim($_POST['id_goods']));
$name = filter_var(trim($_POST['name']));
$price = filter_var(trim($_POST['price']));
$description = filter_var(trim($_POST['description']));

$mysql = new mysqli('localhost', 'root', '', 'kursovaiKrivasheevaAA');

$mysql->query("UPDATE `goods` SET `name` = '$name', `price` = '$price', `description` = '$description' WHERE `goods`.`id_goods` = '$id';");
$mysql->close();
header('Location: /pages/acc.php');
?>