<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<?php include("../modules/header.php")?>
    <main class="container">
       <!-- Прописано для личного кб, администрация это 2, прописывали бд. 
       При авторизации админа, он видет 2, то открывает личный кабинет админа -->
       <?php if ($_COOKIE['role'] == 2):?>
        <?php    
        $link = mysqli_connect ('localhost', 'root', '', 'kursovaiKrivasheevaAA');
        $sql = "SELECT * FROM `goods`";
        $result = mysqli_query ($link, $sql)
        ?>
        <h2>Личный кабинет администатора</h2>
        <div class="container ">
  <div class="row">
    
    <div class="col-sm personal_data">
    
    </div>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Название</th>
      <th scope="col">Описание</th>
      <th scope="col">Цена</th>
      <th scope="col">Фото</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = mysqli_fetch_array($result)):?>
    <tr>
      <td><?=$row['id_goods']?></td>
      <td><?=$row['name']?></td>
      <td><?=$row['description']?></td>
      <td><?=$row['price']?></td>
      <td><img class="photo_nomer" src="../img/<?=$row['img']?>"></td>
      <td><a class="delete_acc" href="/php/redact/delete.php?id=<?=$row['id_goods']?>">Удалить</a></td>
      <td><a class="red_acc" href="../pages/redact.php?id=<?=$row['id_goods']?>">Редактировать</a></td>
    </tr>
    <?php endwhile;?>
  </tbody>
</table>
<div class="container d-flex justify-content-center mt-5 dobbi">
  <a  href="/pages/add.php">Добавить номера</a>
</div>
<?php else:?>


        <div class="container container_accc">
  <div class="row" style="margin-top: 40px;">
    <div class="col-sm personal_data">
    <p class="hi"><b>Добро пожаловать в ваш <br>
личный кабинет!</b></p>
    </div>
  </div>
  
  <div class="ikonki_acc justify-content-center">
  <p class="forma forma_zagol justify-content-center"><b>Форма информации</b></p>

  <div class="container text-center acc_inf_user">
  <div class="row align-items-center justify-content-center">
    <div class="col bloki_acc_adap">
    <div class="otzov">
  <a href="../pages/fav.php" class="name_bron"><img src="/img/избранное.png" alt="" class="favourites_acc"></a>
    <p class="ozovik"><a href="../pages/fav.php" class="name_bron">Избранное</a></p>
  </div>
    </div>
    <div class="col bloki_acc_adap">
    <div class="taxi">
    <img src="/img/данные.png" alt="" class="data">
    <p class="taxiki"><a href="" class="inf_user" data-bs-toggle="modal" data-bs-target="#exampleModal3">Данные</a></p></p>
  </div>
        <?php  
            $link = mysqli_connect('localhost', 'root', '', 'kursovaiKrivasheevaAA'); 
            $id_user = $_COOKIE['id_user']; 
            $sql = "SELECT * FROM `user` WHERE `id_user` = '$id_user'"; 
            $result = mysqli_query($link, $sql); 
            $card = mysqli_fetch_assoc($result);
        ?>
        <?=$card['login']?> 
<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel3">Данные</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="name">Имя:<?=$card['name']?></p>
        <p class="surname">Фамилия:<?=$card['surname']?></p>
        <p class="email">Почта:<?=$card['email']?></p>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
    </div>
    <div class="col bloki_acc_adap">
    <div class="phone">
            <a href="../pages/broni.php" class="name_bron"><img src="/img/бронь.png" alt="" class="booking2"></a>
              <p class="broni_namess"><a href="../pages/broni.php" class="name_bron">Мои брони</a></p>
            </div>
    </div>
    <div class="col bloki_acc_adap yslug_acc_p">
    <div class="yslug">
            <img src="/img/услуги.png" alt="" class="ysl">
            <p class="ozovik" data-bs-toggle="modal" data-bs-target="#exampleModal6">Услуги</p>
          </div>
    </div>
    <div class="col bloki_acc_adap">
    <div class="yslug2">
          <a class="text_a_ozovil2" href="../pages/my_uslugi.php"><img src="../img/my_uslug.png" alt="" class="ysl"></a>
            <p class="ozovik2"><a class="text_a_ozovil2" href="../pages/my_uslugi.php">Мои Услуги</a></p>
          </div>
    </div>
  </div>
</div>
          <!-- Modal -->
          <div class="modal fade modal_uusluga" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel6" aria-hidden="true">
            <div class="modal-dialog modal_uusluga">
              <div class="modal-content modal_uusluga">
                <div class="modal-header modal_uusluga">
                  <h3 class="modal-title modal_uusluga" id="exampleModalLabel6">Услуги</h3>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="../pages/acc.php" method="POST">
                <p><b>Такси</b><br>
                Заказ такси по номеру:  8 800 200 8890.<br>
                Цена за расстоние и другие до. услуги узнаются по номеру телефону<br>
                </p>
             
                <?php
                $mysql = mysqli_connect('localhost', 'root', '', 'kursovaiKrivasheevaAA');
                $sql = "SELECT * FROM `usluga` WHERE `catalog` = 1";
                $result = mysqli_query($mysql, $sql);
                ?>
                <p><b>Парковка</b><br>
                <select name="vodila">
                  <?php while($row = mysqli_fetch_array($result)): ?>
                  <option value="<?=$row['id_usluga']?>"><?=$row['description']?></option>
                  <?php endwhile; ?>
                </select>

                <!-- <input type="submit"> -->

                  </form>

                  
                  <form action="../pages/acc.php" method="POST">
                <?php
                $mysql = mysqli_connect('localhost', 'root', '', 'kursovaiKrivasheevaAA');
                $sql = "SELECT * FROM `usluga` WHERE `catalog` = 2";
                $result = mysqli_query($mysql, $sql);
                ?>
                <p><b>Горные развлечения</b><br>
                <select name="vodila">
                  <?php while($row = mysqli_fetch_array($result)): ?>
                  <option value="<?=$row['id_usluga']?>"><?=$row['description']?></option>
                  <?php endwhile; ?>
                </select>

                <!-- <input type="submit"> -->

                  </form>

                  <form action="../pages/acc.php" method="POST">
                <?php
                $mysql = mysqli_connect('localhost', 'root', '', 'kursovaiKrivasheevaAA');
                $sql = "SELECT * FROM `usluga` WHERE `catalog` = 3";
                $result = mysqli_query($mysql, $sql);
                ?>
                <p><b>Походы</b><br>
                <select name="vodila">
                  <?php while($row = mysqli_fetch_array($result)): ?>
                  <option value="<?=$row['id_usluga']?>"><?=$row['description']?></option>
                  <?php endwhile; ?>
                </select>

                <!-- <input type="submit"> -->

                  </form>





                  <form action="../pages/acc.php" method="POST">
                <?php
                $mysql = mysqli_connect('localhost', 'root', '', 'kursovaiKrivasheevaAA');
                $sql = "SELECT * FROM `usluga` WHERE `catalog` = 4";
                $result = mysqli_query($mysql, $sql);
                ?>
                <p><b>Прокат</b><br>
                <select name="vodila">
                  <?php while($row = mysqli_fetch_array($result)): ?>
                  <option value="<?=$row['id_usluga']?>"><?=$row['description']?></option>
                  <?php endwhile; ?>
                </select>

                <!-- <input type="submit"> -->

                  </form>
                    
                  <form action="../pages/acc.php" method="POST">
                <?php
                $mysql = mysqli_connect('localhost', 'root', '', 'kursovaiKrivasheevaAA');
                $sql = "SELECT * FROM `usluga` WHERE `catalog` = 5";
                $result = mysqli_query($mysql, $sql);
                ?>
                <p><b>Животные</b><br>
                <select name="vodila">
                  <?php while($row = mysqli_fetch_array($result)): ?>
                  <option value="<?=$row['id_usluga']?>"><?=$row['description']?></option>
                  <?php endwhile; ?>
                </select>

                <!-- <input type="submit"> -->
                  <div class="col-12">
                    <button type="submit" href="../pages/acc.php">Оплатить</button>
                  </div>
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
          <!-- Modal -->
      </div>
            
      <div class="broni">
        <p class="glav_bron"><b>Наши популярные номера</b></p>
        <div class="container text-center popular_broni">
            <div class="row d-flex block_popular">
                <div class="col">
                    <div class="card" style="width: 17rem;">
                        <img src="../img/nomer1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Эконом номер 2000 руб.</h5>
                            <a href="../pages/nomer.php" class="btn bg-warning">Забронировать</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 17rem;">
                        <img src="../img/nomer2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Стандарт номер 3700 руб.</h5>
                            <a href="../pages/nomer.php" class="btn bg-warning">Забронировать</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 17rem;">
                        <img src="../img/nomer4.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Люкс номер 5700 руб.</h5>
                            <a href="../pages/nomer.php" class="btn bg-warning">Забронировать</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
          <?php endif;?>
</main>
<?php include("../modules/footer.php")?>
</body>
</html>