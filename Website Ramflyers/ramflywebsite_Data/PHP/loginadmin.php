<!DOCTYPE html>
<html>
    <head>
        <title>Login Admin</title>
        <style>
            .fm{
                text-align: center;
                z-index: 16;
                position: absolute;
                color: black;
                padding: 40px;
                background-color: cyan;
                border-style: solid;
                border-color: grey;
                border-width: thick;
                box-sizing:border-box;
                height: auto;
                width: 600px;
                left: 512px;
                top:50%;
                left:50%;
                transform: translate(-50%,-50%);
            }
        </style>
    </head>
    <body>
        <form class="fm" action="prosesloginadmin.php" method="POST">
            <p><b>Username :</b> <input type="text" name="username" size="25"></p>
            <p><b>&nbsp;Password&nbsp;:</b> <input type="password" name="password" size="25"></p><br>
            <p><input type="submit" name="loginadmin" value="Masuk" style="background-color: grey; color: white; border-style: solid; border-color: black; width: 125px; height: 35px;"></p>
        </form>
    </body>
</html>