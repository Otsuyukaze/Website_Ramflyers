<?php
include("koneksi.php");

if(isset($_GET['id'])){

    $id=$_GET['id'];

    $sql="DELETE FROM komentar WHERE id=$id";
    $query=mysqli_query($db, $sql);

    if( $query ){
        header('Location: home1.php');
    } else {
        echo "<body bgcolor=cyan>";
        echo "<a href='home1.php?'>Balik lagi</a><br>";
        die("Komentar Gagal dihapus ;-;");

    }
} else {
    die("akses dilarang...");
}

?>
