<?php
include("koneksi.php");

$nama=$_POST['nama'];
$subject= $_POST['subject'];
$pesan = $_POST['pesan'];

$sql="insert into komentar(nama,subject,pesan) values ('$nama','$subject','$pesan')";

mysqli_query($db,$sql) or die (mysqli_error());
header('location:home1.php');
?>