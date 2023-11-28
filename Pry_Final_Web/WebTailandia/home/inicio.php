<?php
$registrado = false;
$error = false;

// Verifica si hay un parámetro 'registrado' en la URL
if (isset($_GET['registrado'])) {
    $registrado = $_GET['registrado'];
} elseif (isset($_GET['error'])) {
    // Verifica si hay un parámetro 'error' en la URL
    $error = $_GET['error'];
}

$errors = array();
$rights = array();

// Comprueba los valores de 'registrado' y 'error' para mostrar mensajes adecuados
if ($registrado == "correcto") {
    $rights[] = "Usted se ha registrado correctamente.";
} elseif ($error == "incorrecto") {
    $errors[] = "Ha ocurrido un error al registrarse. Intente nuevamente más tarde.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración del encabezado HTML -->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../home/scss/inicio.scss">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Home</title>
</head>
<body data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="300"
     data-aos-offset="0">

<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg navbar-dark text-dark">
    <div class="container-fluid d-flex justify-content-between">
        <!-- Enlace a la página principal -->
        <ul class="navbar-nav">
            <li class="nav-item text-start">
                <a class="nav-link active text-light fs-2 ms-1" aria-current="page" href="#">Tailandia</a>
            </li>
        </ul>

        <!-- Enlaces centrados -->
        <div class="card rounded-pill text-center mt-2">
            <div class="card-body" style="background-color: transparent;">
                <!-- Enlaces a otras secciones -->
                <a class="navbar-brand text-light fs-4 me-5 ms-5" href="../comida/comida.html">Comida</a>
                <a class="navbar-brand text-light fs-4 me-5 ms-5" href="../historia/historia.html">Historia</a>
                <a class="navbar-brand text-light fs-4 me-5 ms-5" href="../clima/clima.html">Clima</a>
                <a class="navbar-brand text-light fs-4 me-5 ms-5" href="../destinos/destinos.html">Destinos</a>
                <a class="navbar-brand text-light fs-4 me-5 ms-5" href="../contacto/contacto.html">Contacto</a>
            </div>
        </div>

        <!-- Elementos en el lado derecho -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <!-- Botón de registro -->
                <a class="nav-link text-light" href="../registro/registro.php">
                    <button class="btn btn-light rounded-pill" style="width: 10em"><label class="fs-5 fw-semibold">Registrarse</label></button>
                </a>
            </li>
            <li class="nav-item">
                <!-- Botón de inicio de sesión -->
                <a class="nav-link text-light" href="../login/login.php">
                    <button class="btn btn-dark rounded-pill" style="width: 3em"><label class="fs-5 fw-semibold"><i class="bi bi-key-fill fs-5"></i></label></button>
                </a>
            </li>
        </ul>
    </div>
</nav>

<!-- Contenido central -->
<div class="d-flex align-items-center justify-content-center" style="height: 90vh;">
    <?php
    // Muestra mensajes de éxito o error según las variables definidas anteriormente
    if (isset($errors)) {
        if (count($errors) > 0) {
            ?>
            <center>
                <div class="position-fixed top-0 start-50 translate-middle-x p-3 w-100">
                    <div class="col-lg-6 col-md-12">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php
                            foreach ($errors as $error) {
                                echo $error . '<br>';
                            }
                            ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </center>
            <?php
        }
    }

    if (isset($rights)) {
        if (count($rights) > 0) {
            ?>
            <center>
                <div class="position-fixed top-0 start-50 translate-middle-x p-3 w-100">
                    <div class="col-lg-6 col-md-12">
                        <div class="alert alert-success alert-dismissible fade show fs-4" role="alert">
                            <?php
                            foreach ($rights as $right) {
                                echo $right . '<br>';
                            }
                            ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </center>
            <?php
        }
    }
    ?>
    <div class="text-center">
        <!-- Título y descripción -->
        <h1 style="font-size: 100px;" class="fw-bolder text-light">Conoce Más Sobre Este Hermoso País</h1>
        <p class="fs-1 fw-bold text-light mb-5">Tailandia</p>

        <!-- Contenido en formato de tarjeta -->
        <div class="container mt-5">
            <div class="row row-cols-1 row-cols-md-1 g-5">
                <div class="col">
                    <div class="card rounded-5 text-light card2 h-100 w-100">
                        <div class="row g-0">
                            <div class="col">
                                <div class="card-body text-center">
                                    <h1 class="card-title text-center fw-bolder text-light fs-1">Este país es...</h1>
                                    <hr class="text-light">
                                    <p class="card-text tw-semibold fs-5 text-center text-light no">Tailandia es un país del Sudeste Asiático. Es famoso por sus playas tropicales, los opulentos palacios reales, las ruinas antiguas y los templos adornados con figuras de Buda.</p>
                                    <!-- Reproductor de video de YouTube -->
                                    <div class="container">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <div id="player"></div>
                                            <script>
                                                // Carga la API de YouTube
                                                function onYouTubeIframeAPIReady() {
                                                    new YT.Player('player', {
                                                        videoId: '6DmtJTRoOlg',
                                                        width: 890,
                                                        height: 500,
                                                    });
                                                }
                                            </script>
                                            <script src="https://www.youtube.com/iframe_api"></script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts de Bootstrap y AOS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
