<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombres = $_POST["nombres"];
  $apellidos = $_POST["apellidos"];
  $telefono = $_POST["telefono"];
  $prevision = $_POST["prevision"];
  $email = $_POST["email"];
  $tipo_solicitud = $_POST["tipo_solicitud"];
  $mensaje = htmlspecialchars($_POST["mensaje"]);
  
  $destinatario1 = "info@seguelabogados.cl"; // Cambiar por tu dirección de correo electrónico
  $destinatario2 = "$email";

  $asunto = "Consulta de $nombres $apellidos";
  
  $contenido = "Nombres: $nombres\n";
  $contenido .= "Apellidos: $apellidos\n";
  $contenido .= "Telefono: $telefono\n";
  $contenido .= "Prevision: $prevision\n";
  $contenido .= "E-mail: $email\n";
  $contenido .= "Tipo_Solicitud: $tipo_solicitud\n";
  $contenido .= "Mensaje:\n$mensaje\n";
  
  mail($destinatario1, $asunto, $contenido);
  mail($destinatario2, $asunto, $contenido);
  
}
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>SeguelAbogados</title>
	<link rel="shortcut icon" type="image/png" href="assets/img/0-favicon.png">
	<meta name="author" content="Gonzalo Seguel">
	<meta name="viewport" content ="width=device-width, initial-scale=1.0">
	<meta name="description" content="Seguel Abogados">
	<meta name="keywords" content="SOAP">
	<meta http-equiv="Pragma" content="no-cache">
	<!-- Bootstrap 4.4.1 CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="justify-content">
	<nav class="navbar fixed-top navbar-expand-sm navbar-dark bg_azul py-1 nav_texto">
	  <div class="container">
	  	<a class="navbar-brand d-block d-sm-none" href="./index.html#nosotros"><img src="assets/img/01-logo.jpg" alt="logo" class=""></a>	 
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item active"><a class="nav-link" href="./index.html#nosotros">Quienes Somossss</a></li>
		      <li class="nav-item"><a class="nav-link" href="./index.html#nosotros">Misión-Objetivos</a></li>
		      <li class="nav-item"><a class="nav-link" href="./index.html#servicios">Servicios</a></li>
		      <li class="nav-item"><a class="nav-link" href="./index.html#clientes">Clientes</a></li>
		      <li class="nav-item"><a class="nav-link" href="./Contacto.html">Contacto</a></li>
		    </ul>
		  </div>
		   <a class="navbar-brand d-none d-md-block" href="./index.html#nosotros"><img src="assets/img/01-logo.jpg" alt="logo" class=""></a>
	  </div>
	</nav>
  

  <div class="azul d-block d-sm-none">
      <br><br><br><br><br><br><br>
      <h5 class="font-weight-bold text-center">¡Gracias por Comunicarte con Nosotros!</h5>
      <form action="https://seguelabogados.cl" method="get">
        <button type="submit" class="btn btn-primary col-12">Volver</button>
      </form>
  </div>
  <header id="about" class="hero p-0 d-none d-md-block">
    <div class="azul texto_encima">
      <h5 class="font-weight-bold text-center">¡Gracias por Comunicarte con Nosotros!</h5>
    </div>
  </header>
  
  
  
    <!--<form action="https://seguelabogados.cl" method="get">
      <button type="submit" class="btn btn-primary">Volver</button>
    </form>   -->
</body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-
    q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <!--Popper JS 1.14.3-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
    <!--Bootstrap JS 4.1.3-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-
    ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</html>
