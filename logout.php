<?php
session_start();
$_SESSION["tab"] = "Home";
$_SESSION["login"] = 0;
session_destroy();
header('Location: index.php');
?>