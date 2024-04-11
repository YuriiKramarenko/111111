<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header id="flex-container" class="topvan">
        <img src="img/logo1.jpg" alt="logo" id="logo">
        <form action="search.php" method="get">
            <input type="text" name="search" id="search" placeholder="wyszykaj produkt">
            <input type="submit" valuse="szukaj" id="przeslij">
        </form>
        <div>
        <a href="cart.php" id="cart">koszyk</a>
        <a href="login.html" id="dodaj">Dodaj produkt</a>
        </div>
    </header>
    <main class="flex-conteiner-wrap">
        <div class="card text-center">
            <h3>nazwa oferty</h3>
            <p>cena: 10zł</p>
        </div>
        <?php
            include "display_product.php";
        ?>
    </main>
</body>
</html>