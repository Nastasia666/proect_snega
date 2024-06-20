<?php
$mysql = new mysqli('localhost', 'root', '', 'kursovaiKrivasheevaAA');

$id = $_GET['id'];

$mysql->query("DELETE FROM `favorites` WHERE `id_favorites` = '$id'");

$mysql->close();

header('Location: /pages/acc.php')
?>