<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="css/styles.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="login-container">
        <div class="login-left">
            <img src="images/login.png" alt="">
            <p>"Ingresa a <span class="gextor">GEXTOR</span> y simplifica tu gestión laboral."</p>
        </div>
        <div class="login-right">
            <div class=login-welcome>
                <h3>Welcome back</h3>
            </div>
            <form action="php/acceso.php" method="POST">
                <p>Login your account</p>
                <input type="text" placeholder="Username" name="username">
                <input type="password" placeholder="Password" name="contrasena">
                <div class="form-buttons">
                    <button class="form-login" type="submit">Login</button>
                    <button class="form-create">Create Account</button>
                </div>
            </form>

            <?php
            // Verificar si hay un mensaje de error
            if (isset($_GET['error']) && $_GET['error'] === 'credenciales') {
                echo "<p style='margin: 0;color: red; text-align: center; font-size: 14px; width: 75%;'>Las credenciales son incorrectas. Por favor, intenta nuevamente.</p>";
            }
            ?>

            <a href="#">Forgot Password?</a>
        </div>
    </div>
</body>

</html>