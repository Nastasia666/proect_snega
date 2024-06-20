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

    <container class="container container_img">
        <div class="container text-center">
      <div class="row align-items-center img_size">

  <!-- ПЕРВЫЕ 2 КАРТОЧКИ -->

<!--прописно для товарных карточек в бд-->
    <?php 
    $link = mysqli_connect('localhost', 'root','', 'kursovaiKrivasheevaAA');
    $sql = "SELECT * FROM `goods`";
    $result = mysqli_query ($link, $sql);
    ?>


    <?php while ($row = mysqli_fetch_array($result)): 
    
    if($row['id_goods'] %2 == 1):// прописно для товарных карточек, чтобы они стояли в шахматном порядке в бд

    ?>
<!--прописно для товарных карточек в бд-->

    
          <div class="col-6 block1 bk12">
          <img src="../img/<?=$row['img']?>" alt="" class="im_card_nomer"><!--прописно для товарных карточек в бд-->


          <div class="col-6 block222">
          <p class="text_akva_zagol1"><b><?=$row['name']?></b></p> <!--прописно для товарных карточек в бд-->
            <div class="container text-center info_block">
        <div class="row row_colonka_text">
          <div class="col">
          <p class="text_akva_podtext22">
          <?=$row['description']?><!--прописно для товарных карточек в бд-->
          </p>
          </div>
        </div>
      </div>
      <p class="summa"><?=$row['price']?> руб.</p><!--прописно для товарных карточек в бд-->
      
      <button class="knopka_kupit">
        <a href="../pages/nomer2.php?id=<?=$row['id_goods']?>">Забронировать</a>
      </button>
      
        </div>

          </div>

          <div class="col-6 block2">
          <p class="text_akva_zagol1"><b><?=$row['name']?></b></p> <!--прописно для товарных карточек в бд-->
            <div class="container text-center info_block">
        <div class="row row_colonka_text">
          <div class="col">
          <p class="text_akva_podtext22">
          <?=$row['description']?><!--прописно для товарных карточек в бд-->
          </p>
          </div>
        </div>
      </div>
      <p class="summa"><?=$row['price']?> руб.</p><!--прописно для товарных карточек в бд-->
      
      <button class="knopka_kupit">
        <a href="../pages/nomer2.php?id=<?=$row['id_goods']?>">Забронировать</a>
      </button>

        </div>

       <?php else: ?><!--прописно для товарных карточек, чтобы они стояли в шахматном порядке в бд -->

      <div class="col-6 block2">
        <p class="text_akva_zagol1"><b><?=$row['name']?></b></p>
        <div class="container text-center info_block">
          <div class="row row_colonka_text">
            <div class="col">
              <p class="text_akva_podtext22">
                <?=$row['description']?><!--прописно для товарных карточек в бд-->
              </p>
            </div>
          </div>
        </div>
        <p class="summa"><?=$row['price']?> руб.</p>
        
        <button class="knopka_kupit"><a href="../pages/nomer2.php?id=<?=$row['id_goods']?>">Забронировать</a></button>
      </div>


      <div class="col-6 block1 bk12">
        <img src="../img/<?=$row['img']?>" alt="" class="im_card_nomer">
        <div class="col-6 block222">
          <p class="text_akva_zagol1"><b><?=$row['name']?></b></p> <!--прописно для товарных карточек в бд-->
            <div class="container text-center info_block">
        <div class="row row_colonka_text">
          <div class="col">
          <p class="text_akva_podtext22">
          <?=$row['description']?><!--прописно для товарных карточек в бд-->
          </p>
          </div>
        </div>
      </div>
      <p class="summa"><?=$row['price']?> руб.</p><!--прописно для товарных карточек в бд-->
      
      <button class="knopka_kupit">
        <a href="../pages/nomer2.php?id=<?=$row['id_goods']?>">Забронировать</a>
      </button>
      
        </div>
      </div>

      <?php endif; ?><!--прописно для товарных карточек, чтобы они стояли в шахматном порядке в бд -->
<?php endwhile; ?><!--прописно для товарных карточек в бд-->
  </div>
</div>
</container>
    </main>
    <?php include("../modules/footer.php")?>
</body>
</html>