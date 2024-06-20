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
    <main>
    <container class="container container_img">
    <div class="container text-center">
  <div class="row align-items-start img_size">

  <!-- ПЕРВЫЕ 2 КАРТОЧКИ -->

<!--прописно для товарных карточек в бд-->
    <?php 
     $id = $_GET['id'];
    $mysql = new mysqli('localhost', 'root', '', 'kursovaiKrivasheevaAA');
    $card = $mysql->query("SELECT * FROM `goods` WHERE `id_goods`='$id'");
    $cards = mysqli_fetch_assoc($card);

    ?>
<!--прописно для товарных карточек в бд-->
            <form action="../php/redact/red.php" method="POST">
              <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">ID</label>
                <input type="text" name="id_goods"class="form-control" id="exampleInputEmail1" value="<?=$cards['id_goods']?>" readonly>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1" class="form-label">Наименование</label>
                <input type="text" name="name" class="form-control" id="exampleInputPassword1" value="<?=$cards['name']?>">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1" class="form-label">Цена</label>
                <input type="text" name="price" class="form-control" id="exampleInputPassword1" value="<?=$cards['price']?>">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1" class="form-label">Описание</label>
                <input type="text" name="description" class="form-control" id="exampleInputPassword1" value="<?=$cards['description']?>">
              </div>
              <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
</container>
    </main>
    <?php include("../modules/footer.php")?>
</body>
</html>