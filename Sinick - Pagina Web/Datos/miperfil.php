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
<html lang="en" ng-app="Sololearn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mi perfil</title>

  <link rel="stylesheet" href="miperfil.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
  <section class="hero is-small is-info is-bold">
        <div class="hero-body has-text-centered">
            <figure class="is-1by1" align="center">
                <img src="" alt="Profile Pic">
            </figure>
            <h1 class="title"> Perfil <?php echo $fetch_info['name'] ?>  <a class="button is-small is-primary" href="#"> <br>
                <span class="icon"><i class="fa fa-user-o"></i></span><span> <?php echo $fetch_info['rol'] ?> </span></a>
            </h1> 
                <h2 class="subtitle"><?php echo $fetch_info['ficha'] ?></h2>
            
        </div>
        </section>
    <section class="section" id="profile">
        <div class="box">
            <h2 class="subtitle"> Información personal </h2>
            <p>Nombre completo: <?php echo $fetch_info['name'] ?></p>
            <p>Tipo de documento: <?php echo $fetch_info['tipodoc'] ?> </p>
            <p>Nro Documento: <?php echo $fetch_info['nro_ide'] ?></p>
        </div>
        <div class="box">
            <h2 class="subtitle">Información de contacto</h2>
          
                <div>
                    <p>Correo: <?php echo $fetch_info['email'] ?> </p>
                </div>
        </div>
        <div class="box" id="piechart">
            <p>Fecha inicio: 03/Ago/2020</p>
        </div>
        <div class="box" id="piechart">
            Fecha fin: 03/Ago/2022
        </div>
    
</body>
</html>