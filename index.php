<?php
//database conection  file
include('./php/conectionDB.php');


//Enter or press button ingresar
if (isset($_POST['submit'])) {
    /*
    //getting the post values
    $emailEnter = $_POST['email'];
    $passwordEnter = $_POST['password'];

    //search dates in DB
    $ret = mysqli_query($con, "select * from usuarios where u_correo = '$emailEnter' or u_nick = '$emailEnter'");
    $row = mysqli_num_rows($ret);
    if ($row > 0) {
        //Search users in table usuarios
        while ($row = mysqli_fetch_array($ret)) {
            $user = $row['u_nick'];
            $email = $row['u_correo'];
            $password = $row['u_contraseña'];
            $idUser = $row['idUsuario'];
            if ($user == $emailEnter || $email == $emailEnter) {
                if ($password == $passwordEnter) {
                    $rol_user = mysqli_query($con, "select * from roles_usuarios");
                    $row1 = mysqli_num_rows($rol_user);
                    //Search in table roles_usuarios
                    while ($row1 = mysqli_fetch_array($rol_user)) {
                        $idUser1 = $row1['idUsuario'];
                        $idRol = $row1['idRol'];
                        if ($idUser1 == $idUser && $idRol == 1) {
                            header("Location: php/adminView.php");
                            exit;
                        }
                    }
                }else {
                    echo "<script>alert('La contraseña es incorrecta');</script>";
                }
            }else {
                echo "<script>alert('El correo o el usuario son incorrectos');</script>";
            }
        }
    }
}
    
    */

    // Inicia la sesión
    session_start();

    //getting the post values
    $emailEnter = $_POST['email'];
    $passwordEnter = $_POST['password'];

    //search dates in DB
    $ret = mysqli_query($con, "select * from usuarios");
    $row = mysqli_num_rows($ret);
    $authenticated = false;

    // Search users in table usuarios
    while ($row = mysqli_fetch_array($ret)) {
        $user = $row['u_nick'];
        $email = $row['u_correo'];
        $password = $row['u_contraseña'];
        $idUser = $row['idUsuario'];

        if ($user == $emailEnter || $email == $emailEnter) {
            if ($password == $passwordEnter) {
                $authenticated = true;
                break;
            } else {
                echo "<script>alert('La contraseña es incorrecta');</script>";
            }
        }
    }

    if ($authenticated) {
        $rol_user = mysqli_query($con, "select * from roles_usuarios");
        $row1 = mysqli_num_rows($rol_user);

        // Search in table roles_usuarios
        while ($row1 = mysqli_fetch_array($rol_user)) {
            $idUser1 = $row1['idUsuario'];
            $idRol = $row1['idRol'];

            if ($idUser1 == $idUser && $idRol == 1) {
                header("Location: php/adminView.php");
                exit;
            }
        }
    } else {
        echo "<script>alert('El correo o el usuario son incorrectos');</script>";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/estiloLogin.css" type="text/css">
    <link rel="icon" href="img/LogoVerde.png">
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="" method="POST">
                    <h2>Iniciar Sesion</h2>
                    <div class="input-box">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input id="email" type="text" required name="email">
                        <label for="">Usuario o Correo</label>
                    </div>
                    <div class="input-box">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input id="password" type="password" required name="password">
                        <label for="">Contraseña</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Recuerdame</label>
                        <a href="#">Recuperar Contraseña</a>
                    </div>
                    <button id="login-btn" type="submit" name="submit">Iniciar Sesion</button>
                </form>
            </div>
        </div>
    </section>

    <!--scripts-->
    <script src="js/scriptLogin.js"></script>
    <!--script para los iconos-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>