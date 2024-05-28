<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="../css/menu.css" rel="stylesheet">
    <link href="../css/usuarios.css" rel="stylesheet">
    <link href="../css/bienvenido.css" rel="stylesheet">
    <link href="../css/asistencia.css" rel="stylesheet">
    <link href="../css/empleados.css" rel="stylesheet">
    <link href="../css/cargo.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <aside>
        <a href="#" data-section="usuarios">Usuarios</a>
        <a href="#" data-section="asistencia">Asistencia</a>
        <a href="#" data-section="empleados">Empleados</a>
        <a href="#" data-section="cargo">Cargo</a>
        <a href="#" onclick="window.location.href='../index.php'">Cerrar Sesión</a>
    </aside>
    <section id="bienvenido" class="form-container">
        <div class="saludo-container">
            <h1><span>Bienvenido</span>, descubre <span>GEXTOR</span> la mejor solución en gestión de personal.</h1>
            <br>
            <p>Optimiza tus recursos humanos de manera eficiente y efectiva.</p>
        </div>
    </section>
    <section id="usuarios" class="form-container">
        <div class="usuarios-container">
            <h1>AGREGAR USUARIOS</h1>
            <form action="../php/usuarios.php" method="POST">
                <div class="input-container">
                    <div class="labels">
                        <p>Nombre Completo</p>
                        <p>Correo</p>
                        <p>Usuario</p>
                        <p>Contraseña</p>
                        <p>Cargo</p>
                    </div>
                    <div>
                        <input type="text" name="nom" required>
                        <input type="email" name="cor" required>
                        <input type="text" name="usu" required>
                        <input type="text" name="con" required>
                        <input type="text" name="car" required>
                    </div>
                </div>
                <button type="submit">Registrar Usuario</button>
            </form>
        </div>
    </section>
    <section id="asistencia" class="form-container" style="display: none;">
        <div class="asistencia-container">
            <h1>REGISTRO DE ASISTENCIA</h1>
            <form action="../php/insertar_asistencia.php" method="POST">
                <div class="input-container">
                    <div class="labels">
                        <p>ID Empleado</p>
                        <p>Fecha</p>
                        <p>Entrada</p>
                        <p>Salida</p>
                    </div>
                    <div>
                        <input type="text" name="emp">
                        <input type="date" name="fec" value="<?php echo date('Y-m-d'); ?>">
                        <input type="time" name="ent">
                        <input type="time" name="sal">
                    </div>
                </div>
                <button type="submit">Registrar Usuario</button>
            </form>

            <br>
            <br>

            <?php include '../php/listar_asistencias.php'; ?>
        </div>
    </section>
    <section id="empleados" class="form-container" style="display: none;">
        <div class="empleados-container">
            <h1>EMPLEADOS</h1>
            <?php include '../php/listar_usuarios.php'; ?>
        </div>
    </section>
    <section id="cargo" class="form-container" style="display: none;">
        <div class="cargo-container">
            <h1>RELACIÓN DE CARGOS</h1>
            <?php include '../php/listar_cargos.php'; ?>
        </div>
    </section>
    <script src="../js/menu.js"></script>
</body>

</html>