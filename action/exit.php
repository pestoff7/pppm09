<?php
session_start();
session_unset("name");
session_unset("surname");
$_SESSION = array();
session_destroy();
header("Location: ../pages/index.php");

?>