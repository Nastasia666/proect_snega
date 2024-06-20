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
        $link = mysqli_connect('localhost', 'root','', 'kursovaiKrivasheevaAA');
        $user = $_COOKIE['id_user'];
        $sql = "SELECT * FROM `broni` INNER JOIN `goods` ON broni.id_goods = goods.id_goods WHERE broni.id_user = '$user'";
        $result = mysqli_query ($link, $sql);
        ?>


        <?php while ($row = mysqli_fetch_array($result)): ?>
            <div class="card_lk_broninew">
            <div class="card card_broni" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <img src="../img/<?=$row['img']?>" alt="" class="card_broni_lk">
                <h5>Наименование:<?=$row['name']?></h5>
                <h5>Цена:<?=$row['price']?></h5>
                <h5>Дата заезда:<?=$row['start_date']?></h5>
                <h5>Дата выезда:<?=$row['end_date']?></h5>
                <h5>Кол-во человек:<?=$row['people']?></h5>
            </div>
            </div>
            </div>
        <?php endwhile; ?>
    </main>
    <?php include("../modules/footer.php")?>
</body>
</html>