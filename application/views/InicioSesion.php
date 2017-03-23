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
<div class="row">
 <form class="col s12">
 	<div class="row">
        Nombre de usuario: <div class="input-field inline">
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
      
 </form>
</div>