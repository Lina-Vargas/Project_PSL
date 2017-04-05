<body>
  <script type="text/javascript" src="http://localhost/Project_PSL/assets/js/materialize.min.js"></script>
  <script href="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <div class="container">
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <nav>
      <div class= "#2196f3 blue nav-wrapper">
        <a href="#" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="<?php echo base_url().'index.php/Welcome/Inicio' ?> ">Inicio</a></li>
          <li><a href="<?php echo base_url().'index.php/Welcome/iniciarSesion' ?> ">Iniciar Sesión</a></li>
          <li><a href="<?php echo base_url().'index.php/Welcome/registrarUsuario' ?> ">Registrarse</a></li>
          <li><a href="collapsible.html">Cátalogo</a></li>
        </ul>
      </div>
    </nav>
    <?php 
    echo 'Bienvenidos a Zafiro Events Room'; ?>
  </div>
</body>


