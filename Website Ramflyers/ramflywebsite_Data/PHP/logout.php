<?php
session_start();
include_once ('koneksi.php');
unset($_SESSION["id"]);
unset($_SESSION["nama"]);
header("Location:login.php");
?>