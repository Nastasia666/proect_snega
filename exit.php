<?php
    setcookie('id_user', $user['id_user'], time() - 3600, '/');
    setcookie('email', $user['email'], time() - 3600, '/');
    setcookie('role', $user['role'], time() - 3600, '/');
    //Прописано для личного кб. Переход на страницу где прописан личный кабинет админа и пользователя
    header('Location: /');

?>