<html>
    <head>
        <title>Form Login</title>
        <style>
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
.floatAboveEverything {
    z-index: 16;
	position: absolute;
    text-align: center;
    color: black;
    padding: 0px;
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
            <source src="9convert.com - C418   Sweden  Minecraft Volume Alpha.mp3" type="audio/mp3">
        </audio>
        <form action="proseslogin.php" method="post" class="floatAboveEverything"><br>
            <table align="center">
                <tr>
                    <td align="center" colspan="3"><h3>Login</h3></td>
                </tr>
                <tr>
                    <td><br>Username</td>
                    <td style="width: 5px;"><br>:</td>
                    <td><br><input type="text" name="username" size="20"></td>
                </tr>
                <tr>
                    <td>Password<br></td>
                    <td style="width: 5px;">:</td>
                    <td><input type="password" name="password" size="20"></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><br><input type="submit" name="login" value="Masuk" style="background-color: rgb(160, 160, 160); color: white; border-style: solid; border-radius: 6px; border-color: rgb(0, 0, 0);"></td>
                </tr>
            </table><br>
        </form>
        <div class="waveWrapper waveAnimation">
            <div class="waveWrapperInner bgTop">
              <div class="wave waveTop" style="background-image: url('wave-top.png')"></div>
            </div>
            <div class="waveWrapperInner bgMiddle">
              <div class="wave waveMiddle" style="background-image: url('wave-mid.png')"></div>
            </div>
            <div class="waveWrapperInner bgBottom">
              <div class="wave waveBottom" style="background-image: url('wave-bot.png')"></div>
            </div>
          </div>
    </body>
    </font>
</html>