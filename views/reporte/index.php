<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reportes - Mini Market Camarena</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!--Plantilla admin-->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/AdminLTE.min.css">
    <!--CDN Bootstrap (CSS)-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">  
    <!-- Los iconos tipo Solid de Fontawesome--> 
    <link rel="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>    
    <!-- Nuestros css-->
    <link rel="icon" href="<?php echo constant('URL'); ?>public/img/logo.png" sizes="32x32">
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/head-foot.css">  
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/sidebar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/header-trabajador.css">
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/cuenta_usuario.css">
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/container.css">
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/reporte.css">
</head>
<body>
    <?php require_once "views/header_trabajador.php" ?>
    <div class="d-flex" id="wrapper">
      <?php require 'views/sidebar/admin.php'; ?>       
      <div id="page-content-wrapper"class="w-100">
        <!--codigo faltante-->
      </div>         
    </div>
    <?php require_once "views/footer.php" ?>
     <!--CDN JQuery,Popper,Bootstrap (JS)-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!--Iconos-->
    <script src="https://kit.fontawesome.com/27d40e429f.js" crossorigin="anonymous"></script>
</body>
</html>