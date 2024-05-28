# Proyecto de Gestión de Usuarios - GEXTOR

## Descripción

GEXTOR es un sistema de gestión de usuarios y asistencia desarrollado en PHP. El proyecto se encuentra en fase beta y está diseñado para ser ejecutado en un entorno XAMPP.

## Características

- Registro de usuarios con información personal.
- Registro de asistencia de los empleados.
- Funcionalidades de edición y eliminación de usuarios.
- Interfaz sencilla y amigable para la gestión de usuarios y asistencia.

## Requisitos

- **XAMPP**: Se recomienda utilizar XAMPP para ejecutar el servidor web y la base de datos MySQL.
- **PHP**: Asegúrate de tener PHP instalado y configurado en tu entorno XAMPP.

## Instalación

1. **Clona el repositorio** en tu directorio de proyectos de XAMPP:
    ```bash
    git clone https://github.com/tu-usuario/nombre-del-repositorio.git
    ```

2. **Configura la base de datos**:
    - Abre XAMPP y arranca Apache y MySQL.
    - Accede a phpMyAdmin (normalmente disponible en `http://localhost/phpmyadmin`).
    - Crea una nueva base de datos llamada `db_trabajadores`.
    - Importa el archivo `db_trabajadores.sql` ubicado en la carpeta del proyecto para crear las tablas necesarias.

3. **Configura el archivo de conexión**:
    - Abre el archivo `conexion.php` en el directorio `php`.
    - Asegúrate de que las credenciales de la base de datos son correctas:
    ```php
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root2024";
    $database = "db_trabajadores";
    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    ?>
    ```

4. **Levanta el servidor**:
    - Copia el proyecto al directorio `htdocs` de tu instalación de XAMPP.
    - Accede al proyecto desde tu navegador web:
      ```
      http://localhost/nombre-del-repositorio
      ```

## Uso

- **Usuarios**: Gestiona el registro, edición y eliminación de usuarios.
- **Asistencia**: Registra la asistencia de los empleados y consulta los registros existentes.

## Estructura del Proyecto

- `index.php`: Página principal del proyecto.

- `views/`: Contiene las vistas del proyecto.
  - `views/menu.php`: Página principal del menú.
  - `views/editar_usuario.php`: Formulario para editar usuarios.
  - `views/editar_cargo.php`: Formulario para editar cargos.

- `php/`: Contiene los archivos PHP para interactuar con la base de datos.
  - `php/acceso.php`: Maneja el acceso de usuarios.
  - `php/conexion.php`: Archivo de conexión a la base de datos.
  - `php/eliminar_usuario.php`: Maneja la eliminación de usuarios.
  - `php/guardar_editar_cargo.php`: Maneja la edición de cargos.
  - `php/guardar_editar_usuario.php`: Maneja la edición de usuarios.
  - `php/insertar_asistencia.php`: Maneja la inserción de asistencias.
  - `php/listar_asistencias.php`: Lista las asistencias registradas.
  - `php/listar_cargos.php`: Lista los cargos registrados.
  - `php/listar_usuarios.php`: Lista los usuarios registrados.
  - `php/usuarios.php`: Maneja el registro de usuarios.

- `css/`: Contiene los estilos CSS para el proyecto.
  - `css/asistencia.css`: Estilos para la página de asistencia.
  - `css/bienvenido.css`: Estilos para la página de bienvenida.
  - `css/cargo.css`: Estilos para la página de cargos.
  - `css/editar.css`: Estilos para la página de edición.
  - `css/empleados.css`: Estilos para la página de empleados.
  - `css/menu.css`: Estilos para el menú principal.
  - `css/styles.css`: Estilos generales del proyecto.
  - `css/usuarios.css`: Estilos para la página de usuarios.

- `images/`: Contiene las imágenes del proyecto.
  - `images/login.png`: Imagen para la página de login.

- `js/`: Contiene los scripts JavaScript para el proyecto.
  - `js/menu.js`: Contiene la lógica para la navegación del menú.

## Fase Beta

El proyecto está en fase beta, lo que significa que puede contener errores y algunas funcionalidades pueden no estar completamente implementadas. Agradecemos cualquier retroalimentación o reporte de errores.

## Contribuciones

¡Las contribuciones son bienvenidas! Por favor, abre un issue o envía un pull request con tus sugerencias y mejoras.

## Licencia

Este proyecto está licenciado bajo la Licencia MIT. Ver el archivo [LICENSE](LICENSE) para más detalles.

Desarrollado con 💻 y ☕ por [YamaCode21].
