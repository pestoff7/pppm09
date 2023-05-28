<?php
include "connect.php";

$email = $_POST['email'];
$password = $_POST['password'];
$query = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $query);
while($row = $result->fetch_assoc()){
  $password_from_db = $row['password'];
}
if (password_verify($password, $password_from_db)) {
  $query = "SELECT * FROM users WHERE email = '$email'";
  $result = mysqli_query($conn, $query);
  while($row = $result->fetch_assoc()){
    $name = $row['name'] ;
    $surname = $row['surname'];
  }
  session_start();
  $_SESSION["name"] = $name;
  $_SESSION["surname"] = $surname;
  header("Location: ../pages/index.php");
} else {
  echo "Пароль неверен";
} 
?>