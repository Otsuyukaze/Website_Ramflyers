<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Home | Ramflyers
        </title>
                
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <script>

$(document).ready(function() {
            document.getElementById("test").style.visibility ="hidden";
            $(".toggle-button").click(function() {
$(this).parent().find("input").slideToggle(function() {
    document.getElementById("myInput").style.visibility ="visible";
  
    
      
$(this).parent().find("a").slideToggle(function() {
    document.getElementById("submit").style.visibility ="visible";
});  
});  
$(".toggle-enter").click(function(){
      $(this).parent().find("ul").slideToggle(function(){
          document.getElementById("myUL").style.visibility ="visible";
      });
  });
});
        })
        </script>
        <script>
            function myFunction() {
              // Declare variables
              var input, filter, ul, li, a, i, txtValue;
              input = document.getElementById('myInput');
              filter = input.value.toUpperCase();
              ul = document.getElementById("myUL");
              li = ul.getElementsByTagName('li');
            
              // Loop through all list items, and hide those who don't match the search query
              for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                  li[i].style.display = "";
                } else {
                  li[i].style.display = "none";
                }
              }
}
            
            </script>
        <style>
            .header{
                z-index: 999;
                background-color: black;
                width:100%;
                float:left;
                height:100px;
                display: flex;
                margin-top: -18px;
                position:fixed;
            }
            .img{
                margin-left:20px;
                margin-top:10px;
                margin-bottom: 10px;
                padding: 10px;
                float:left;
                padding:10px;
            }
            body{
                max-width: 200%;
                margin:auto;
            }
            .list{
                float:left;
                background-color: rgb(0, 0, 0);
                color:#fff;
                padding:25px;
                height:34px;
                list-style: none;
                padding:25px;
                margin-top: 0px;
                display: flex;
                flex-direction: column;
                filter:drop-shadow();
                transition: 0.7s ease-in-out;
                font-family:"Nunito Sans";
                
            }
            .list:hover{
                background-color:rgb(53, 54, 54);
                padding:25px;
            }
            a{
                text-decoration:none;
                color:white;
            }
            .bruh{
                float:left;
                background-color: rgb(0, 0, 0);
                color:#fff;
                padding:25px;
                margin:-15px;
                height:48px;
                list-style: none;
                padding:25px;
                font-size: 20px;
                vertical-align: middle;
            }
            .bruh:hover{
                cursor:default;
            }
            .chinese{
                width:100%;
                height:610px;    
            }
            .selamat{
                color: white;
                font-size: 50px;
                text-align: center;
                position:absolute;
                font-family: "Nunito Sans";
                top: 50%; 
                left: 50%;
                transform: translate(-50%, -50%);
            }
            .tutul{
                box-shadow: 0 0 .25em rgba(0, 0, 0, 0.9);
                box-sizing:border-box;
            }
            .tutul:hover{
                box-shadow: 0 0 .25em rgba(0, 0, 0, 0.9);
                box-sizing:border-box;
                opacity: 70%;
            }
            .tampilan{
                background-color: chocolate;
                font-family: "Nunito Sans";
                font-size: 40px;
                padding:50px;
                margin-top:-95px;
                height: 100%;
            }
            .why{
                font-size: 25px;
            }
            .kotak1{
                float: left;
                border-radius: 5px;
                background-color: coral;
                width:30%;
                height:adjust;
                padding: 10px;
                float: left;
                box-shadow: -20px 20px 0 0 black;
          
            }
            .sampingkotak1{
                float: left;
                margin-top: 50px;
                padding-left: 100px;
            }
            .ukuran{
                font-size: 20px;
                font-family: "Nunito Sans";
                background-color: black;
                color: white;
            }
            hr{
                height: 2px;
                background-color: black;
                border-color: black;
                border-radius: 3px;
            }
            .forgodsake{
                float:left;
                background-color: rgb(0, 0, 0);
                color:#fff;
                padding:100px;
                margin-right:50px;
                margin-left: -30px;
                margin-top: 2px;
                
                height:32px;
                list-style: none;
                padding:25px;
                font-size: 20spx;
                font-family:"Nunito Sans";
            }
            .kotakbawah{
                border-radius: 5px;
                background-color: coral;  
                padding:30px;
                margin-bottom:30px;
                font-size:30px;
                box-shadow:0 0 10px 0px;
            }
            .loginbawah{
                border-radius: 5px;
                background-color:black;
                width:500px;
                transition: 0.7s ease-in-out;
            }
            .loginbawah:hover{
                background-color:rgb(53, 54, 54);
            }
            .kotakbawah{
                border-radius: 5px;
                background-color: coral;  
                padding:30px;
                margin-bottom:30px;
                font-size:30px;
                box-shadow:0 0 10px 0px;
            }
            .loginbawah{
                border-radius: 5px;
                background-color:black;
                width:500px;
                transition: 0.7s ease-in-out;
            }
            .loginbawah:hover{
                background-color:rgb(53, 54, 54);
            }
            .searchbar #test li{
                line-height: 25px;
                list-style: none;
            }
            .searchbar #test{
                position:absolute;
                top:90px;
                right:25px;
                margin-top:10px;
                padding-inline-start: 20px;
            }
            .searchbar{
                max-width: 35px;
            }
            .searchbar input{
                height: 30px;
                width:180px;
                border-style: solid;
                border-color:orange;
                border-width: 5px;;
                border-radius: 10px 10px 0px 0px;
                font-family: "Nunito Sans";
                padding:5px;
            }
            .searchbar #submit{
                background-color: white;
                color:black;
                border-width: 5px;
                border-style: solid;
                border-color:orange;
                padding:5px;
                border-radius: 30px;
            }
            #myUL{
                background-color: yellow;
                padding:10px;
                border-style:solid;
                border-color: orange;
                border-width: 5px;
                border-radius: 0px 10px 10px 10px;
                font-family: "Nunito Sans";
            }
            #myUL a{

                color: black;
            }
            .komentar{
                color: black;
            }
            .kolomkomentar{
                border-radius:5px;
                background-color:coral;
                padding:10px;
                font-size:16px;
                margin:30px;
                box-shadow:0 0 10px 0;
                
            }
            input{
                border-radius:3px;
                outline:none;
                border-width:0px;
                padding:5px;
                width:320px;
            }
            textarea{
                border-radius:3px;
                outline:none;
                border-width:0px;
                padding:5px;
            }
            input[type=submit]{
                border-radius:3px;
                outline:none;
                border-width:0px;
                padding:5px;
                width:auto;
            }
            .overflow{
                overflow-y:scroll;
                height:500px;
                border-radius:5px;
            }
            .space{
                margin:10px;
            }
        </style>
    </head>
    <body bgcolor="chocolate">
<div class="header">
    <div>
        <img class="img" src="logo-removebg-preview.png" width="75px" height="75px">
    </div>
    <div>
    <ul>
        <li class="forgodsake">
            <b>Ramflyers</b>
        </li>
        <div style="margin-left: 880px;">
        <li class="list">
            <a href="home1.php">Home</a>
        </li>
        <li class="list">
            <a href="home1.php">Info</a>
        </li>
        <li class="list">
            <a href="home1.php">Hubungi Kami</a>
        </li>        
        <li class="list">
            <div class=searchbar>
            <a class="toggle-button" href="#">
                    <img src="search_button.png" width="26" height="26">
                </a>
                        <div id="test">
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for tutorial">
                      <a class="toggle-enter" id="submit" href="#">CARI</a>
                    
                      <ul id="myUL">
                          <li><a href="#">Tutorial 1</a></li>
                          <li><a href="#">Tutorial 2</a></li>
                        
                          <li><a href="#">Tutorial 3</a></li>
                          <li><a href="#">Tutorial 4</a></li>
                        
                          <li><a href="#">Tutorial 5</a></li>
                          <li><a href="#">Tutorial 6</a></li>
                          <li><a href="#">Tutorial 7</a></li>
                        </ul>
                      </div>
            </div>
                </li>

        <li class="list">
        <a href="menu.html">
          <img src="more_button.png" width="30" height="25">
        </a>
        </li>
        </div>
    </ul>
</div>
</div>
<div>
<div class="chinese">
    <img class="chinese" src="Wallpaper.jpg">
</div>
<div class="selamat">
    Ramfly Ramsend Inc.
</div>
</div>
<br>
<br>
<br>
<br>
<div class="tampilan">
    <hr>
    <a href="community.html">
        <img src="tutorial.png" width="32%" height="50%" class="tutul">
    </a>
    <a href="store.html">
        <img src="info.png" width="32%" height="50%" class="tutul">
    </a>
    <a href="memes.html">
        <img src="hubungi.png" width="32%" height="50%" class="tutul">
    </a>
    </div>

    <div class=kolomkomentar>
<b>
            Kolom Komentar:
</b>
<div class="overflow">
<div class="scroll">
</p>
        <?php
        include("koneksi.php");
        $query=mysqli_query($db,'SELECT * FROM komentar');
        while($data=mysqli_fetch_array($query))
        {
            $nama = $data['nama'];
            $subject= $data['subject'];
            $pesan = $data['pesan'];
            
            echo '<div style="background-color:white;border-radius:5px;padding:10px;margin-bottom:10px;">';
            echo "<p>Dari <b>".$nama."</b>:<br><hr width=200px align=left>Komentar:<br><br><b> $subject </b><br><br><i>$pesan</i> <br><br/>";
            echo "<a class=komentar title='Hapus Pesan' href='hapus.php?id=" .$data['id']."'>[Hapus Komentar]</a><br><a class=komentar href='edit.php?id=".$data['id']."'>[Edit Komentar]</a> <br/></p></div>";
        }
        ?>
        </div>
        </div>
        <div class="space">
<table>
            <form action="simpan.php" method="POST">
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
                        <input type="text" name="nama" placeholder="Nama Lengkap" style="text-align:left;">
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
                        <input type="text" name="subject" placeholder="Judul Pesan">
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
                        <textarea placeholder="Masukan Komentar Anda disini" cols=38 rows=3 name="pesan" required></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan=3>
                    <input type="submit" value="Masukkan Komentar" name="daftar">
                    </td>
                </tr>
            </form>
        </table>
        <br>
        </fieldset>
        <p>
        </div>
        </div>
    </div>
</div>
<div class="ukuran">
    <center>
        <br>
        ©2021 Ramfly Ramsend Incorporation. Ramflyers and the Ramflyers Logo are among our registered and unregistered trademarks in Southeast Asia and other countries.
        <br><br>
    </center>
</div>
    </body>
    </html>