<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/font.css">
  <link rel="stylesheet" href="../styles/index.css">
  <meta name="keywords" content="Книги, манга, манхва, канцелярия, канцелярские изделия, купить книги">
  <meta name="description" content="Магазин книг, манги и канцелярский изделий ООО 'Хитрый ёж'">
  <title>Главная</title>
  <script src="../scripts/jquery.js"></script>
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
            <li><a href='#' id='exit'>Выход</a></li>";
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
      <span class="about_us">О нас</span>
      <div class="about1">
        <img src="../resources/imgs/about1.png" alt="about1" class="about_img">
        <span class="name">Продажа книг</span>
        <span class="description">Мы продаём книги для читателей всех возрастов и разных жанров. В нашем каталоге находится огромное количество книг.</span>
      </div>
      <div class="about2">
        <img src="../resources/imgs/about2.png" alt="about2" class="about_img">
        <span class="name">Манга</span>
        <span class="description">Огромный выбор японской манги, корейской и китайской манхвы всех жанров. </span>
      </div>
      <div class="about3">
        <img src="../resources/imgs/about3.png" alt="about3" class="about_img">
        <span class="name">Канцелярия</span>
        <span class="description">С нами собрать ребёнка в школу сущий пустяк. Самые низкие цены на канцелярские товары только у нас.</span>
      </div>
    </main>
    <footer>
      <span class="footer_text">
        ООО “Хитрый Ёж” <br>
        Все права защищены законом
      </span>
    </footer>
  </div>
  <script>
    let exit = document.querySelector('#exit');
    exit.onclick = function () {
      $.ajax({
        url: '../action/exit.php',         /* Куда отправить запрос */
        method: 'get',             /* Метод запроса (post или get) */
        dataType: 'html',          /* Тип данных в ответе (xml, json, script, html). */
        data: {},     /* Данные передаваемые в массиве */
        success: function(data){   /* функция которая будет выполнена после успешного запроса.  */
          location.reload() /* В переменной data содержится ответ от index.php. */
        }
      });
    }
    
  </script>
</body>
</html>