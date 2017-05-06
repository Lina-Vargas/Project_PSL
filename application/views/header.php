<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title><?php echo $titulo; ?></title>

	<link rel="stylesheet" type="text/css" href="http://localhost/Project_PSL/assets/css/materialize.css" media="screen" />

</head>
<body>
  <script type="text/javascript" src="<?php echo base_url().'/assets/js/materialize.js' ?>"></script>
  <script href="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <div class="container">
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <nav>
      <div class= "#1a237e blue nav-wrapper">
        <a href="#" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="<?php echo base_url().'index.php/Welcome/Inicio' ?> ">Inicio</a></li>
          <li><a href="<?php echo base_url().'index.php/Sesion/iniciarSesion' ?> ">Iniciar Sesión</a></li>
          <li><a href="<?php echo base_url().'index.php/Registro/registrarUsuario' ?> ">Registrarse</a></li>
          <li><a href="collapsible.html">Cátalogo</a></li>
        </ul>
      </div>
    </nav>
 
