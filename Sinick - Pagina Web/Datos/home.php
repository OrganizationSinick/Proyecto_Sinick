<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>

    <!DOCTYPE html>
<html>
<head>
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | Dashboard</title>
    
    <!--===============================================================================================-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--===============================================================================================-->
    <meta name="viewport" content="width=device-width, initial - scale=1">
    <!--===============================================================================================-->
<link rel="icon" type="image/png" href="Image/Logo 3.png"/>
<link rel="stylesheet" type="text/css" href="dashboard.css">
<link rel="icon" type="image/png" href="../Image/Sin_título-removebg-preview.png"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="index.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

    <header>
        <div class="logo">
          <img src="../Image/Logo 3.png" class="logo" alt="logo">
        </div>
        <div onclick="clk()" id="c"><p align="center" id="a">Modo noche/dia</p></div>
  
        <div class="right_area">
            <p id="logout_btn"><a href="logout-user.php">Cerrar sesión</a></p>

        </div>
    </header>
<body id="b">
        <div id="con">
            <div class="sub">
                <div class="hi-low">
                    <i class="fa fa-home"></i>
                </div>
                <span class="hi">Dashboard</span>
            </div>
            <div class="below">
                <div class="board">
                    <i class="fa fa-database"></i>
                    <div class="unboard"></div>
                    <div class="unboard"></div>
                </div>
                <div class="txt">
                    <span class="hi">Actividades</span>
                    <span class="low"><a href="">Recibidos<a></span>
                    <span class="low"><a href="">Pendientes</a></span>
                </div>
            </div>
            <div class="below">
                <div class="board">
                    <i class="fa fa-users"></i>
                    <div class="unboard"></div>
                    <div class="unboard"></div>
                </div>
                <div class="txt">
                    <span class="hi">Estudiantes</span>
                    <span class="low"><a href="index1.php">Listar</a></span>
                    <span class="low"><a href="index.php">Administrar</a></span>
                </div>
            </div>
            <div class="sub">
                <div class="hi-low">
                    <i class="fa fa-cog"></i>
                </div>
                <span class="hi"><a href="miperfil.php">Mi cuenta</a></span>
            </div>
                   <div class="sub">
                <div class="hi-low">
                    <i class="fa fa-question-circle"></i>
                </div>
                <span class="hi"><a href="bot/bot.html">¿Ayuda?</a></span>
            </div>
        </div>
</div>
    <div class="Content">
                    <br>
                    
                 <div id="app" class="container"></div>

    <script src="index.js"></script>
                    </div></body>
</html>
<style type="text/css">
   
                body{
    margin:0px;
    padding:0px;
    font-family: "Roboto",sans-serif;
}


header{
    position: fixed;
    background: #009688;
    width: 100%;
    height: 70px;
    padding:30px;
    margin-top:-100px;
    
}

.left_area h3{
    color: #fff;
    font-weight: 900px;
    font-size: 22px;
    text-transform: uppercase;
    margin: 0px;
    cursor: pointer;


}
.left_area span{
    color: bkack;

}

#logout_btn{
    padding: 5px;
    float: right;
    color: #009688;
    font-weight: 600px;
    background: white;
    text-decoration: none;
    margin-right: 20px;
    margin-top: -15px;
    border-radius: 10px;
    transition: 0.5s;
    transition-property: background;
}

#logout_btn:hover{
    background: #097E5E;
}



.Content{
margin-top: 100px;
    margin-left: 250px;
    background: white;
    background-position: center;
    background-size: cover;
    height: 100vh;
    transition: 0.5s;
}

#check:checked ~ .Content{
    margin-left: 60px; 
}

#check{
    display: none;
}
h3 a{
    text-decoration: none;
    color: #fff;
}
#con {
    width:5%;
    height:100%;
    background-color:black;
    
    box-shadow:2px 4px 20px 0 rgba(45,45,45,0.2);
    display:flex;
    flex-direction:column;
    overflow:hidden;
    transition:width 1s;
    margin-top:-30px;
    position: fixed;
    
}
#con:hover {
    width:20%;
    background: rgb(0,0,0);
background: linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(0,150,136,1) 100%);
    border-radius:4px;
}
#con:hover .hi, #con:hover .txt{
    display:flex;
}
.sub {
    display:flex;
    margin:10px;
    align-items:center;
    height:50px;
}
.hi-low {
    background-color:rgba(80,80,80,.3);
    height:50px;
    width:50px;
    border-radius:25px;
    display:flex;
    color:rgba(80,80,80);
    justify-content:center;
    align-items:center;
    margin-left:5px;
}
i {
    font-size:25px;
}
.hi{
    color:rgba(80,80,80);
    font-size:25px;
    margin-left:5px;
    display:none;
}
.sub:hover > .hi-low {
    background:linear-gradient(#03f7a5,#0aa77f);
    box-shadow:0 0 30px 0 #06e964;
    color:white;
}
.sub:hover > .hi{
    color:white;
    font-weight:bold;
    font-variant:small-caps;
}
.below {
    display:flex;
    margin:10px;
}
.board {
    background-color:rgba(80,80,80,0.3);
    height:150px;
    width:50px;
    margin-left:5px;
    border-radius:4pc;
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    color:rgba(80,80,80);
}
.unboard {
    width:10px;
    height:10px;
    border-radius:5px;
    background:linear-gradient(#E64ECB,#e787ac);
    margin:20px;
}
.txt {
    display:none;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}
.low {
    margin:15px;
    color:rgba(80,80,80);
    font-size:20px;
}
.below:hover > .board {
    background:linear-gradient(#E64ECB,#e787ac);
    color:white;
    box-shadow:0 0 30px 0 #e787ac;
}
.below:hover .unboard{
    background:linear-gradient(white,white);
}
.below:hover .hi{
    color:white;
    font-weight:bold;
    font-variant:small-caps;
}
.below:hover .low{
    color:white;
} 
    
.listItem {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 0.1em;
  background-color: white;
  width: 300px;
  height: 200px;
  text-align: center;
  border: solid rgba(36, 36, 36, 0.11) 1px;
  border-radius: 20px;
  box-shadow: 10px 10px 10px rgba(5, 1, 15, 0.2);
  margin: 1em;
}

img {
  border-radius: 100%;
}

#app {
  width: 100%;
  display: grid;
  grid-template-columns: auto auto;
  justify-content: center;
}
h3 {
  font-size: 0.95rem;
}
p {
  font-size: 0.7rem;
}
button {
  background-color: white;
  border: grey solid 1px;
  width: 100px;
  height: 2.3em;
  color: black;
  position: relative;
  bottom: -25px;
  border-radius: 20px;
  cursor: pointer;
  margin-bottom: 2em;
}
button:hover {
  background-color: grey;
  color: white;
}
#c {
    width:70px;
    height:40px;
    background-color:black;
    position:absolute;
    margin:auto;
    left:0;
    right:0;
    top:0;
    bottom:0;
    border-radius:10px;
    font-size:20px; 
}
#a{
    color:white;
}
    
</style>
