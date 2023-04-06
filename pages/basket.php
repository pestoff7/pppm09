<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/font.css">
  <link rel="stylesheet" href="../styles/basket.css">
  <title>Корзина</title>
</head>
<body>
  <div class="wrapper">
    <header>
      <img src="../resources/imgs/hedgehog.svg" alt="logo" width="117px" class="img_head">
      <span class="site_name_head">Хитрый Ёж</span>
      <ul class="header_links">
      <?php
          session_start();
          $name = $_SESSION["name"];
          $surname = $_SESSION["surname"];
          if (isset($_SESSION["name"]) and isset($_SESSION["surname"])){
            echo "<li><a href='../pages/index.php'>Главная страница</a></li>
            <li><a href='../pages/catalog.php'>Каталог товаров</a></li>
            <li><a href='../pages/basket.php'>Корзина</a></li>
            <li><a href='#'>$name</a></li>
            <li><a href='../action/exit.php'>Выход</a></li>";
          }
          else {
            echo '<li><a href="../pages/index.php">Главная страница</a></li>
            <li><a href="../pages/catalog.php">Каталог товаров</a></li>
            <li><a href="../pages/basket.php">Корзина</a></li>
            <li><a href="../pages/registration.php">Регистрация</a></li>
            <li><a href="../pages/auth.php">Вход</a></li>';
          }
        ?>
      </ul>
    </header>
    <main>
      <span class="span_basket">Корзина</span>
      <div class="basket_tovars">
        <div>
          <img src="../resources/imgs/about1.png" alt="tovar" width="129px" height="83px">
          <span class="name">Название</span>
          <span class="description">Описание</span>
          <span class="sum">Цена X количество</span>
        </div>
        <div>
          <img src="../resources/imgs/about1.png" alt="tovar" width="129px" height="83px">
          <span class="name">Название</span>
          <span class="description">Описание</span>
          <span class="sum">Цена X количество</span>
        </div>
        <div>
          <img src="../resources/imgs/about1.png" alt="tovar" width="129px" height="83px">
          <span class="name">Название</span>
          <span class="description">Описание</span>
          <span class="sum">Цена X количество</span>
        </div>
      </div>
      <span class="itog">Итого: Сумма</span>
      <button id="buy">Оформить заказ</button>
    </main>
    <footer>
      <span class="footer_text">
        ООО “Хитрый Ёж” <br>
        Все права защищены законом
      </span>
    </footer>
  </div>
</body>
</html>