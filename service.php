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
<!-- <img src="/img/car.png" alt="" class="tacxi">
<img src="/img/parkovka.png" alt="" class="parcovka"> -->
    <main class="container">
      <h2>Услуги предоставленные отелем</h2>
      <!-- Первая строка услуг такси, парковка -->
       <section class="uslugi_otele">
      <div class="container text-center ysluga_img">
            <img src="/img/car.png" alt="" class="tacxi col_ysluga_img">
          <img src="/img/parkovka.png" alt="" class="parcovka col_ysluga_img">
          
      </div>

      <div class="container text-center ysluga_img">
            <div class="align-items-start block_text_inforn">
            <p class="taxi_zagol"><b>Такси</b></p>
            <p class="description_taxi">
            Выезд на море от отеля «Снега» 08:55, едет до остановки «Шайба» в Олимпийском парке,
            Выезд с моря в отель от остановки «Шайба» в 17:00
            Трансфер по предварительной записи на ресепшен.
            Количество мест на трансфер ограниченно.
            Так же вы можете заказать трансфер от аэропорта или ж/д вокзалов Сочи и Адлер до отеля.Заказ трансфера осуществлялся по тел <a class="tel_con" href="tel:88002008890">8 800 200 8890</a>
            </p>
          </div>
          <div class="align-items-start block_text_inforn">
          <p class="parcovka_zagol"><b>Парковка</b></p>
          <p class="description_parcovka">
          У Апарт-отеля «Снега» располагается открытая платная парковка на 50 машин. Теперь у наших гостей не возникнет вопроса, где оставить свой автомобиль во время отдыха. Услуги парковки оплачиваются на Reception. Первые 60 минут парковки – бесплатно.
          </p>
          </div>
      </div>

      <!-- Вторая строка услуг горные развлечения, походы -->
      <div class="container text-center ysluga_img">
          <img src="/img/гор.png" alt="" class="gor col_ysluga_img">
          <img src="/img/поход.png" alt="" class="poxod col_ysluga_img">
          </div>

      <div class="container text-center ysluga_img">
        <div class="align-items-start block_text_inforn">
          <p class="gor_zagol"><b>Горные развлечения</b></p>
          <p class="description_gor">
          В отеле Снега созданы идеальные условия для горных развлечений в любое время года. Зимой гости могут покорять горнолыжные трассы различной сложности, ощущать скорость на снегоходах и наслаждаться атмосферой катания на санках. Летом открываются новые возможности: пешие походы по живописным тропам, альпинизм и велосипедные прогулки с великолепными видами.
          Для любителей адреналина предоставлены экстремальные впечатления: парапланеризм, позволяющий взмыть в небеса, и захватывающие скачки на багги. В то время как после насыщенного дня горных приключений гости могут расслабиться в уютных горных SPA,
          </p>
          </div>
          <div class="align-items-start block_text_inforn">
          <p class="poxod_zagol"><b>Походы</b></p>
          <p class="description_poxod">
          В отеле Снега вас ждут захватывающие походы, адаптированные к особенностям каждого сезона:<br>
          <b>1. Зимние походы:</b>
            - Отправляйтесь по заснеженным тропам, наслаждаясь красивыми видами зимних лесов.
            - Опыт ледяных прогулок, где гости могут исследовать замерзшие поверхности озер и рек, создавая уникальные воспоминания.<br>
          <b>2. Весенние походы:</b>
            - Откройте для себя красоту расцветающей природы, следуя ярким цветам весенних цветов.
            - Погрузитесь в атмосферу весны через пешие прогулки среди весенней зелени.
          Таким образом, гости могут наслаждаться разнообразием природы вокруг отеля Снега в любое время года.
          </p>
          </div>
        
      </div>

      <!-- Третья строка услуг прокат -->
      <div class="container text-center mt-5 ">
        <div class="row align-items-start">
          <div class="col">
          <img src="/img/прокаатт.png" alt="" class="procat">
          </div>
        </div>
      </div>

      <div class="container text-center ysluga_img bloc_parkcivcka">
        <div class="row align-items-start">
          <div class="col">
          <p class="procat_zagol"><b>Прокат</b></p>
          <p class="description_procat">
          В отеле Снега предоставляется разнообразный прокат, чтобы гости могли полноценно насладиться окружающей природой:<br> 
          <b>1. Зимний прокат:</b>
            Лыжи и сноуборды: гостям доступен прокат высококачественного лыжного и сноубордического оборудования.
            Снегоходы и санки.<br>
            <b>2. Летний прокат:</b>
            Велосипеды: предоставляется прокат горных и городских велосипедов.
            Туристическое снаряжение: Возможность аренды снаряжения для пеших походов.
          </p>
          </div>
        </div>
      </div>
      </section>
    </main>
    <?php include("../modules/footer.php")?>
</body>
</html>