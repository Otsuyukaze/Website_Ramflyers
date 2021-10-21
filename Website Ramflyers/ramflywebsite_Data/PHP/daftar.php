<html>
    <head>
    <meta charset="UTF-8" />  
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />  
        <title>Form Register</title>
        <style>
@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&display=swap');
</style>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Muli&display=swap');*{
                box-sizing:border-box;
            }
            @keyframes move_wave {
    0% {
        transform: translateX(0) translateZ(0) scaleY(1)
    }
    50% {
        transform: translateX(-25%) translateZ(0) scaleY(0.55)
    }
    100% {
        transform: translateX(-50%) translateZ(0) scaleY(1)
    }
}
body{
    overflow:none;
    font-family: 'Nunito Sans', sans-serif;
}
.floatAboveEverything {
    z-index: 16;
	position: absolute;
    text-align: center;
    color: black;
    padding: 30px;
    background-color: rgb(255, 255, 255);
    box-shadow:0 0 .25em rgba(0,0,0,.9);
    box-sizing:border-box;
    width: 500px;
    left: 512px;
    border-radius: 10px;
    top:50%;
    left:50%;
    transform: translate(-50%,-50%);
}
.container{
    background-color:rgb(0,0,0);
    padding:20px 40px;
    border-radius:5px;
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
    width:100%;
    background:lightgrey;
    padding:15px;
    font-family:inherit;
    font-size:16px;
    border: 0;
    border-radius:5px;
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
    margin:20px 0 40px;
    width:300px;
}
.form-control input{
    background-color:transparent;
    border:0;
    border-bottom:2px black solid;
    display:block;
    width:140%;
    padding:15px 0;
    font-size:18px;
    color:black;
}
.form-control input:focus,
.form-control input:valid{
    outline:0;
    border-bottom-color:grey;
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
   color:grey;
   transform: translateY(-30px);
}
input:hover[type=submit]{
      cursor: pointer;
      background-color: rgb(255, 255, 255);
}
.waveWrapper {
    overflow: hidden;
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    margin: auto;
}
.waveWrapperInner {
    position: absolute;
    width: 100%;
    overflow: hidden;
    height: 100%;
    bottom: -1px;
    background-image: linear-gradient(to top, #e35bc3 20%, #e39754 80%);
}
.bgTop {
    z-index: 15;
    opacity: 0.5;
}
.bgMiddle {
    z-index: 10;
    opacity: 0.75;
}
.bgBottom {
    z-index: 5;
}
.wave {
    position: absolute;
    left: 0;
    width: 200%;
    height: 100%;
    background-repeat: repeat no-repeat;
    background-position: 0 bottom;
    transform-origin: center bottom;
}
.waveTop {
    background-size: 50% 100px;
}
.waveAnimation .waveTop {
  animation: move-wave 3s;
   -webkit-animation: move-wave 3s;
   -webkit-animation-delay: 1s;
   animation-delay: 1s;
}
.waveMiddle {
    background-size: 50% 120px;
}
.waveAnimation .waveMiddle {
    animation: move_wave 10s linear infinite;
}
.waveBottom {
    background-size: 50% 100px;
}
.waveAnimation .waveBottom {
    animation: move_wave 15s linear infinite;
}
.music {
    z-index: 17;
    position: absolute;
}
        </style>
    </head>
    <font face="Arial">
    <body><br><br><br><br><br><br><br><br><br><br><br><br>
        <audio autoplay loop class="music">
            <source src="../ramflywebsite_Data/Assets/Audio/9convert.com - C418   Sweden  Minecraft Volume Alpha.mp3" type="audio/mp3">
        </audio>
        <div class="container">
        <form action="prosesdaftar.php" method="post" class="floatAboveEverything"><br>
            <h1>Form Register</h1>
            <div class="form-control">
                <input type="text" name="username" autocomplete="off" required>
                <label>Username</label>
</div>
<div class="form-control">
    <input type="password" name="password" required>
    <label>Password</label>
</div>
<button class="btn" name="logins">Create New Account</button>
<p class="text">Already Have an Account?<a href="login.php">Log In</a>
        </form>
        <div class="waveWrapper waveAnimation">
            <div class="waveWrapperInner bgTop">
              <div class="wave waveTop" style="background-image: url('../Assets/Image/Animated/wave-top.png')"></div>
            </div>
            <div class="waveWrapperInner bgMiddle">
              <div class="wave waveMiddle" style="background-image: url('../Assets/Image/Animated/wave-mid.png')"></div>
            </div>
            <div class="waveWrapperInner bgBottom">
              <div class="wave waveBottom" style="background-image: url('../Assets/Image/Animated/wave-bot.png')"></div>
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
    </font>
</html>