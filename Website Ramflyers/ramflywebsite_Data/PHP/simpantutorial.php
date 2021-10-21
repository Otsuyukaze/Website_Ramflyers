<?php
include("koneksi.php");

$judul=$_POST['judul'];
$topik= $_POST['topik'];
$kategori = $_POST['kategori'];

$sql="INSERT INTO tutorial(judul,topik,kategori) values ('$judul','$topik','$kategori')";

mysqli_query($db,$sql) or die (mysqli_error($db));
header('location:list.php');
?>