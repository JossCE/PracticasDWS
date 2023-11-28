<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../registro/scss/registro.scss">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Registro</title>
</head>
<body data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="300"
     data-aos-offset="0">

<nav class="navbar navbar-expand-lg navbar-dark text-dark">
  <!-- Container wrapper -->
  <div class="container-fluid d-flex justify-content-between">
    <!-- Left links -->
    <ul class="navbar-nav">
      <li class="nav-item text-start">
        <a class="nav-link active text-light fs-2 ms-1" aria-current="page" href="../home/inicio.php">Tailandia</a>
      </li>
    </ul>

    <!-- Centered link -->
    <div class="card rounded-pill text-center mt-2 card1">
    <div class="card-body" style="background-color: transparent;">
      <a class="navbar-brand text-light fs-4 me-5 ms-5" href="../comida/comida.html">Comida</a>
      <a class="navbar-brand text-light fs-4 me-5 ms-5" href="../historia/historia.html">Historia</a>
      <a class="navbar-brand text-light fs-4 me-5 ms-5" href="../clima/clima.html">Clima</a>
      <a class="navbar-brand text-light fs-4 me-5 ms-5" href="../destinos/destinos.html">Destinos</a>
      <a class="navbar-brand text-light fs-4 me-5 ms-5" href="../contacto/contacto.html">Contacto</a>
    </div>
    </div>


    <!-- Right element -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-light disabled" href="../registro/registro.php" disabled>
            <button class="btn btn-success rounded-pill" style="width: 10em"><label class="fs-5 fw-semibold">Registrando...</label></button>
        </a>
      </li>
    </ul>
  </div>
  <!-- Container wrapper -->
</nav>

  <!-- Contenedor central en la pantalla -->
  <div class="d-flex align-items-center justify-content-center" style="height: 90vh;">
  <form action="registrar.php" method="POST">
      <div class="row row-cols-1 row-cols-md-1 g-5">
        <div class="col">
          <div class="card rounded-5 text-light card2">
            <div class="row g-0">
              <div class="col-md-7">
                <img src="../registro/img/foto.png" class="img-fluid h-100 w-100" alt="...">
              </div>
              <div class="col-md-5 my-auto">
                <div class="card-body">
                  <h5 class="card-title text-center fw-bolder text-light fs-1">Registro</h5>
                  <hr class="text-light">

                  <!-- Primer conjunto de inputs en la primera línea -->
                  <div class="row g-3">
                    <div class="col">
                    <label class="text-right fs-5">Nombre</label>
                      <input type="text" class="form-control uppercase-input" placeholder="Nombre" aria-label="Nombre" aria-describedby="addon-wrapping" name="nombre" required>
                    </div>
                    <div class="col">
                    <label class="text-right fs-5">Apellido</label>
                      <input type="text" class="form-control uppercase-input" placeholder="Apellido" aria-label="Apellido" aria-describedby="addon-wrapping" name="apellido" required>
                    </div>
                  </div>

                  <!-- Segundo conjunto de inputs en la segunda línea -->
                  <div class="row g-3 mt-3">
                    <div class="col">
                    <label class="text-right fs-5">Email</label>
                      <input type="email" class="form-control uppercase-input" placeholder="Email" aria-label="Email" aria-describedby="addon-wrapping" name="email" required>
                    </div>
                    <div class="col">
                    <label class="text-right fs-5">Telefono</label>
                      <input type="phone" class="form-control" placeholder="Telefono" aria-label="Telefono" aria-describedby="addon-wrapping" name="telefono" required>
                    </div>
                  </div>

                  <!-- Tercer conjunto de inputs en la tercera línea -->
                  <div class="row g-3 mt-3">
                    <div class="col">
                    <label class="text-right fs-5">Destino</label>
                    <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelectDestino" name="destino" required>
                        <option value="" disabled selected>Opciones...</option>
                        <option value="Bangkok">Bangkok</option>
                        <option value="Chiang Mai">Chiang Mai</option>
                        <option value="Phuket">Phuket</option>
                        <option value="Ayutthaya">Ayutthaya</option>
                        <option value="Sukhothai">Sukhothai</option>
                        <option value="Krabi">Krabi</option>
                        <option value="Koh Phi Phi">Koh Phi Phi</option>
                        <option value="Hua Hin">Hua Hin</option>
                        <option value="Pai">Pai</option>
                        <option value="Chiang Rai">Chiang Rai</option>
                        <option value="Kanchanaburi">Kanchanaburi</option>
                    </select>
                    </div>
                    </div>
                    <div class="col">
                    <label class="text-right fs-5">Fecha</label>
                      <input type="date" class="form-control" placeholder="Fecha" aria-label="Fecha" aria-describedby="addon-wrapping" min="<?php echo date('Y-m-d'); ?>" name="fecha" required>
                    </div>
                  </div>

                  <!-- Cuarto conjunto de inputs en la cuarta línea -->
                  <div class="row g-3 mt-3">
                    <div class="col">
                    <label class="text-right fs-5">Camisa</label>
                    <div class="input-group mb-3">
                      <select class="form-select" id="inputGroupSelectCamisa" onchange="toggleTallaInput()" name="camisa" required>
                        <option value="" disabled selected>Opciones...</option>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                      </select>
                    </div>
                    </div>
                    <div class="col">
                    <label class="text-right fs-5">Edad</label>
                      <input type="number" class="form-control" id="edad" placeholder="Edad" aria-label="Edad" aria-describedby="addon-wrapping" name="edad" pattern="\d*" min="18" max="60" required>
                    </div>
                  </div>

                  <!-- DESPLEGAR: Input de talla -->
                  <div class="row g-3 mt-1" id="tallaInputs" style="display: none;">
                    <div class="col">
                    <label class="text-right fs-5">Talla</label>
                    <div class="input-group mb-3">
                      <select class="form-select" id="inputGroupSelectTalla" name="talla" required>
                        <option value="NINGUNA" disabled selected>Opciones...</option>
                        <option value="XS">XS</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                      </select>
                      <div class="invalid-feedback">
                        Por favor, selecciona una opción.
                      </div>
                    </div>
                    </div>
                  </div>

                  <!-- Input de comentarios -->
                  <div class="row g-3 mt-1">
                    <div class="col">
                    <div class="form-floating text-body-secondary">
                    <textarea class="form-control" placeholder="Comentarios" id="floatingTextarea" name="comentarios"></textarea>
                    <label for="floatingTextarea">Comentarios</label>
                    </div>
                    </div>
                  </div>

                  <!-- Botón de registro -->
                  <div class="row g-3 mt-1">
                    <div class="col text-center">
                    <button type="submit" class="btn btn-light rounded-pill fw-bolder fs-5 mt-2">Registarse</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form> 
</div>

  </div>
  <script>
  // Selecciona todos los inputs con la clase 'uppercase-input'
  var uppercaseInputs = document.querySelectorAll('.uppercase-input');

  // Agrega el evento 'input' a cada input seleccionado
  uppercaseInputs.forEach(function (input) {
    input.addEventListener('input', function (e) {
      // Obtener el valor actual del campo de entrada
      let inputValue = e.target.value;

      // Convertir el valor a mayúsculas
      let upperCaseValue = inputValue.toUpperCase();

      // Asignar el valor en mayúsculas al campo de entrada
      e.target.value = upperCaseValue;
    });
  });
</script>

<script>
     function toggleTallaInput() {
    var camisaSelect = document.getElementById('inputGroupSelectCamisa');
    var tallaInputs = document.getElementById('tallaInputs');

    // Si la opción seleccionada es 'SI', muestra los inputs de talla
    if (camisaSelect.value === 'SI') {
      tallaInputs.style.display = 'flex';  // Puedes usar 'block' en lugar de 'flex' si prefieres
    } else {
      tallaInputs.style.display = 'none';
    }
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init();
</script>
</body>
</html>

