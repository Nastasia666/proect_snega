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
        <h2>Вы авторизованы!</h2>
        <script>
            setTimeout(function(){
                window.location.href ="../pages/acc.php";
            }, 2000);
        </script>
    </main>
    
    <?php include("../modules/footer.php")?>
</body>
</html>