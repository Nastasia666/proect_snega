<?php
session_start();
$link = mysqli_connect('localhost', 'root', '', 'kursovaiKrivasheevaAA');

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

$id_goods = intval($_GET['id_goods']);
$id_user = intval($_COOKIE['id_user']);

$sql_check = "SELECT * FROM favorites WHERE id_goods = ? AND id_user = ?";
$stmt_check = mysqli_prepare($link, $sql_check);
mysqli_stmt_bind_param($stmt_check, "ii", $id_goods, $id_user);
mysqli_stmt_execute($stmt_check);
mysqli_stmt_store_result($stmt_check);

if (mysqli_stmt_num_rows($stmt_check) == 0) {
    $sql_insert = "INSERT INTO favorites (id_goods, id_user) VALUES (?, ?)";
    $stmt_insert = mysqli_prepare($link, $sql_insert);
    mysqli_stmt_bind_param($stmt_insert, "ii", $id_goods, $id_user);
    if (mysqli_stmt_execute($stmt_insert)) {
        header("Location: ../pages/fav.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($link);
    }
    mysqli_stmt_close($stmt_insert);
} else {
    echo "Этот товар уже в избранном.";
}

mysqli_stmt_close($stmt_check);
?>