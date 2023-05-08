<?php
include 'connect.php';

$option = $_POST['option'];

$query = "SELECT * FROM catalog WHERE category = '$option'";
$result = mysqli_query($conn, $query);
while($row = $result->fetch_assoc()){
  $id = $row['id'];
  $product_name = $row['product_name'] ;
  $description = $row['description'];
  $price = $row['price'];
  $img_path = $row['img_path'];
  // echo '<h1>213<h1>';
  echo "<div><img src='$img_path' alt='$id' width='273px' height='175px'><span class='name'>$product_name</span><span class='description'>$description</span><span class='cost'>$price</span><button id='add_to_basket'>В корзину</button></div>";
}
exit();
?>  