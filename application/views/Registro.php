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
    <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s4">
              <input placeholder="Ana María" id="nombres" type="text" class="form-control">
              <label for="nombres">Nombre completo</label>
            </div>
            <div class="input-field col s4">
              <input id="apellidos" type="text" class="form-control">
              <label for="apellidos">Apellidos</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s16">
              <input id="telefono" type="text" class="form-control">
              <label for="telefono">Teléfono</label>
            </div>  
            <div class="input-field col s16">
              <input id="celular" type="text" class="form-control">
              <label for="celular">Celular</label>
            </div>
          </div>
          <div class="row">
           <div class="input-field col s4">
             <input id="direccion" type="text" class="form-control">
              <label for="direccion">Dirección</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field inline">
              <input id="correo" type="email" class="form-control">
              <label for="correo" data-error="wrong" data-success="right">Correo Electrónico</label>
            </div>
          </div>  
          <div class="row">  
            <div class="input-field col s16">
              <input id="clave" type="password" class="form-control">
              <label for="clave">Contraseña</label>
            </div>
          </div>
          <input type="submit" value="Enviar">
        </form>
    </div>
  </div>    
</body>  