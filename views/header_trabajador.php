<nav class="navbar navbar-expand-md navbar-dark static-top w-100">
    <a class="navbar-brand">
        <h1 id="header">
            <i class="fas fa-shopping-cart"></i>
            CAMARENA
        </h1>
    </a>             
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li>
          <a class="center" id="menu-toggle">
              <i  class="fa fa-bars m-0 p-0" id="iconMenu"></i>
              <h1 class="m-0 p-0" id="textMenu">menú</h1>
          </a>       
        </li>
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu open ml-auto">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            <img src="<?php echo constant('URL'); ?>public/img/users.png" class="user-image" alt="User Image">   
            <span style="font-size:1rem" class="hidden-xs" id="nameuser"><?php echo $this->nombreUsuario ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="public/img/users.png" class="user-image" alt="User Image"> 
              <p id="admin">
                <i class="fa fa-home"></i> Bienvenido<br>
                Administrador - <?php echo $this->nombreUsuario ?>
              </p>
              <p id="empleado">
                <i class="fa fa-home"></i> Bienvenido<br>
                Emleado de At. al cliente - <!--<?php echo $this->nombreUsuario ?>-->
              </p>
              <p id="almacenero">
                <i class="fa fa-home"></i> Bienvenido<br>
                Almacenero - <!--<?php echo $this->nombreUsuario ?>-->
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-right">
                <a href="http://localhost:8080/miproyecto/index" class="btn btn-danger btn-flat">Cerrar sesión</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
</nav>
