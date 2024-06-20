<?php
$mysql = new mysqli('localhost', 'root', '', 'kursovaiKrivasheevaAA');

$id = $_GET['id'];

$mysql->query("DELETE FROM `goods` WHERE `id_goods` = '$id'");

$mysql->close();

header('Location: /pages/acc.php')
?>