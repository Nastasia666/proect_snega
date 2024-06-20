<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<header>
<?php include("../modules/header.php")?>
</header>
    <main>
    <img src="/img/appartament_banner_nom.png" alt="" class="bannernomer">
    <?php 
    $link = mysqli_connect('localhost', 'root','', 'kursovaiKrivasheevaAA');
    $id = $_GET['id'];
    $sql = "SELECT * FROM goods WHERE id_goods = '$id'";
    $result = mysqli_query ($link, $sql);
    $card = mysqli_fetch_assoc($result);
    ?>
    
    <div class="container spisok_nomer text-center booking1">
      <?php if($_COOKIE ['role'] == 1): ?>
      <div class="row row_nomer2">
          <form action="/php/create_booking.php" method="post" name="form1" class="inf_broni">
            
          <div class="col booking align-items-center">
          <p class="bron">Заезд</p>
            <input type="date" class="date_zaezd name_block" name="start_date">
          </div>
          <input type="hidden" name="id" value="<?=$card['id_goods']?>">
          <input type="hidden" name="price" value="<?=$card['price']?>">
          
          <div class="col booking">
          <p class="bron">Выезд</p>
            <input type="date" class="date_vezd name_block" name="end_date" атрибуты>
          </div>
          
          <div class="col booking">
            
            <p>
            <p class="bron">Количество людей</p>
            <select name="people" class="people_inf_date">
              <option class="name_block">Количество</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select></p>

          </div>
          <div class="col booking">
            
            <p>
            <p class="bron">Оплата</p>  
            <select name="paymant" class="people_inf_date">
              <option ><p class="name_block">Оплата</p></option>
              <option value="Карта">Карта</option>
              <option value="Наличными">Наличными</option>
              <option value="Призаезде">При заезде</option>
              <option value="Привыезде">При выезде</option>
              <option value="Онлайн">Онлайн</option>
            </select></p>

          </div>
        <div class="col knopka_brooking_color text-center">
          <button class="knopka_brooking"><p class="broni">Забронировать</p></button>
        </div>
          </form>
      </div>
      <?php else:?>
        <div class="row row_nomer2">
          <form name="form1" class="inf_broni">
          <div class="col booking">
            <p class="bron">Заезд</p>
            <input type="date" class="date_zaezd" name="start_date">
          </div>
          <input type="hidden" name="id" value="<?=$card['id_goods']?>">
          <input type="hidden" name="price" value="<?=$card['price']?>">
          <div class="col booking">
            <p class="bron">Выезд</p>
            <input type="date" class="date_vezd" name="end_date" атрибуты>
          </div>
          <div class="col booking">
            
            <p class="bron">Количество гостей</p>
            <p><select name="people" class="people_inf_date">
              <option>Количество</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select></p>
            </div>
          <div class="col booking">
            <p class="bron">Оплата</p>
            <p><select name="paymant" class="people_inf_date">
              <option>Оплата</option>
              <option value="Карта">Карта</option>
              <option value="Наличными">Наличными</option>
              <option value="Призаезде">При заезде</option>
              <option value="Привыезде">При выезде</option>
              <option value="Онлайн">Онлайн</option>
            </select></p>

          </div>
        <div class="col knopka_brooking_color">
          <button class="knopka_brooking"><a href="../pages/pop.php" class="bron">Забронировать</a></button>
        </div>
        </form>
      </div>
        <?php endif;?>
    </div>
    <container class="container container_img">
        <div class="container text-center">
      <div class="row align-items-center img_size">
    <?php 
    $link = mysqli_connect('localhost', 'root','', 'kursovaiKrivasheevaAA');
    $id = $_GET['id'];
    $sql = "SELECT * FROM goods WHERE id_goods = '$id'";
    $result = mysqli_query ($link, $sql);
    $card = mysqli_fetch_assoc($result);
    ?>

          <div class="col-6 bloc_img_nomer2">
              <img src="../img/<?=$card['img']?>" alt=""><!--прописно для товарных карточек в бд-->
          </div>
          <div class="col-6 bloc_inf_nomer2">
          <p class="text_akva_zagol1"><b><?=$card['name']?></b></p> <!--прописно для товарных карточек в бд-->
            <div class="container text-center info_block">
        <div class="row row_colonka_text">
          <div class="col">
          <p class="text_akva_podtext22">
          <?=$card['description']?><!--прописно для товарных карточек в бд-->
          </p>
          </div>
        </div>
      </div>
      <p class="summaa"><?=$card['price']?> руб.</p><!--прописно для товарных карточек в бд-->
      
      <div class="container text-center booking1 boukinj">
    <?php if (isset($_COOKIE['role']) && $_COOKIE['role'] == 1): ?>
        <a href="../php/add_to_favorites.php?id_goods=<? echo htmlspecialchars($card['id_goods']) ?>"><img src="/img/иконка избранного.png" alt="Избранное" class="favourites"></a>
    <?php else: ?>
        <a href="../pages/pop2.php?id_goods=<? echo htmlspecialchars($card['id_goods']) ?>"><img src="/img/иконка избранного.png" alt="Избранное" class="favourites"></a>
    <?php endif; ?>
</div>
      </div>
    </main>
    <?php include("../modules/footer.php")?>
</body>
</html>