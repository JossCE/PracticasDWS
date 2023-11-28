<?php
$registrado = false;
$error =false;

if(isset($_GET['correcto'])) {
    $registrado = $_GET['correcto'];
}elseif (isset($_GET['error'])) {
    $error = $_GET['error'];
}

$errors = array();
$rights = array();

if($registrado == "bienvenido"){
    $rights[]= "Usted se a registrado correctamente.";
}elseif($error == "incorrecto"){
    $errors[]= "A ocurrido un error para registrarse, intente mas tarde...";
}

// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "tailandia");
if (!$conexion) {
    die("Error al conectarse a la base de datos: " . mysqli_connect_error());
}

// Consultamos en la base de datos
$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexion, $sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../usuarios/scss/usuarios.scss">
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
    <h1 class="text-light mx-5 my-2 fw-bolder">MODO ADMINISTRADOR</h1>
    </div>


    <!-- Right element -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-light" href="../login/login.php">
            <button class="btn btn-dark rounded-pill" style="width: 8em"><label class="fs-5 fw-semibold">Salir</label></button>
        </a>
      </li>
    </ul>
  </div>
  <!-- Container wrapper -->
</nav>

  <!-- Contenedor central en la pantalla -->
  <!-- <div class="d-flex align-items-center justify-content-center" style="height: 90vh;"> -->
  <?php
        if(isset($errors)){
            if (count($errors) > 0){
        
        ?>
        <center>
        <div class="position-fixed top-0 start-50 translate-middle-x p-3 w-100">
            <div class="col-lg-6 col-md-12">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php
                    foreach ($errors as $error){
                        echo $error . '<br>';
                    }
                    ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
                </div>
            </div>
        </div>
        </center>
        <?php
            }
        }
        
        if(isset($rights)){
            if(count($rights) > 0){
        ?>
        <center>
            <div class="position-fixed top-0 start-50 translate-middle-x p-3 w-100">
            <div class="col-lg-6 col-md-12">
                <div class="alert alert-success alert-dismissible fade show fs-4" role="alert">
                    <?php
                    foreach ($rights as $right){
                        echo $right . '<br>';
                    }
                    ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
                </div>
            </div>
        </div>
        </center>
        <?php
            }
        }
        ?>

<!-- CARDS DE USUARIOS -->
<table class="mx-auto my-3" border="0" width="700" align="center"> 
  <?php
  $num = 0;
  while ($fila = $resultado->fetch_assoc()) {
    if ($num % 4 == 0) {
      // Inicia una nueva fila
      echo "<tr>";
    }
    ?>
    <th>
      <div class="card mx-4 mt-4 text-light" data-aos="fade-up" data-aos-duration="2000" style="width: 25rem">
        <div class="card-body">
          <center><h4 class="card-title mb-3"><?php echo $fila['nombre']." ".$fila['apellido']; ?></h4></center>
          <hr>        
          <p class="card-text text-light fs-5 fw-bold">
            <?php 
            echo "Email: ".$fila['email']."<br>Telefono: ".$fila['telefono']."<br>Destino: ".$fila['destino']."<br>Fecha: ".$fila['fecha']."<br>Camisa: ".$fila['camisa']."<br>Edad: ".$fila['edad']."<br>Talla: ".$fila['talla']."<br>Comentario: ".$fila['comentarios'];
            ?>
          </p>
        </div>
      </div>
    </th>
    <?php
    $num++;
    if ($num % 4 == 0) {
      // Cierra la fila después de mostrar 5 tarjetas
      echo "</tr>";
    }
  }
  // Cierra la fila si el número total de tarjetas es múltiplo de 5
  if ($num % 4 != 0) {
    echo "</tr>";
  }
  ?>
</table>

    
  <!-- </div> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script></body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</html>