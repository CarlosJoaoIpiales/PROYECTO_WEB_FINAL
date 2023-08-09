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
                <form action="">
                    <h2>Iniciar Sesion</h2>
                    <h2>Usuario</h2>
                    <div class="input-box">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input id="email" type="text" required>
                        <label for="">Usuario</label>
                    </div>
                    <div class="input-box">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input id="password" type="password" required>
                        <label for="">Contraseña</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Recuerdame</label>
                        <a href="#">Recuperar Contraseña</a>
                    </div>
                    <a href="html/dashboard-user.html"><button id="login-btn" type="button">Iniciar Sesion</button></a>
                    <div class="register">
                        <p>¿No eres Usuario?<br><a href="html/login-admin.html">Inicia sesion como administrador</a></p>
                    </div>
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