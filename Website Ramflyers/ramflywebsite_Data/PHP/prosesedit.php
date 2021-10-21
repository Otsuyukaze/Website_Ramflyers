<?php
include("koneksi.php");
if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $subject = $_POST['subject'];
    $pesan = $_POST['pesan'];
    $sql = "UPDATE komentar SET nama='$nama', subject='$subject', pesan='$pesan' WHERE id='$id'";
    $query = mysqli_query($db, $sql);
    if( $query ) {
        header('Location: home1.php?updated');
    } else {
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
?>