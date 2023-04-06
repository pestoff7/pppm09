<?php

include "connect.php";

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO users(name, surname, email, password, isAdmin) VALUES ('$name', '$surname', '$email', '$password', 0);";
$result = mysqli_query($conn, $query);
session_start();
$_SESSION["name"] = $name;
$_SESSION["surname"] = $surname;

header("Location: ../pages/index.php");
?>