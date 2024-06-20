<?php
$start_date = filter_var(trim($_POST['start_date']));
$end_date = filter_var(trim($_POST['end_date']));
$people = filter_var(trim($_POST['people']));
$paymant = filter_var(trim($_POST['paymant']));
$id = $_POST['id'];
$price = $_POST['price'];
$user = $_COOKIE['id_user'];

include('../php/db.php');

$mysql->query("INSERT INTO `broni` (`id_goods`, `id_user`, `price`, `start_date`, `end_date`, `people`, `paymant`) 
VALUES ('$id', '$user', '$price', '$start_date', '$end_date', '$people', '$paymant');");
$mysql->close();
header('Location: /pages/acc.php');
?>