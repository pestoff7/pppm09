<?php
include "connect.php";

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn, $query);
while($row = $result->fetch_assoc()){
  $name = $row['name'] ;
  $surname = $row['surname'];
  $email = $row['email'];
  $password = $row['password'];
}
session_start();
$_SESSION["name"] = $name;
$_SESSION["surname"] = $surname;
echo $name . $surname . $email . $password;
header("Location: ../pages/index.php");

?>