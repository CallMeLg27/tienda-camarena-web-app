<nav class="navbar navbar-expand-md navbar-dark static-top w-100">
    <a class="navbar-brand">
        <h1 id="header">
            <i class="fas fa-shopping-cart"></i>
            CAMARENA
        </h1>
    </a>		     
	<div class="navbar-custom-menu ml-auto">
        <ul class="nav navbar-nav">
        <li>
      		<a href="<?php echo constant('URL'); ?>" class="btn" id="home">
            	<i  class="fa fa-home" id="iconHome"></i>
        	</a>
        </li>
        <li class="ml-3">
      			<a href="<?php echo constant('URL'); ?>crearpedido/crear" class="btn" id="shopping">
      				<i  class="fa fa-shopping-cart" id="iconShopping"></i>
            	</a>    	
        </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu open ml-3">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
              <img src="<?php echo constant('URL'); ?>public/img/users.png" class="user-image" alt="User Image">   
              <span style="font-size:1rem" class="hidden-xs" id="nameuser"><?php echo $this->nombreUsuario ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                	<img src="<?php echo constant('URL'); ?>public/img/users.png" class="user-image" alt="User Image"> 
                <p id="cliente">
                  Bienvenido<br>
                  Cliente <br> <?php echo $this->nombreUsuario ?>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo constant('URL'); ?>logout" class="btn btn-danger btn-flat">Cerrar sesión</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>

</nav>


