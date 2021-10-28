<!DOCTYPE html>
<html>
    <head>
        <title>
            Hubungi Kami | Ramflyers
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
            body{
                max-width: 200%;
                margin:auto;
                background-image: url('../Assets/Image/Backgrounds/tetrisblack.jpg');
                font-family: 'Nunito Sans', sans-serif;
            }
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
                border-radius: 0 10px 0 0;
            }
            #myUL{
                background-color: black;
                padding:10px;
                border-style:solid;
                border-color: pink;
                border-width: 5px;
                border-radius: 0 0 10px 10px;
                font-family: "Nunito Sans";
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
                text-align:center;
            }
            #submit:hover{
                cursor:pointer;
            }
            #myInput{
                float:left;
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
                
            }
            li > a:only-child:after{
                content: "";
            }
            .ramflytomenu{
                margin:0 0 0 40px;
            }
            .f{
                font-size: 72px;
                color: rgb(242, 120, 141);
            }
            .f2{
                font-size: 20px;
                color: white
            }
            .f3{
                font-size: 30px;
                color: black;
            }
            .box{
                box-sizing:border-box;
                -moz-box-sizing:border-box;
                -webkit-box-sizing:border-box;
                border:thick solid whitesmoke;
                border-radius: 10px;
                background-color: rgb(242, 120, 141);
                width: 31%;
                padding: 15px;
                text-decoration: none;
                box-shadow: 0 0 1.7em 0 #ffffff;
            }

            .info{
                background-color:darkgrey;
            }
            ::placeholder{
                color: rgb(78, 78, 78);
            }
            .s{
                border: 2px solid black;
                background-color: rgb(255, 96, 123);
                box-shadow: 0 0 0.5em 0 black;
                width: 150px;
                height: 50px;
            }
            .s:hover{
                cursor: pointer;
                background-color: rgb(235, 90, 114);
                border: 1px solid black;
                box-shadow: 0 0 0.2em 0 black;
            }
            .ukuran{
                font-size: 20px;
                font-family: "Nunito Sans";
                background-color: black;
                color: white;
            }
            .container{
    background-color:transparent;
    padding:20px 40px;
    border-radius:5px;
    position:absolute;
    left:32%;
    top:50%;
    width:100%;
    height:100%;
}
.container h1{
    text-align: center;
    margin bottom:30px;
}
.container a{
    text-decoration:none;
    color:grey;
}
.btn{
    cursor:pointer;
    display:inline-block;
    width:80%;
    background:lightgrey;
    padding:15px;
    font-family:inherit;
    font-size:16px;
    border: 0;
    border-radius:5px;
    margin-left:13%;
}
.btn:focus{
    outline:0;
}
.btn:active{
    transform: scale(0.98);
}
.text{
    margin-top:30px;
}
.form-control{
    position:relative;
    margin:20px 0 40px 40px;
    width:300px;
}
.form-control input{
    background-color:transparent;
    border:0;
    border-bottom:2px black solid;
    display:block;
    width:100%;
    padding:15px 0;
    font-size:18px;
    color:black;
}
.form-control input:focus,
.form-control input:valid{
    outline:0;
    border-bottom-color:rgb(50,50,50);
}
.form-control label{
    position: absolute;
    top:15px;
    left:0;
    pointer-events:none;
}
.form-control label span{
    display:inline-block;
    font-size:18px;
    min-width:5px;
    transition: 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.form-control input:focus + label span,
.form-control input:valid + label span {
   color:rgb(50,50,50);
   transform: translateY(-30px);
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
                <li>
                    <a href="info1.php">Info</a>
                </li>
                <li class="info">
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
                <a href="logout.php">Log Out</a>
                </li>
                </ul>
                </li> 
            </div>
            </ul>
            
            </nav>
        </div>
        </div>
        <div style="text-align:center;">
            <br><br><br><br><br>
            <span class="f">Contact Us</span><br>
            <span class="f2">Want To Ask Something?</span>
            <br><br><br>
            <div class="container">
            <form method="POST" action="simpan1.php">
            <div class="box">
                <h1>Fill Here</h1>
                <div class="form-control">
                <input type="text" name="nama" autocomplete="off" required><label>Your Name</label>
                </div><div class="form-control">
                <input type="text" name="email" autocomplete="off" required><label>Your Email</label>
                </div><div class="form-control">
                <input type="text" name="subject" autocomplete="off" required><label>Subject</label>
                </div><div class="form-control">
                <input type="text" name="message" autocomplete="off" required><label>Message</label>
                </div><div class="form-control">
                <button class="btn" name="sendmymessage">Send My Message</button>
</div>

            </div>
            </div>
            <br><br><br>
        <div class="ukuran">
            </form>
</div>
                <br>
                &copy;2021 Ramfly Ramsend Incorporation. Ramflyers and the Ramflyers Logo are among our registered and unregistered trademarks in Southeast Asia and other countries.
                <br><br>
        </div>
</div>
        <script>
            
            const labels = document.querySelectorAll('.form-control label')
            labels.forEach(label => {
                label.innerHTML = label.innerText.split('').map((letter, idx) => `<span style="transition-delay:${idx * 50}ms">${letter}</span>`)
                .join('')
            }
            )
            
                
            </script>
    </body>
</html>