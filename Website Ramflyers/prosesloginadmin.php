<?php
session_start();
include "koneksi.php";
if(isset($_POST['loginadmin']))

$username=$_POST['username'];
$password=md5($_POST['password']);
$query = mysqli_query($db, "SELECT * FROM `admin` where username='$username' and password='$password'");
$check = mysqli_num_rows($query);

if($check){
    $_SESSION['username']=$username;
    if($_SESSION) {
        header('location: tampilanadmin.php');
    }
    ?>
    <?php
    }
    else{
        ?>
        <br><br><br><br><br><br><br><br><br><br><br><br><div class="color"><font size="36px">Username atau Password Salah</font><br><br><br><br><br><a href="loginadmin.php" class="bg">Klik Lagi Untuk Login Kembali</a></div>
        <?php
        echo mysqli_error($db);
    }
    ?>
    <html>
<head>
<style>         
.color {
                background-color: cyan;
                padding: 50px;
                font-family: "Berlin Sans FB";
                margin-left: 270px;
                margin-right: 270px;
                border-color:grey;
                border-style:solid;
                text-align:center;
            }
        </style>
        </head>
        <body>
        </body>
        </html>