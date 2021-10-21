<?php
include("koneksi.php");

$nama = $_POST['nama'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql="insert into hubungi(nama,email,subject,message) values ('$nama','$email','$subject','$message')";

mysqli_query($db,$sql) or die (mysqli_error());
header('location:ty.php');
?>