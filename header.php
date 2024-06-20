<header>
<nav class="navbar navbar-expand-lg bg-body-tertiary header">
  <div class="container">
    <a class="navbar-brand logo" href="../index.php">
      <img class="logo_glav" src="../img/logo_header.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Переключатель навигации">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black" href="../pages/akva.php">Аква</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black" href="../pages/nomer.php">Апартаменты</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black" href="../pages/service.php">Услуги</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black" href="../pages/contact.php">Контакты</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black" href="../pages/food.php">Питание</a>
        </li>
        <?php if (!isset ($_COOKIE['role'])): ?> <!-- для личного кб, чтобы отображалось после авторизации -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Вход
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Регистрация</a></li>
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Авторизация</a></li>
          </ul>
          <?php else: ?><!-- для личного кб, чтобы отображалось после авторизации -->
            <li class="nav-item">
          <a class="nav-link text-black" href="../pages/acc.php">Личный кабинет</a>
        </li><!-- для личного кб, чтобы отображалось после авторизации -->
        <li class="nav-item">
          <a class="nav-link text-black" href="../pages/exit.php">Выход</a>
        </li><!-- для личного кб, чтобы отображалось после авторизации -->
        <?php endif;?><!-- для личного кб, чтобы отображалось после авторзации -->
        </li>
        
      </ul>
    </div>
  </div>
</nav>



<!-- Модальное окно -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">                
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">

      <!-- РЕГИСТРАЦИЯ   -->
      <form class="row g-3 needs-validation" novalidate action="../php/reg.php" method="POST">
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">Имя</label>
    <input type="text" name="name" class="form-control" id="validationCustom01"  required>
    <div class="valid-feedback">
      Заполните поле правильно
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">Фамилия</label>
    <input type="text" name="surname" class="form-control" id="validationCustom02"  required>
    <div class="valid-feedback">
    Заполните поле правильно
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustomUsername" class="form-label">Почта</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="email" name="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
      Заполните поле правильно
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom03" class="form-label">Пароль</label>
    <input type="password" name="password" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
    Заполните поле правильно
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        <a href="../pages/polotika.php">Соглашаетесь ли вы с обработкой персональных данных?</a>
      </label>
      <div class="invalid-feedback">
        Соглашаетесь ли вы с условиями?
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Зарегистрироваться</button>
  </div>
</form>
      </div>
    </div>
  </div>
</div>





<!-- Модальное окно -->
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop1Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
      <!-- АВТОРИЗАЦИЯ   -->
      <form class="row g-3 needs-validation" novalidate action="../php/auth.php" method="POST">
  <div class="col-md-12">
    <label for="validationCustomUsername" class="form-label">Почта</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" name="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
      Заполните поле правильно
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom03" class="form-label">Пароль</label>
    <input type="password" name="password" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
    Заполните поле правильно
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Войти</button>
  </div>
</form>





      </div>
    </div>
  </div>
</div>
</header>


