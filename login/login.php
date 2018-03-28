<?php

session_start();
$usr = $_POST["email"];
$pass = $_POST["password"];
//--------------------------
$dbuser = "admin@gmail.com";
$dbpass = "admin";
//--------------------------
if ($usr == $dbuser && $pass == $dbpass) {
    header("location:alertBerhasil.php");
} else {
    $_SESSION["salah"]++;
    header("location:index.php");
}

