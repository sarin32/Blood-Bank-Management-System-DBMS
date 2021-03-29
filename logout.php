<?php
session_start();
$_SESSION["tab"] = "Home";
$_SESSION["login"] = 0;
header('Location: index.php');
?>