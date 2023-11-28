<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "tailandia");
if (!$conexion) {
    die("Error al conectarse a la base de datos: " . mysqli_connect_error());
}

// Recibimos los datos del formulario

$nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
$apellido = mysqli_real_escape_string($conexion, $_POST['apellido']);
$email = mysqli_real_escape_string($conexion, $_POST['email']);
$telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
$destino = mysqli_real_escape_string($conexion, $_POST['destino']);
$fecha = mysqli_real_escape_string($conexion, $_POST['fecha']);
$camisa = mysqli_real_escape_string($conexion, $_POST['camisa']);
$edad = $_POST['edad'];

if ($camisa == "NO") {
    $talla = "NINGUNA";
} else {
    $talla = mysqli_real_escape_string($conexion, $_POST['talla']);
}

$comentarios = mysqli_real_escape_string($conexion, $_POST['comentarios']);

// Insertamos los datos en la base de datos
$insertar = "INSERT INTO usuarios (nombre, apellido, email, telefono, destino, fecha, camisa, edad, talla, comentarios) VALUES ('$nombre','$apellido', '$email','$telefono','$destino','$fecha','$camisa','$edad','$talla','$comentarios')";

if (mysqli_query($conexion, $insertar)) {
    header("Location: ../home/inicio.php?registrado=correcto");
} else {
    echo "Error al registrar el usuario: " . mysqli_error($conexion);
    header("Location: ../home/inicio.php?error=incorrecto");
}

// Cerramos la conexión a la base de datos
mysqli_close($conexion);
?>
