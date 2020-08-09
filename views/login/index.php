<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tienda Camarena</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <!--CDN Bootstrap (CSS)-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
        
        <!-- Los iconos tipo Solid de Fontawesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
        <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

        <!-- Nuestros css-->
        <!-- <link rel="stylesheet" type="text/css" href="public/css/index.css" th:href="@{/css/index.css}"> -->
        <!-- <link rel="stylesheet" type="text/css" href="public/css/user_admin.css" th:href="@{/css/user_admin.css}"> -->
        <!-- <link rel="stylesheet" type="text/css" href="public/css/main.css" th:href="@{/css/main.css}"> -->
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/index.css">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/user_admin.css">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/main.css">

    </head>
<body>
    <?php require 'views/header.php'; ?>
    <?php echo $this->mensaje ?>
    <div class="contespace">
        <div class="d-flex justify-content-center">
            <h2 style="color:##09ea1a"><strong>Iniciar sesión</strong></h2>
        </div>
    </div>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="<?php echo constant('URL'); ?>public/img/user.png"/>
                </div>
                <form class="col-12" action="<?php echo constant('URL'); ?>login/autenticar" method="POST">
                <!-- <form class="col-12" th:action="@{/login/autenticar/nada}" method="POST"> -->
                    <div class="form-group" id="user-group">
                        <input required type="text" class="form-control" placeholder="Usuario" name="username"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input required type="password" class="form-control" placeholder="Contrasena" name="password"/>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                </form>
                <div class="col-12 forgot">
                    <a href="#">¿Recordar contraseña? </a> 
                </div>
                </br>
                <!--<div th:if="${param.error}" class="alert alert-danger" role="alert">
		            Invalid username and password.
		        </div>
		        <div th:if="${param.logout}" class="alert alert-success" role="alert">
		            You have been logged out.
		        </div>-->
            </div>
        </div>
	</div>
	<?php require 'views/footer.php'; ?>
	<!--CDN JQuery,Popper,Bootstrap (JS)-->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<!-- <script src="https://kit.fontawesome.com/27d40e429f.js" crossorigin="anonymous"></script> -->
	<script src="<?php echo constant('URL'); ?>/public/js/main.js"></script>
</body>
</html>