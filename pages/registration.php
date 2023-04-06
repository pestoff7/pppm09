<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/font.css">
  <link rel="stylesheet" href="../styles/registration.css">
  <title>Регистрация</title>
</head>
<body>
  <div class="wrapper">
    <header>
      <img src="../resources/imgs/hedgehog.svg" alt="logo" width="117px" class="img_head">
      <span class="site_name_head">Хитрый Ёж</span>
      <ul class="header_links">
        <li><a href="../pages/index.php">Главная страница</a></li>
        <li><a href="../pages/catalog.php">Каталог товаров</a></li>
        <li><a href="../pages/basket.php">Корзина</a></li>
        <li><a href="../pages/registration.php">Регистрация</a></li>
        <li><a href="../pages/auth.php">Вход</a></li>
      </ul>
    </header>
    <main>
      <span class="span_registr">
        Регистрация
      </span>
      <form action="../action/registration.php" id="form_registr" method="post">
        <input type="text" placeholder="Имя" name="name">
        <input type="text" placeholder="Фамилия" name="surname">
        <input type="email" placeholder="E-mail" name="email">
        <input type="password" placeholder="Пароль" name="password">
        <input type="password" placeholder="Повторите пароль">
        <button type="submit">Регистрация</button>
      </form>
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