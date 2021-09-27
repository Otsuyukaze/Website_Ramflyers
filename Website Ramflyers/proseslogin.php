<?php
session_start();
include "koneksi.php";
if(isset($_POST['login']))

$username=$_POST['username'];
$password=md5($_POST['password']);
$query = mysqli_query($db, "SELECT * FROM ramflyers where username='$username' and password='$password'");
$check = mysqli_num_rows($query);

if($check){
    $_SESSION['username']=$username;
    if($_SESSION) {
        header('location: home1.php');
    }
    ?>
    <?php
    }
    else{
        ?>
        <br><br><br><br><br><br><br><br><br><br><br><br><div class="color"><center><font size="36px">Username atau Password Salah</font></center><br><br><br><br><br><a href="index.html" class="bg">Klik Untuk Ke Halaman Utama</a><a href="login.php" class="bg">Klik Untuk Login Kembali</a></div>
        <?php
        echo mysqli_error($db);
    }
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Form Login</title>
        <style> 
            .bg {
                border-radius: 5px;
                background-color: coral;
                width:30%;
                padding: 15px;
                box-shadow: -10px 10px 0 0 black;
                font-family: "Franklin Gothic Book";
                font-size: 20px;
                text-decoration: none;
                color: inherit;
                margin-left:120px;
            }

            .color {
                background-color: white;
                padding: 50px;
                border-radius: 15px;
                font-family: "Berlin Sans FB";
                margin-left: 270px;
                margin-right: 270px;
            }

            body {
                background-color: chocolate;
            }
        </style>
    </head>
</html>
