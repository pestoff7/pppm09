<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/font.css">
  <link rel="stylesheet" href="../styles/catalog.css">
  <title>Каталог товаров</title>
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
      <span class="span_catalog">Каталог</span>
      <select name="category" id="category_select">
        <option value="Книги">Книги</option>
        <option value="Манга">Манга</option>
        <option value="Канцелярия">Канцелярия</option>
      </select>
      <div class="tovars">
        <div>
          <img src="" alt="" width="273px" height="175px">
          <span class="name">Название</span>
          <span class="description">Описание</span>
          <span class="cost">Цена</span>
          <button id="add_to_basket">В корзину</button>
        </div>
        <div>
          <img src="" alt="" width="273px" height="175px">
          <span class="name">Название</span>
          <span class="description">Описание</span>
          <span class="cost">Цена</span>
          <button id="add_to_basket">В корзину</button>
        </div>
        <div>
          <img src="" alt="" width="273px" height="175px">
          <span class="name">Название</span>
          <span class="description">Описание</span>
          <span class="cost">Цена</span>
          <button id="add_to_basket">В корзину</button>
        </div>
        <div>
          <img src="" alt="" width="273px" height="175px">
          <span class="name">Название</span>
          <span class="description">Описание</span>
          <span class="cost">Цена</span>
          <button id="add_to_basket">В корзину</button>
        </div>
        <div>
          <img src="" alt="" width="273px" height="175px">
          <span class="name">Название</span>
          <span class="description">Описание</span>
          <span class="cost">Цена</span>
          <button id="add_to_basket">В корзину</button>
        </div>
        <div>
          <img src="" alt="" width="273px" height="175px">
          <span class="name">Название</span>
          <span class="description">Описание</span>
          <span class="cost">Цена</span>
          <button id="add_to_basket">В корзину</button>
        </div>
        <div>
          <img src="" alt="" width="273px" height="175px">
          <span class="name">Название</span>
          <span class="description">Описание</span>
          <span class="cost">Цена</span>
          <button id="add_to_basket">В корзину</button>
        </div>
        <div>
          <img src="" alt="" width="273px" height="175px">
          <span class="name">Название</span>
          <span class="description">Описание</span>
          <span class="cost">Цена</span>
          <button id="add_to_basket">В корзину</button>
        </div>
        <div>
          <img src="" alt="" width="273px" height="175px">
          <span class="name">Название</span>
          <span class="description">Описание</span>
          <span class="cost">Цена</span>
          <button id="add_to_basket">В корзину</button>
        </div>
        
      </div>
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