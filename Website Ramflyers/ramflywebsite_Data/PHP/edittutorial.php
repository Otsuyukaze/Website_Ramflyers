<?php
include("koneksi.php");
if( !isset($_GET['id']) ){
    header('Location: list.php');
}$id = $_GET['id'];
$sql = "SELECT * FROM tutorial WHERE id=$id";
$query = mysqli_query($db, $sql);
$dataadmin = mysqli_fetch_assoc($query);
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
    ?>

<html>
    <head>
        <style>
            html{
                overflow: hidden;
                font-family:"Arial Black";
            }
            body{
                background-color:grey;
            }
            .header{
                float:left;
                text-decoration:none;
                list-style:none;
                padding:65px 25px 50px 25px;
                margin-top:2px;
                background-color:cyan;
                font-family:"Arial Black";
                height:40px;
                text-align:center;
                font-size:20px;
            
            }
            .header2{
                float:left;
                text-decoration:none;
                list-style:none;
                padding:50px 25px 50px 25px;
                margin-top:2px;
                background-color:grey;
                font-family:"Arial Black";
                height:auto;
                text-align:center;
                font-size:40px;
            
            }
            .top{
                margin-left:-48px;
                margin-top:-30px;
                margin-bottom:0px;
                margin-right:0px;
                background-color:cyan;
                width:150%;
                height:173px;
                display:flex;

            }
            a{
                
                text-decoration:none;
                color:black;
            }
            .kiri{
                background-color:white;
                width:28.7%;
                float:left;
                height:100%;
                margin-left:-7px;
            }
            .how{
                padding:10px;
            }
            .kanan{
                background-color:white;
                height:72.5%;
                width:71.8%;
                float:left;
                margin:20px;
                padding:10px;
                text-align:center;
                
            }
            .tampilan{
                background-color:grey;
                width:101%;
                height: 100%;
                display:flex;
            }
            input{
                width: 150%;
                padding:5px;
            }
            select{
                width:150%;
                padding:5px;
            }
            textarea{
                width:150%;
                padding:5px;
            }
            
            table{
                position:absolute;
                left:53%;
                top:50%;
            }
            </style>
</head>
<body>
    <div class=top>
        <ul>
            <a href="tampilanadmin.php">
            <li class=header2>
                <b> ADMINISTRATOR </b>
        </li>
        </a>
        <a href="list.php">
<li class=header>
   List Tutorial
</li>
</a>
<a href="tambahtutorial.php">
<li class=header>
    Tambahkan Tutorial
</li> 
</a>
   <a href="loginadmin.php">
<li class=header>
Log Out
        </li>
    </a>
        </ul>
</div>
<div class=tampilan>
<div class=kiri>
<div class=how>
    How To Use:
    <ul>
    <li>
            Masukkan Judul, Isi Topik, dan tentukan Kategori
        </li>
        <li>
            Tekan Tombol Add untuk menambahkan Tutorial baru
        </li>
        </ul>
        </div>
        </div>

        <div class=kanan>
            <br>
            <form action="prosesedittutorial.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dataadmin['id']?>">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <table>
                    <td>
                        <label for="judul">
                        Judul
                    </td>
                    <td>
                        :
                    </td>
                    </label>
                    <td>
                        <input type="text" name="judul" placeholder="Masukkan Judul Anda" value="<?php echo $dataadmin['judul'] ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="topik">
                        Topik
                    </td>
                    <td>
                        :
                    </td>
                    </label>
                    <td>
                        <textarea name="topik"><?php echo $dataadmin['topik'] ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="kategori">
                        Kategori
                    </td>
                    <td>
                        :
                    </td>
                    </label>
                    <td>
            <?php $kategori = $dataadmin['kategori']; ?>
                        <select name="kategori" required>
                            <option style="display:none">Select</option>
                            <option <?php echo ($kategori == 'Edukasi') ? "selected": "" ?>>Edukasi</option>
                            <option <?php echo ($kategori == 'Kuliner') ? "selected": "" ?>>Kuliner</option>
                            <option <?php echo ($kategori == 'Olahraga') ? "selected": "" ?>>Olahraga</option>
                            <option <?php echo ($kategori == 'Programming') ? "selected": "" ?>>Programming</option>
                            <option <?php echo ($kategori == 'Desain Grafis') ? "selected": "" ?>>Desain Grafis</option>
                            <option <?php echo ($kategori == 'Elektronik') ? "selected": "" ?>>Elektronik</option>
                            <option <?php echo ($kategori == 'Fashion') ? "selected": "" ?>>Fashion</option>
                            <option <?php echo ($kategori == 'Gaming') ? "selected": "" ?>>Gaming</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="submit" value="Ubah" name="add" style="background-color: rgb(60, 184, 201); color: white; border-style: solid; border-radius: 6px; border-color: rgb(0, 0, 0);">
                    </td>
                </table>
                <br>
                </form>
        </div>
        </div>
</body>
</html>