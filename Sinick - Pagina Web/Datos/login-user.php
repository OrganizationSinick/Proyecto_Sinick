<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="../Image/Sin_título-removebg-preview.png"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                <div align="center"><img src="../Image/Logo 3.png" class="logo" alt="Logo"></div>
                    <br>
                    <h2 class="text-center">Iniciar Sesion</h2>
                    <br>
                    <p class="text-center">Inicie sesión con su correo electrónico y contraseña.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Correo Electronico" required value="<?php echo $email ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Contraseña" required>
                    </div>
                    <br>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Recuperar contraseña?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Ingresar">
                    </div>
                    <br>
                    <div class="link login-link text-center">¿Aún no eres miembro?<a href="signup-user.php">Regístrese ahora</a></div>
                    <div class="link login-link text-center"><a href="../Index.html">Volver al inicio</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>