<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mini Market Camarena</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!--CDN Bootstrap (CSS)-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">      
        <!-- Los iconos tipo Solid de Fontawesome--> 
        <link rel="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>  
        <!-- Nuestros css-->
        <link rel="icon" href="<?php echo constant('URL'); ?>public/img/logo.png" sizes="32x32">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/main.css ?4.0">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/head-foot.css ?4.0">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/index.css ?10.0"> 
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/home.css ?10.0">   
    </head>
	<body>
    	<?php require_once 'views/header.php'; ?>  
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="padding-bottom: 15px"> 
            <div class="carousel-inner"> 
                <div class="carousel-item active"> 
                    <img class="d-block w-100" src="public/img/promo11.png" alt=""  id="banner1">
                </div> 
                <div class="carousel-item "> 
                    <img class="d-block w-100" src="public/img/promo12.png" alt=""  id="banner2"> 
                </div> 
            </div> 
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" style="width: 2.5%;opacity: 1"> 
                <span class="carousel-control-prev-icon" aria-hidden="true"style="background-color: #0bad65;width: 30px;height: 30px"></span>
                <span class="sr-only">Previous</span> 
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" style="width: 2.5%;opacity: 1"> 
                <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: #0bad65;width: 30px;height: 30px"></span> 
                <span class="sr-only">Next</span> 
            </a> 
        </div>  
        <div class="container center w-100 mt-2">
            <h4> <img src="public/img/perecibles.png" style="margin-top:-4px"> Perecibles </h4>
            <div class="row">
                <div class="col-xl-4">
                     <img src="public/img/p3.png" id="p3">
                </div>
                <div class="col-xl-8">
                     <img src="public/img/p9.png" id="p9">
                </div>
            </div>
            <h4 class="mt-4"> Bebidas y gaseosas </h4>
            <div class="row">
                <div class="col-xl-4">
                     <img src="public/img/p1.png" id="p1">
                </div>
                <div class="col-xl-4">
                     <img src="public/img/p2.png" id="p2">
                </div>
                <div class="col-xl-4">
                     <img src="public/img/p5.png" id="p5">
                </div>
            </div>
            <h4 class="mt-4"> <img src="public/img/cervezas.png" style="margin-top:-4px"> Cervezas y licores </h4>
            <div class="row">
                <div class="col-xl-4">
                     <img src="public/img/p6.png" id="p6">
                </div>
                <div class="col-xl-8">
                     <img src="public/img/p8.png" id="p8">
                </div>
            </div>
            <h4 class="mt-4"><img src="public/img/abarrotes_no_comestibles.png" style="margin-top:-4px"> Abarrotes no comestibles </h4>
            <div class="row">
                <div class="col-xl-4">
                     <img src="public/img/p4.png" id="p4">
                </div>
                <div class="col-xl-8">
                     <img src="public/img/p7.png" id="p7">
                </div>
            </div>
            <br>
        </div>
        <?php require_once 'views/footer.php'; ?>
        <!--CDN JQuery,Popper,Bootstrap (JS)-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <!--Iconos-->
        <script src="https://kit.fontawesome.com/27d40e429f.js" crossorigin="anonymous"></script>
    </body>
</html>