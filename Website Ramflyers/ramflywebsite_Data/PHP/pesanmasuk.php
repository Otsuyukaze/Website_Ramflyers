<?php
include("koneksi.php");
?>
<html>
    <head>
        <title>Pesan Masuk | Ramflyers</title>
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
                text-align:left;
                line-height:20px;
                overflow-y:scroll;
            }
            .tampilan{
                background-color:grey;
                width:101%;
                height: 100%;
                display:flex;
            }
            .kosong{
                text-align: left;
            }
            .ga{
                color: red;
                border:thin solid black;
                background-color:rgb(240, 240, 240);
                border-radius:5px;
                padding:5px;
            }
            .ga:hover{
                cursor:pointer;
            }
            .kolompesan{
                border:3px solid black;
                border-radius:5px;
                padding:10px;
                height:auto;
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
<a href="pesanmasuk.php">
<li class=header>
    Pesan Masuk
</li> 
</a>
   <a href="logout.php">
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
            Kalian bisa melihat pesan dari user disini
        </li>
        <li>
            Pesan dari user tidak dapat di edit oleh admin, sehingga benar-benar murni dari user tanpa diubah sedikitpun.
        </li>
        <li>
            Tekan delete untuk menghapus pesan
        </li>
        </ul>
        </div>
        </div>

        <div class=kanan>
            <!-- <table border="2">
            <tr align="center">
            <th>No</th>
            <th>Nama Pengirim</th>
            <th>Email Pengirim</th>
            <th>Subjek</th>
            <th>Isi Pesan</th>
            <th>Hapus Pesan</th>
        </tr> -->
            <?php
        $no=1;
        $sql = "SELECT * FROM hubungi";
        $query = mysqli_query($db, $sql);

        while($hubungi = mysqli_fetch_array($query)){
            echo "<div class='kolompesan'>";
            echo "<p>Nama Pengirim: ".$hubungi['nama']. "</p>";
            echo "<p>Email Pengirim: ".$hubungi['email']."</p>";
            echo "<p>Subject: ".$hubungi['subject']."</p>";
            echo "<p>Pesan: <br>".$hubungi['message']."</p>";
            echo "<a href='hapus1.php?id=".$hubungi['id']."'><span class='ga'>Delete</span></a></div><br>";

        }
        ?>
        <!-- </table> -->
        <p class="kosong"> Total Pesan : <?php echo mysqli_num_rows($query) ?> Pesan</p>
        </div>
        </div>
    </body>
</html>