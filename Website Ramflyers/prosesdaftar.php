<?php
session_start();
include("koneksi.php");
$errors = array();

if (isset($_POST['logins'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }

$cek = "SELECT * FROM ramflyers WHERE username='$username'  LIMIT 1";
  $result = mysqli_query($db, $cek);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

  }
if (count($errors) == 0) {
  	$password = md5($password);

  	$query = "INSERT INTO ramflyers (username, password) 
  			  VALUES('$username',  '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	header('location: login.php?daftar berhasil');
  }
  else
  echo '<div class="color"><center><font size="36px">Username Sudah digunakan, coba untuk mengganti username anda</font></center><br><br><br><br><br><a href="daftar.php" class="bg">Klik Lagi Untuk Daftar Kembali</a></div>';
  echo mysqli_error($db);
}
?>
<!DOCTYPE html>
<html>
    <head>
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
                margin-left:300px;
            }

            .color {
                background-color: white;
                padding: 50px;
                border-radius: 15px;
                font-family: "Berlin Sans FB";
                margin-left: 270px;
                margin-right: 270px;
                position: absolute;
                margin-top:10%;

            }

            body {
                background-color: chocolate;
            }
        </style>
    </head>
</html>
