<!DOCTYPE html>
<html>
    <head>
        <title>About Us | Ramflyers</title>
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
@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&display=swap');
</style>
        <style>
            html{
                scroll-behavior: smooth;
                overflow-x:hidden;
            }
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
            body{
                color: rgb(0, 0, 0);
                max-width: 200%;
                margin:auto;
                background-image: url('../Assets/Image/Backgrounds/background-1939128.jpg');
                background-size: 1590px 1300px;
                color: white;
                scroll-behavior:smooth;
                font-family: 'Nunito Sans', sans-serif;
            }
            .box{
                box-sizing:border-box;
                -moz-box-sizing:border-box;
                -webkit-box-sizing:border-box;
                border:thick solid rgb(200, 200, 200);
                border-radius: 10px;
                background-color: rgb(242, 120, 141);
                width: 30%;
                padding: 15px;
                box-shadow: 0 0 1.2em 0 #ffffff;
                font-size: 20px;
                text-decoration: none;
                color: inherit;
                margin-left: 20px;
                margin-top: 28px;
            }
            .list2{
                background-color: rgb(255, 255, 255);
                padding: 5px;
                border:2px solid #000;
                color:#000;
                box-shadow: -3px 3px 0 0 black;
                transition:0.4s ease-in;
            }
            .list2:hover{
                border:2px solid #fff;
                color:#fff;
                cursor: pointer;
                transition-duration:0.6s;
                background-color:#000;
            }
            .william{
                background-image: url('../Assets/Image/Backgrounds/wd_cat2.png');
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
                background-image: url('../Assets/Image/Backgrounds/ching_chong.png');
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
                background-image: url('../Assets/Image/Backgrounds/Screenshot_2021-09-28-18-08-08-87_41be58ba4732ca6a1097a3b2524cd3ac.jpg');
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
                background-image: url('../Assets/Image/Backgrounds/hendy_cat.png');
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
            a{
                text-decoration: none;
                color: white;
            }
            .h{
                border: thin solid black;
                border-radius: 100px;
                background-color:black;
            }
            footer{
                font-size: 20px;
            }
            .ukuran{
                font-size: 20px;
                background-color: black;
                color: white;
                text-align:center;
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
            .list1{
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
            .garis{
                font-size:50px;
                width:9000px;
                position:relative;
                animation:garis 10s infinite alternate;
            }
            .garisatas{
                background:rgb(255,255,255);
                border:thin solid white;
                width:98%;
                margin:0 0 0 1%;
            }
            @keyframes garis{
                from{left:0px;}
                to{left:-500px;}
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
        <div style="margin-left: 835px;">
        <li>
            <a href="home1.php">Home</a>
        </li>
        <li class="list1">
            <a href="info1.php">Info</a>
        </li>
        <li>
            <a href="hub1.php">Hubungi Kami</a>
        </li>        
        <li>
            <div class=searchbar>
            <a class="toggle-button" href="#">
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
        <a href="../../index.html">Log Out</a>
        </li>
        </ul>
        </li> 
    </div>
    </ul>
    
    </nav>
</div>
</div>
        <br><br><br>
        <p id="ramflyers"></p><br><br><br>
        <p class="sz">Ramflyers</p><hr class="garisatas">
        <p class="g">Ramflyers adalah nama tim yang kami bentuk melalui nama buatan yaitu Ramfly Ramsend. Ramflyers sendiri sebenarnya terdiri dari 6 orang, yang mana terdapat murid dari kelas lain dan sekolah lain. Namun kami hanya berempat disini karena projek website kami ini terdiri dari kelas kami saja, XI RPL 1. Anggota Ramflyers pada XI RPL 1 hanya berempat dan jadi hanya ada kami saja. Kami juga mempunyai sosial media untuk tim ini, Instagram : @ramflyers.gaming, YouTube : Ramflyers.</p>
        <br><br><br><br>
        <div class="box">
            <p align="center">Daftar Isi</p><hr class="h"><br>
        <p><a href="#ramflyers" class="list2">> Ramflyers</a></p>
        <p><a href="#william" class="list2">> William Tann</a></p>
        <p><a href="#janssen" class="list2">> Janssen Addison</a></p>
        <p><a href="#richard" class="list2">> Richard Lee</a></p>
        <p><a href="#hendy" class="list2">> Hendy Tandika</a></p>
        </div>
        <div class="garis">
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
        </div>
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
        <br>
        ©2021 Ramfly Ramsend Incorporation. Ramflyers and the Ramflyers Logo are among our registered and unregistered trademarks in Southeast Asia and other countries.
        <br><br>
</div>
    </body>
</html>