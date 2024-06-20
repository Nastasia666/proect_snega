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
    <section class="container mx-auto">
            <h2>Добавление номера</h2>
            <form class="add_nom" action="/php/redact/add.php" method="POST" style="display: flex;
    justify-content: center;
    flex-direction: column; width: 500px; margin: 0 auto;">
                <p>name</p>
                <input type="text" name="name"><br>
                <p>description</p>
                <input type="text" name="description"><br>
                <p>price</p>
                <input type="number" name="price"><br>
                <p>img</p>
                <input type="text" name="img"><br><br>
                <input type="submit" value="Добавить">
            </form>
        </section>
</main>
<?php include("../modules/footer.php")?>
</body>