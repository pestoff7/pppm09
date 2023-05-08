<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/admin.css">
  <title>Админ-панель</title>
</head>
<body>
  <header>
    <h1>Админ панель</h1>
  </header>
  <main>
    <h2>Добавить товар</h2>
    <form action="../action/addProduct.php" method="post" enctype="multipart/form-data" id="form">
      <input type="text" placeholder="Название" name="name" required>
      <textarea type="text" placeholder="Описание" name="description" style="max-width:60em;" required></textarea>
      <select name="category" id="category" required>
        <option value="books">Книги</option>
        <option value="manga">Манга</option>
        <option value="office">Канцелярия</option>
      </select>
      <input type="text" placeholder="Цена" name="price" required>
      <input type="text" placeholder="Количество" name="count" required>
      <input type="file" name="img" id="img" accept=".jpg,.jpeg" required>
      <button type="submit">Добавить</button>
    </form>
  </main>
</body>
</html>