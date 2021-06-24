<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrarse</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="../Image/Sin_título-removebg-preview.png"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user.php" method="POST" autocomplete="">
                <div align="center"><img src="../Image/Logo 3.png" class="logo" alt="Logo"></div>
                    <h2 class="text-center">Formulario</h2>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Nombre Completo" required value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Correo Electronico" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Contraseña" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirmar Contraseña" required>
                    </div>
                    <div class="form-group">
                        <p>Tipo documento</p>
                        <select name="tipodoc">
                            <option value="C.C" name="tipodoc">Cedula ciudadania</option>
                            <option value="T.I" name="tipodoc">Tarjeta identidad</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="number" name="nro_ide" placeholder="Numero de identificación" required value="<?php echo $nro_ide ?>">
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                    </div>
                        <input class="form-control" type="number" name="ficha" placeholder="Numero de ficha" requiredvalue="<?php echo $ficha ?>">
                    </div>
                    <div class="form-group">
                        <p>Seleccione su rol</p>
                        <select name="rol">
                            <option value="Alumno" name="rol">Alumno</option>
                            <option value="Profesor" name="rol">Profesor</option>
                        </select>
                    </div>
                    <div class="form-group">
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Registrarse">
                    </div>
                    <div class="link login-link text-center">Ya eres usuario? <a href="login-user.php">Entra aqui</a></div>
                </form>
            </div>
        </div>
    </div>
    <br>
</body>
</html>