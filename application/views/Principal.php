
<body>

 <nav>
    <div class= "#2196f3 blue nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="<?php echo base_url().'index.php/Welcome/mainView' ?> ">Inicio</a></li>
        <li><a href="<?php echo base_url().'index.php/Welcome/iniciarSesion' ?> ">Iniciar Sesión</a></li>
        <li><a href="<?php echo base_url().'index.php/Welcome/registrarUsuario' ?> ">Registrarse</a></li>
        <li><a href="collapsible.html">Cátalogo</a></li>
      </ul>
    </div>
  </nav>
<?php 
  echo 'Bienvenidos a Zafiro Events Room';

	echo 'Current PHP version: '. phpversion(). ' ';

	echo base_url()."assets/css/materialize.css";?>
</body>


