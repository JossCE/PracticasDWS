<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../login/scss/login.scss">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlaces a las bibliotecas y estilos necesarios -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">     
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Login</title>
</head>
<body data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="300"
     data-aos-offset="0">

  <!-- Contenedor central en la pantalla -->
  <div class="d-flex align-items-center justify-content-center w-100" style="height: 100vh;">
      <div class="container">
        <div class="row row-cols-1 row-cols-md-1 g-5">
          <div class="col">
            <!-- Tarjeta con diseño redondeado y texto claro -->
            <div class="card rounded-5 text-light card2">
              <div class="row g-0">
                <!-- Columna para la imagen -->
                <div class="col-md-6">
                  <!-- Imagen del login con tamaño fluido -->
                  <img src="../login/img/login.png" class="img-fluid w-75" alt="...">
                </div>
                <!-- Columna para el contenido de la tarjeta -->
                <div class="col-md-5 my-auto">
                  <!-- Cuerpo de la tarjeta -->
                  <div class="card-body">
                    <!-- Título de la tarjeta -->
                    <h5 class="card-title text-center fw-bolder text-light fs-1">Login</h5>
                    <!-- Línea horizontal como separador -->
                    <hr class="text-light mb-5">
                    <!-- Formulario de login -->
                    <form action="loginphp.php" method="POST">
                      <!-- Entrada de texto para el usuario -->
                      <div class="form-floating mb-5 text-dark fw-bolder">
                        <input type="text" class="form-control fs-5" name="usuario" id="floatingInput" placeholder="name@example.com" style="height: 7vh">
                        <label for="floatingInput" class="fs-5">Usuario</label>
                      </div>

                      <!-- Entrada de texto para la contraseña -->
                      <div class="input-group mb-3 text-dark fw-bolder">
                        <div class="form-floating">
                          <input type="password" class="form-control fs-5" id="floatingInputGroup1" name="contra" placeholder="Username" style="height: 7vh">
                          <label for="floatingInputGroup1" class="fs-5">Contraseña</label>
                        </div>
                        <!-- Icono para mostrar la contraseña -->
                        <span class="input-group-text text-body-secondary"><i class="bi bi-eye fs-2"></i></span>
                      </div>

                      <!-- Botón para iniciar sesión -->
                      <center><button type="submit" class="btn btn-light text-center fw-bolder fs-4 rounded-pill mt-3 mb-3 w-50">Iniciar Sesión</button></center>

                    </form>

                    <!-- Separador horizontal -->
                    <hr class="text-light mb-1 mt-3">

                    <!-- Botón para regresar a la página de inicio -->
                    <a href="../home/inicio.php">
                      <center><button type="submit" class="btn btn-dark text-center fw-bolder mt-4 fs-4 rounded-pill"><i class="bi bi-house"></i></button></center>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

  <!-- Scripts necesarios -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
