<?php
include("koneksi.php");
if(isset($_POST['add'])){
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $topik = $_POST['topik'];
    $kategori = $_POST['kategori'];
    $sql = "UPDATE tutorial SET judul='$judul', topik='$topik', kategori='$kategori' WHERE id=$id";
    $query = mysqli_query($db, $sql);
    if( $query ) {
        header('Location: list.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
?>