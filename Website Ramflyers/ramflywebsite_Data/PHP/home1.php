<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Home | Ramflyers
        </title>
                
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <script>

$(document).ready(function() {
            document.getElementById("test").style.visibility="hidden";
            $(".toggle-button").click(function() {
$(this).parent().find("input").slideToggle(function() {
    document.getElementById("myInput").style.visibility ="visible";
    
$(this).parent().find("button").slideToggle(function() {
    document.getElementById("submit").style.visibility ="visible";
    
$(this).parent().find("ul").slideToggle(function() {
    document.getElementById("myUL").style.visibility ="hidden";
});
});
});
});
$(".toggle-enter").click(function() {
$(this).parent().find("ul").slideToggle(function() {
    document.getElementById("myUL").style.visibility ="visible";
});
});
});
$(document).ready(function() {
        document.getElementById("searchbar").style.animation="none";
            $(".blink").click(function(){
            document.getElementById("searchbar").style.animation="blink 2s infinite";
            });
            $(".toggle-button").click(function(){
            document.getElementById("searchbar").style.animation="none";
            });
        });
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
@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&display=swap');
</style>
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
                border-color:white;
                border-style:none none solid none;
                border-width:thick;
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
                background-image: url('../Assets/Image/Backgrounds/sakura2.png');
                background-size: 1520px 540px;
                font-family: 'Nunito Sans', sans-serif;
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
                top: 50%; 
                left: 50%;
                transform: translate(-50%, -50%);
            }
            .tutul{
                box-shadow: 0 0 .25em rgba(0, 0, 0, 0.9);
                box-sizing:border-box;
                -webkit-filter: brightness(100%);
            }
            .tutul:hover{
                box-sizing:border-box;
                -webkit-filter: brightness(70%);
                -webkit-transition: all 1s ease;
                -moz-transition: all 1s ease;
                -o-transition: all 1s ease;
                -ms-transition: all 1s ease;
                transition: all 1s ease;
            }
            .tampilan{
                background-image: url('sakura.png');
                background-size: 1515px 540px;
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
                box-shadow: -20px 20px 0 0 black;
          
            }
            .sampingkotak1{
                float: left;
                margin-top: 50px;
                padding-left: 100px;
            }
            .ukuran{
                font-size: 20px;
                background-color: black;
                color: white;
                text-align:center;
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
            .forgodsake:hover{
                background-color: rgb(0, 0, 0);
                cursor:default;
            }
            .kotakbawah{
                border-radius: 5px;
                background-color: rgb(252, 130, 151);  
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
                background-color: rgb(252, 130, 151);  
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
                border-color:pink;
                border-width: 5px;;
                border-radius: 10px 0 0 0;
                padding:5px;
            }
            .searchbar #submit{
                background-color: white;
                color:black;
                border-width: 5px;
                border-style: solid;
                border-color:pink;
                padding:5px;
                border-radius: 0 10px 0 0;
            }
            #myUL{
                background-color: black;
                padding:10px;
                border-style:solid;
                border-color: pink;
                border-width: 5px;
                border-radius: 0 0 10px 10px;
                position:absolute;
                left:7.4%;
                top:100%;
                width:80.5%;
                max-height:300px;
                overflow-y:auto;

            }
            #myUL a{
                color: white;
                line-height:10px;
                padding:10px;
                margin:0;
            }
            #myUL ul{

            }
            #myUL li{
                background-color:black;
                margin:0;
                border-style:none none solid none;
                border-width:thin;
                border-color:pink;
                width:74%;
            }
            #myUL li:hover{
                background-color:rgb(53, 54, 54);
            }
            #test{
                float:left;
                position:absolute;
                left:78%;
            }
            #test ul{
                float:none;
            }
            #submit{
                float:left;
                height:50px;
                line-height:30px;
                width:20%;
                font-family:"Nunito Sans";
                text-align:center;
            }
            #submit:hover{
                cursor:pointer;
            }
            #myInput{
                float:left;
            }
            .komentar{
                color: black;
            }
            .kolomkomentar{
                border-radius:5px;
                background-color: rgb(252, 130, 151);
                padding:10px;
                font-size:16px;
                margin:30px;
                box-shadow:0 0 10px 0;
                
            }
            input{
                outline:none;
                border-style:none none solid none;
                border-width:2px;
                border-color:black;
                padding:5px;
                width:320px;
            }
            textarea{
                border-width:2px;
                padding:5px;
                border-color:black;
                border-style:none none solid none;
                outline:none;
            }
            input[type=submit]{
                border-radius:3px;
                outline:none;
                border-width:0px;
                padding:5px;
                width:auto;
            }
            input[type=submit]:hover{
                cursor:pointer;
            }
            .overflow{
                overflow-y:scroll;
                height:500px;
                border-radius:5px;
            }
            .space{
                margin:10px;
                background-color:white;
                padding:10px;
                border-radius:10px;
                border-style:solid;
                border-color:black;
            }
            nav{
                margin:16px 0;
                background-color:#ffffff;
            }
            nav ul{
                padding:0 ;
                margin:0 ;
                list-style:none;
                position:relative;
            }
            nav ul li{
               
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
            nav ul li:hover{                
                background-color:rgb(53, 54, 54);
            }
            nav a{
                display:block;
                padding: 0;
                color:#ffffff;
                font-size:20px;
                line-height:40px;
                text-decoration:none;
            }
            nav ul ul{
                display:none;
                position:absolute;
                top:84px;
                right:-380px;
                width:500px;
            }
            nav ul li:hover > ul{
                display:inherit;
            }
            nav ul ul li{
                
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
            li > a:only-child:after{
                content: "";
            }
            .ramflytomenu{
                margin:0 0 0 40px;
            }
            .home{
                background-color:darkgrey;
            }
            ::-webkit-scrollbar {
                width: 10px;
             }
             ::-webkit-scrollbar-track {
                background: #f1f1f1; 
            }
            ::-webkit-scrollbar-thumb {
                background: #888; 
            }
            ::-webkit-scrollbar-thumb:hover {
                background: #555; 
            }
            .headerspacing{
                margin-left:835px;
            }
            @keyframes blink{
                0% {opacity:100%;}
                50% {opacity:0%;}
                100% {opacity:100%;}
            }

        </style>
    </head>
    <body>
<div class="header">
    <div>
        <img class="img" src="../Assets/Image/Buttons 2.0/logo-removebg-preview.png" width="75px" height="75px">
    </div>
    <div class="ramflytomenu">
        
    <nav>
    <ul>
        <li class="forgodsake">
            <b>Ramflyers</b>
        </li>
        <div class="headerspacing">
        <li class="home">
            <a href="home1.php">Home</a>
        </li>
        <li>
            <a href="info1.php">Info</a>
        </li>
        <li>
            <a href="hub1.php">Hubungi Kami</a>
        </li>        
        <li>
            <div class=searchbar id="searchbar">
            <a class="toggle-button" href="#searchbar">
                    <img src="../Assets/Image/Buttons/search_button.png" width="26" height="26">
                </a>
                        <div id="test">
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for tutorial">
                      <button type="button" onclick="document.getElementById('myUL').style.visibility ='visible';" class="toggle-enter" id="submit">CARI</button>
                    
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
            
        <a href="#">
          <img src="../Assets/Image/Buttons/more_button.png" width="30" height="25">
        </a>
        <ul>
            <li class="list">
        <a href="logout.php">Log Out</a>
        </li>
        </ul>
        </li> 
    </div>
    </ul>
    
    </nav>
</div>
</div>
<div>
<div class="chinese">
    <img class="chinese" src="../Assets/Image/Backgrounds/Wallpaper.jpg">
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
    <a href="tutorial.html" class="blink">
        <img src="../Assets/Image/Buttons 2.0/tutorial.png" width="32%" height="50%" class="tutul">
    </a>
    <a href="info1.php">
        <img src="../Assets/Image/Buttons 2.0/info.png" width="32%" height="50%" class="tutul">
    </a>
    <a href="hub1.php">
        <img src="../Assets/Image/Buttons 2.0/hubungi.png" width="32%" height="50%" class="tutul">
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
            
            echo '<div style="background-color:white;border-radius:5px;padding:10px;margin-bottom:10px;margin-right:10px;border-style:solid;border-color:black;">';
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
                        <input type="text" name="nama" placeholder="Nama Lengkap" style="text-align:left;" autocomplete="off">
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
                        <input type="text" name="subject" placeholder="Judul Pesan" autocomplete="off">
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
        <br>
        ©2021 Ramfly Ramsend Incorporation. Ramflyers and the Ramflyers Logo are among our registered and unregistered trademarks in Southeast Asia and other countries.
        <br><br>
</div>
    </body>
    </html>