<html>
    <title>Page Editor | Ramflyers</title>
    <head>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&display=swap');
</style>
        <style>
            body{
                font-family: 'Nunito Sans', sans-serif;
            }
            .header {
                margin:-10px 0 0 -8px;
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
                padding:16px;
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
            .button2:hover{
                color: rgb(160, 160, 160);
            }
            .button3{
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
                border-style:none;
                border-width:0%;
                transition:0.5s ease-out;
            }
            .button3:hover{
                transform:translateX(-5px);
                border-style:none none solid none;
                border-width:100%;

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
            .sidebar button{
                display: block;
                color: white;
                padding-left: 9px;
                padding-right: 9px;
                padding-top: 16px;
                text-decoration: none;
                background-color:rgb(40, 40, 40);
                border:none;
            }
            
            .sidebar img:hover {
                -webkit-filter: brightness(50%);
            }
            .tampilan{
                width: 100%;
                height:100%;
                margin:6% 0 0 3.5%;
                font-size:20px;
                float:left;
                padding:10px;
            }
            .atas{
                width:90%;
                border:2px solid black;
                background-color:black;
                border-radius:2px;   
            }
            .atasjudul{
                text-align:center;
            }
            #new_chq{
                padding:20px;
            }
            #new_chq textarea{
                width:100%;
                height:20%;
                outline:none;
                border-width:2px;
                border-style:none none solid none;
                border-color:black;
            }
            #new_chq input{
                margin:0 0 3% 0;
                width:25%;
                height:5%;
                outline:none;
                border-width:2px;
                border-style:none none solid none;
                border-color:black;
            }
            #new_chq div{
                padding:10px;
                border:1px solid black;
                width:50%;
                margin:0 0 1% 0;
                max-width:100%;
            }
            #new_chq img{
                width:auto;
                height:auto;
            }
            #label{
                border-width:none;
                border-color:black;
                border-style:none;
                transition:0.5s ease-out;
                
            }
            #label:hover{
                transform:translateX(-10px);
                cursor:pointer;
                border-style:none none solid none;
                border-width:4px;
                border-color:grey;
            }
            input[type=submit]{
            margin-top: -10px;
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
            </style>
    </head>
    <body id="bgchange">
        <script>
            function yakin(){
            if(window.confirm("Anda Yakin Ingin Kembali?")){ 
                window.location.href="list.php";
                }
                }
                $('.add').on('click',add);
                $('.remove').on('click',remove);  
                var no = 1;
                var noo = 1;
                function add(){
            var new_chq_no = parseInt($('#total_chq').val())+1;
            var new_input= "<div id='new_"+new_chq_no+"'><input type ='text' placeholder='Title' name='title'><br><textarea placeholder='Masukkan Text di kolom ini' name='text'></textarea><br></div>";
            $('#new_chq').append(new_input);
            $('#total_chq').val(new_chq_no);
            }  
            function media(){
            var new_chq_no = parseInt($('#total_chq').val())+1;
            var new_input= "<div id='new_"+new_chq_no+"'><input type='file' accept='image/*' name='image"+noo+"' id='file' onchange='loadFile(event)' style='display:none;'><label for='file' style='cursor:pointer;'>Upload Image Here</label><br><img id='output'></div>";
            $('#new_chq').append(new_input);
            $('#total_chq').val(new_chq_no);
            }  
                
          function remove(){
            var last_chq_no = $('#total_chq').val();
            if(last_chq_no>1){
              $('#new_'+last_chq_no).remove();
              $('#total_chq').val(last_chq_no-1);
            }
          }
          
            </script>
            
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <form runat="server">
    <div class="header">
            <div class="ramfly">
                Ramflyers
            </div>

            <a href="">
                <button type="button" class="button1">Publish</button>
            </a>
            <a onclick="window.confirm('Really?')">
                <button type="button" class="button2">Preview</button>
            </a>
            <a onclick="yakin()">
                <button type="button" class="button3">Back to list?</button>
            </a>
            <a href="">
                <button type="submit" name="submitpage" class="button2">Save</button>
            </a>
        </div>
                </div>
<div class="sidebar">
  <button type="button" onclick="add()">
        <img src="add_button.png" width=40px height=40px>
                </button>
  <button type="button" onclick="media()">
        <img src="media_button.png" width=40px height=40px> 
                </button>
  <button type="button" onclick="remove()">
        <img src="delete_button_black2.png" width=40px height=40px> 
                </button>
</div>
<div class="tampilan" id="bgchange">
    <div class="atasjudul">
    <?php
        include("koneksi.php");
                if( !isset($_GET['id']) ){
         echo '<script> alert("Maaf ada kesalahan dalam data")window.location.href="list.php"';
        }
        $id = $_GET['id'];
        $query=mysqli_query($db,"SELECT * FROM tutorial WHERE id=$id");
        while($dataadmin=mysqli_fetch_array($query))
        {
            $judul = $dataadmin['judul'];
            $topik= $dataadmin['topik'];
            $kategori = $dataadmin['kategori'];
        // include("koneksi.php");
        // if( !isset($_GET['id']) ){
        //     header('Location: list.php');
        // }
        // $id = $_GET['id'];
        // $sql = "SELECT * FROM tutorial WHERE id=$id";
        // $query = mysqli_query($db, $sql);
        // $dataadmin = mysqli_fetch_assoc($query);
        // if( mysqli_num_rows($query) < 1 ){
        //     die("data tidak ditemukan...");
        // }        
        // if($dataadmin)
        // {
        //     $judul = $dataadmin['judul'];
        //     $topik= $dataadmin['topik'];
        //     $kategori = $dataadmin['kategori'];
?>
<h1>
<?= $dataadmin['judul']; ?>
        </h1>
        <hr class="atas">
        </div>
        <h4>
            Topik: 
        <?= $dataadmin['topik'];?>
        <br>
        Kategori: 
        <?= $dataadmin['kategori']; ?>
        </h4>
        <br>
        <?php
        }
?>
<input type="color" id="favcolor" name="color" value="" style="display:none;">
    <label for="favcolor" id="label">Pilih Warna Untuk Warna Background</label>
    <script>
        var theInput = document.getElementById("favcolor");
        var theColor = theInput.value;
        theInput.addEventListener("input", function() {
        document.getElementById("bgchange").style.backgroundColor = theInput.value;
        }, false
        );
</script>
<div id="new_chq"></div>
    <input type="hidden" value="1" id="total_chq">
            </div>
            <script>
        var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
        };
        </script>
        
    </form>
        </body>
</html>
