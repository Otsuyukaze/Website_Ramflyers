<!DOCTYPE html>
<html>
    <head>
        <title>About Us</title>
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
            html{
                scroll-behavior: smooth;
            }
            .header{
                z-index: 999;
                background-color: black;
                width:100%;
                float:left;
                height:100px;
                display: flex;
                margin-top: -14px;
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
                border-radius: 10px 10px 0px 0px;
                font-family: "Nunito Sans";
                padding:5px;
            }
            .searchbar #submit{
                background-color: white;
                color:black;
                border-width: 5px;
                border-style: solid;
                border-color:pink;
                padding:5px;
                border-radius: 30px;
            }
            #myUL{
                background-color: black;
                padding:10px;
                border-style:solid;
                border-color: black;
                border-width: 5px;
                border-radius: 0px 10px 10px 10px;
                font-family: "Nunito Sans";
            }
            #myUL a{
                color: black;
            }
            body{
                color: rgb(0, 0, 0);
                max-width: 200%;
                margin:auto;
                background-image: url('background-1939128.jpg');
                background-size: 1590px 1300px;
                color: white;
            }
            .box{
                border-radius: 10px;
                background-color: rgb(242, 120, 141);
                width: 30%;
                padding: 15px;
                box-shadow: -10px 10px 0 0 black;
                font-size: 20px;
                text-decoration: none;
                color: inherit;
                margin-left: 20px;
                margin-top: 28px;
            }
            .list2{
                background-color: rgb(252, 130, 151);
                padding: 5px;
                box-shadow: -3px 3px 0 0 black;
            }
            .list2:hover{
                background-color: rgb(rgb(262, 150, 161));
                box-shadow: -1px 1px 0 0 black;
                cursor: pointer;
            }
            .william{
                background-image: url('wd_cat2.png');
                background-size:1590px 1117px;
                width:99.45%;
                height:100%;
                background-repeat: no-repeat;
                background-position: center;
                border-style: solid;
                border-width: 4px;
                border-color: black;
                border-radius: 10px;
                padding-right: -10px;
                margin-bottom: 50px;
                color: black;
            }
            .janssen{
                background-image: url('ching_chong.png');
                background-size:1590px 1017px;
                width:99.45%;
                height:100%;
                background-repeat: no-repeat;
                background-position: center;
                border-style: solid;
                border-width: 4px;
                border-color: black;
                border-radius: 10px;
                padding-right: -10px;
                margin-bottom: 50px;
                color: black;
            }
            .richard{
                background-image: url('Screenshot_2021-09-28-18-08-08-87_41be58ba4732ca6a1097a3b2524cd3ac.jpg');
                background-size:1590px 990px;
                width:99.45%;
                height:100%;
                background-repeat: no-repeat;
                background-position: center;
                border-style: solid;
                border-width: 4px;
                border-color: black;
                border-radius: 10px;
                padding-right: -10px;
                margin-bottom: 50px;
                color: rgb(255, 255, 255);
            }
            .hendy{
                background-image: url('hendy_cat.png');
                background-size:1590px 1090px;
                width:99.45%;
                height:100%;
                background-repeat: no-repeat;
                background-position: center;
                border-style: solid;
                border-width: 4px;
                border-color: black;
                border-radius: 10px;
                padding-right: -10px;
                margin-bottom: 50px;
                color: rgb(255, 255, 255);
            }
            .sz{
                font-size: 40px;
                margin-left: 15px;
            }
            .f{
                font-size: 25px;
                margin-left: 15px;
                width: 50%;
                line-height: 60px;
            }
            .g{
                font-size: 25px;
                margin-left: 15px;
                line-height: 60px;
            }
            hr{
                border: 4px solid black;
                border-radius: 100px;
            }
            a{
                text-decoration: none;
                color: white;
            }
            .h{
                border: 1px solid black;
                border-radius: 100px;
            }
            footer{
                font-size: 20px;
                font-family: "Nunito Sans";
            }
            .ukuran{
                font-size: 20px;
                font-family: "Nunito Sans";
                background-color: black;
                color: white;
            }
        </style>
    </head>
    <body>
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
                    <a href="info1.html">Info</a>
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
                <a href="#">
                  <img src="more_button.png" width="30" height="25">
                </a>
                </li>
                </div>
            </ul>
        </div>
        </div>
        <br><br><br><br>
        <div class="box">
            <p align="center">Daftar Isi</p><hr class="h"><br>
        <p><a href="#ramflyers" class="list2">> <span style="color: rgb(255, 255, 255);">Ramflyers</span></a></p>
        <p><a href="#william" class="list2">> <span style="color: rgb(255, 255, 255);">William Tann</span></a></p>
        <p><a href="#janssen" class="list2">> <span style="color: rgb(255, 255, 255);">Janssen Addison</span></a></p>
        <p><a href="#richard" class="list2">> <span style="color: rgb(255, 255, 255);">Richard Lee</span></a></p>
        <p><a href="#hendy" class="list2">> <span style="color: rgb(255, 255, 255);">Hendy Tandika</span></a></p>
        </div>
        <br><br><br>
        <p id="ramflyers"></p><br><br><br><br><br>
        <p class="sz">Ramflyers</p><hr>
        <p class="g">Ramflyers adalah nama tim yang kami bentuk melalui nama buatan yaitu Ramfly Ramsend. Ramflyers sendiri sebenarnya terdiri dari 6 orang, yang mana terdapat murid dari kelas lain dan sekolah lain. Namun kami hanya berempat disini karena projek website kami ini terdiri dari kelas kami saja, XI RPL 1. Anggota Ramflyers pada XI RPL 1 hanya berempat dan jadi hanya ada kami saja. Kami juga mempunyai sosial media untuk tim ini, Instagram : @ramflyers.gaming, YouTube : Ramflyers.<br><br>Mari Kenalkan Anggotanya:</p>
        <p id="william"></p><br><br>
        <div class="william">
        <br><br><br><br><br><br><br>
        <p class="sz">William Tann</p>
        <p class="f">William adalah murid SMK Cinta Kasih Tzu Chi sejak masih Sekolah Dasar. Hingga sekarang William sudah bersekolah di Tzu Chi selama 11 tahun. William sekarang adalah kelas XI RPL 1, ia memilih jurusan RPL karena menyukai hal-hal seputar teknologi.</p>
        <br><br><br><br><br>
        <p id="janssen"></p>
        </div>
        <div class="janssen">
        <br><br><br><br>
        <p class="sz">Janssen Addison</p>
        <p class="f">Janssen adalah murid SMK Cinta Kasih Tzu Chi sejak masih Sekolah Dasar, sama seperti William, Janssen sudah bersekolah di Tzu Chi selama 11 tahun. Janssen juga kelas XI RPL 1 sekelas dengan William, ia memilih jurusan RPL karena menyukai koding.</p>
        <br><br><br><br><br><br><br>
        <p id="richard"></p>
        </div>
        <div class="richard">
        <br><br><br><br><br>
        <p class="sz">Richard Lee</p>
        <p class="f">Richard adalah murid SMK Cinta Kasih Tzu Chi sejak Sekolah Menengah Kejurusan, Richard bersekolah di Tzu Chi selama 1,5 tahun. Richard juga kelas XI RPL 1 sekelas dengan William dan Janssen, ia memilih jurusan RPL karena menyukai desain. </p>
        <br><br><br><br><br><br>
        <p id="hendy"></p>
        </div>
        <div class="hendy">
        <br><br><br><br><br>
        <p class="sz">Hendy Tandika</p>
        <p class="f">Hendy adalah murid SMK Cinta Kasih Tzu Chi sejak Sekolah Menengah Kejurusan, Hendy bersekolah di Tzu Chi selama 1,5 tahun, sama seperti Richard, Hendy dan Richard sudah sekolah bersama dari playgroup hingga sekolah dasar. Hendy juga kelas XI RPL 1 sekelas dengan William, Janssen, dan Richard. Ia memilih jurusan RPL karena menurutnya kode itu keren.</p>
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