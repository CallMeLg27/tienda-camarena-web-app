<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home - Mini Market Camarena</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!--Plantilla admin-->
        <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/AdminLTE.min.css">
        <!--CDN Bootstrap (CSS)-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">     
        <!-- Los iconos tipo Solid de Fontawesome-->   
        <link rel="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>
        <!-- Nuestros css-->
        <link rel="icon" href="<?php echo constant('URL'); ?>public/img/logo.png" sizes="32x32">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/main.css ?5.0">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/head-foot.css ?3.0">  
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/header_cliente.css ?6.0">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/cuenta_usuario.css ?6.0">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/home.css ?6.0">
    </head>
    <body>
        <?php require_once 'views/header_cliente.php'; ?>
        <?php require_once 'views/index/cliente.php'; ?>            
    </body>   
</html>