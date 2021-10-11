<html>
    <title>Page Editor | Ramflyers</title>
    <header>
        <style>
            .header {
                margin: -8;
                background-color: black;
                width: 100%;
                height: 60px;
                position: fixed;
            }
            .header a {
                float: right;
                color: white;
                text-decoration: none;
                padding: 10px;
            }
            .ramfly {
                color: white;
                margin: 18px;
                font-size: 20px;
            }
            .button1 {
                margin-top: -59px;
                border: none;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                cursor: pointer;
                border-radius: 20px;
            }
            .button1:hover {
                background-color: rgb(120, 120, 120);
                color: white;
            }
            .button2 {
                margin-top: -59px;
                color: white;
                border: none;
                background-color: black;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                cursor: pointer;
            }
            .button2:hover {
                color: rgb(160, 160, 160);
            }
            .sidebar {
                margin-left: -10;
                margin-top: 50px;
                padding: 0;
                background-color: rgb(40, 40, 40);
                position: fixed;
                height: 100%;
                overflow: auto;
            }
            .sidebar a {
                display: block;
                color: white;
                padding-left: 9px;
                padding-right: 9px;
                padding-top: 16px;
                text-decoration: none;
            }
            .sidebar img:hover {
                -webkit-filter: brightness(50%);
            }
        </style>
    </header>
    <body>
        <div class="header">
            <div class="ramfly">
                Ramflyers
            </div>
            <a href="">
                <button class="button1">Publish</button>
            </a>
            <a href="">
                <button class="button2">Preview</button>
            </a>
        </div>
<div class="sidebar">
  <a href="">
        <img src="add_button.png" width=40px height=40px>
  </a>
  <a href="">
        <img src="text_button.png" width=40px height=40px>
  </a>
  <a href="">
        <img src="edit_text_button.png" width=40px height=40px> 
  </a>
  <a href="">
        <img src="media_button.png" width=40px height=40px> 
  </a>
  <a href="">
        <img src="background_button.png" width=40px height=40px> 
  </a>
</div>
    </body>
</html>
