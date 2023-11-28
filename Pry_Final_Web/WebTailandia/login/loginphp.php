<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "tailandia");

// Verificamos la conexión
if (!$conexion) {
    die("Error al conectarse a la base de datos: " . mysqli_connect_error());
}

// Recibimos los datos del formulario
$usuario = $_POST['usuario'];
$contra = $_POST['contra'];

// Consulta SQL para buscar el usuario en la base de datos
$sql = "SELECT * FROM administrador WHERE usuario = '$usuario'";
$resultado = mysqli_query($conexion, $sql);

// Verificamos si hay algún error en la consulta
if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($conexion));
}

// Verificamos si se encontró algún resultado
if (mysqli_num_rows($resultado) > 0) {
    $fila = mysqli_fetch_assoc($resultado);

    // El usuario existe, ahora verificamos la contraseña
    if ($fila['usuario'] == $usuario && $fila['contraseña'] == $contra) {
        // Contraseña correcta, redirigimos a la página de usuarios
        header("Location: ../usuarios/usuarios.php?correcto=bienvenido");
    } else {
        // Contraseña incorrecta, redirigimos a la página de login con un mensaje de error
        header("Location: ../login/login.php?error=incorrecto");
    }
} else {
    // El usuario no existe, redirigimos a la página de login con un mensaje de error
    header("Location: ../login/login.php?error=incorrecto");
}

// Cerramos la conexión a la base de datos
mysqli_close($conexion);
?>
