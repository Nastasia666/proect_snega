<?php
    $email = filter_var(trim($_POST['email']));
    $password = filter_var(trim($_POST['password']));


    $password = md5($password."test");
    include './db.php';


    $result = $mysql->query("SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'");


    if ($result->num_rows > 0){//если чел авторизируется, то добавляются куки и он перенаправляется страницу auth_hellow.php
        $user = $result->fetch_assoc();

//   Прописано для личного кб, убрала 2 строчку из старого кода
    setcookie('id_user', $user['id_user'], time() + 3600, '/');
    setcookie('role', $user['role'], time() + 3600, '/');

    $mysql->close();
    //Прописано для личного кб. Переход на страницу где прописан личный кабинет админа и пользователя
    header('Location: /pages/auth_hellow.php');
    }
    else{//если не авторизирован
        header('Location: /pages/no_auth.php');
    }
    

?>