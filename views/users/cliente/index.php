<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Menu Principal - Tienda Camarena</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <!--CDN Bootstrap (CSS)-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

        <!-- Nuestros css-->
        <link rel="stylesheet" type="text/css" href="public/css/index.css" th:href="@{/css/index.css}">
        <link rel="stylesheet" type="text/css" href="public/css/user_admin.css" th:href="@{/css/user_admin.css}">
        <link rel="stylesheet" type="text/css" href="public/css/main.css" th:href="@{/css/main.css}">
    </head>
    <body>  
        <?php require 'views/header.php'; ?>
        <div class="col-sm-8 main-section2">
            <div class="modal-content2">
                <div class="welcome text-center">
                    </br>
                    <h1 style="color:##09ea1a"><strong> Bienvenido </strong><i class="fa fa-home"></i></h1>
                    <h1 style="color:#252546"><strong>Cliente María Villanueva</strong></h1></br>  
                    <h3 style="color:##09ea1a"><strong>Estamos a tu servicio</strong></h3>
                </div>
                </br>     
                <div class="asd-spin-nested-loading text-center">
                    <div class="asd-spin-container">
                        <div class="container-fluid no-gutters paddingless-xl">
                            <div class="row"><div class="resultunit col-md-12 margin-bottom-15">
                                <article class="minimumunit">
                                    <a href="">
                                        <div class="minimumunitBody">
                                            <div class="minimumunitContainer">
                                                <img class="minimumunitLogo" src="public/img/carro.png" th:src="@{public/img/carro.png}" height="180" width="180" />
                                            </div>
                                            <h4 class="minimumunitTitle">Agrega productos a tu carro</h4> </br>
                                        </div>
                                    </a>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once 'views/footer.php'; ?>
    </body>
</html>