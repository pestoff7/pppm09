<?php
include "connect.php";

$name = $_POST['name'];
$description = $_POST['description'];
$category = $_POST['category'];
$price = (int)$_POST['price'];
$count = (int)$_POST['count'];
$img_tmp = $_FILES['img']['tmp_name'];
$img_name = $_FILES['img']['name'];
$img_path = "../resources/product_imgs/" . $img_name;

move_uploaded_file($img_tmp, "../resources/product_imgs/" . $img_name);

$query = "INSERT INTO `catalog`(`product_name`, `description`, `category`, `price`, `count`, `img_path`) VALUES ('$name','$description','$category',$price,$count,'$img_path')";
$result = mysqli_query($conn, $query);
header('Location: ../pages/admin.php');
?>