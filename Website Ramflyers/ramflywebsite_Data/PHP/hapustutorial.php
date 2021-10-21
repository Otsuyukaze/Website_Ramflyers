<?php
include("koneksi.php");

if(isset($_GET['id'])){

    $id=$_GET['id'];

    $sql="DELETE FROM tutorial WHERE id=$id";
    $query=mysqli_query($db, $sql);

    if( $query ){
        header('Location: list.php');
    } else {
        echo "<body style='background-color:cyan;text-align:center;'><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
        echo '<div style="width:35%;padding:30px;background-color:white;"><a href="list.php?">Balik lagi</a><br>';
        die("Komentar Gagal dihapus ;-;</div>");

    }
} else {
    die("akses dilarang...");
}

?>
