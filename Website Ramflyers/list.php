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
            a.biru{
                text-decoration:none;
                color: blue;
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
   <a href="admin.php">
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
            List Tutorial hanya digunakan untuk melihat, mengedit, dan mendelete tutorial yang sudah di input
        </li>
        </ul>
        </div>
        </div>

        <div class=kanan>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <a>Anda belum membuat Tutorial, tekan</a><a href="tambahtutorial.php" class="biru"> disini </a><a>untuk menambahkannya!</a>
        </div>
        </div>
</body>
</html>