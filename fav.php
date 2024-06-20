<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script defer src="../script/script.js"></script>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
</head> 
<body>
<header>
<?php include("../modules/header.php")?>
</header>
    <main class="container mt-5">
    <?php 
$link = mysqli_connect('localhost', 'root', '', 'kursovaiKrivasheevaAA');
$user = intval($_COOKIE['id_user']); 
$sql = "SELECT * FROM favorites INNER JOIN goods ON favorites.id_goods = goods.id_goods WHERE favorites.id_user = $user";
$result = mysqli_query($link, $sql);

if (!$result || mysqli_num_rows($result) == 0) {
    echo "У вас пока нет избранных";
} else {
    while ($row = mysqli_fetch_array($result)) {
        ?>
        <div class="card_lk_broninew">
            <div class="card  card_favorites" style="width: 18rem;">
                <img src="../img/<?=$row['img']?>" class="card-img-top" alt="<?=$row['name']?>">
                <div class="card-body">
                    <h5 class="card-title"><?=$row['name']?></h5>
                    <p class="card-text">Цена: <?=$row['price']?> руб.</p>
                    <p class="card-text">Описание: <?=$row['description']?></p>
                    <a class="delete_acc" href="/php/redact/delete_favorites.php?id=<?=$row['id_favorites']?>">Удалить</a>
                </div>
            </div>
        </div>
        <?php
    }
}
?>
    </main>
    <?php include("../modules/footer.php")?>
</body>
</html>