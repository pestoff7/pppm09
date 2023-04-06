<?php

session_unset("name");
session_unset("surname");
header("Location: ../pages/index.php");

?>