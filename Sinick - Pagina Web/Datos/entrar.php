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
<meta charset="UTF-8">
    <!--===============================================================================================-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--===============================================================================================-->
    <meta name="viewport" content="width=device-width, initial - scale=1">
    <!--===============================================================================================-->
<link rel="icon" type="image/png" href="Image/Logo 3.png"/>
    <title>Inicio</title>
    <link rel="stylesheet" href="entrar.css">
    <link rel="icon" type="image/png" href="../Image/Sin_título-removebg-preview.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    </head>
    <body>
   <h2>Estás entrando como:</h2></br>
<section>
</br> <p><?php echo $fetch_info['name'] ?></p>
<br>
<P> <?php echo $fetch_info['rol'] ?></p>
<br>
<p> ¡Proximamente!</P>
<p>*:..｡o○★☆○o｡..:*</P>
<div class="one"><img src="https://i.ibb.co/9YznYJx/20264755-257h1></h1>
<section>
<div class="one"><img src="../Image/arriba.jpg" alt="avatar" border="0"></div>
<div class="two"><img src="../Image/abajo.jpg" alt="avatar" border="0"></div>
</section>  
<a href="home.php">Seguir</div>
</body>
</html>
