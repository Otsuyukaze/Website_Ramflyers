<?php
include("koneksi.php");
if( !isset($_GET['id']) ){
    header('Location: home1.php');
}$id = $_GET['id'];
$sql = "SELECT * FROM komentar WHERE id=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<head>
    <style>
        fieldset{
            background-color:white;
            font-family:"Nunito Sans";
            width:300px;
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
        }
        </style>
</head>
<body bgcolor=coral>           
    <form action="prosesedit.php" method="POST">
        <fieldset>
            <center>
            <h1>Edit Komentar</h1>
</center>
        <table>
 
 
                <input type="hidden" name="id" value="<?php echo$data['id']?>">
                <tr>
                    <td>
                        <label for="nama">
                            Nama
                        </td>
                        <td>
                            :
                        </td>
                    </label>
                    <td>
                        <input type="text" name="nama" placeholder="Nama Lengkap" style="text-align:left;" value="<?php echo $data['nama'] ?>" />
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        <label for="subject">
                            Subject
                        </td>
                        <td>
                            :
                        </td>
                    </label>
                    <td>
                        <input type="text" name="subject" placeholder="Judul Pesan" value="<?php echo $data['subject'] ?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pesan">
                            Comment
                        </td>
                        <td>
                            :
                        </td>
                    </label>
                    <td>
                        <textarea name="pesan" placeholder="Masukan Komentar Anda disini" cols=38 rows=5 name="pesan" required><?php echo $data['pesan'] ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="submit" value="Daftar" name="daftar" />
                    </td>
                </tr>  </fieldset>
            </form>
        </table>
        <br>
      
</body>
</html>