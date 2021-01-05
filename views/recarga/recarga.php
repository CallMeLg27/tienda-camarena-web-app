<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!--Plantilla admin-->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/AdminLTE.min.css"> 
    <!--CDN Bootstrap (CSS)-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
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
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/recarga.css">
  </head>
  <body>
    <?php require_once "views/header_trabajador.php" ?>
    <div class="d-flex" id="wrapper">
      <?php require_once "views/sidebar/atcliente.php" ?>        
      <div id="page-content-wrapper"class="w-100">
        <div class=container id="contenido">
          <div class="center d-flex justify-content-center">
          </div>
          <div class="modal-dialog text-center">
            <div class="col-sm-12">
              <div class="modal-content">
                <form>
                  <div class="container">
                    <div class="col-md-12" style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto">
                      <br>
                      <h3 style="color:##09ea1a"><i class="fas fa-address-card pr-2"></i><strong>RECARGA</strong></h3>
                      <div class="text-left">
                        <div class="form-row py-1">
                          <div class="col-md-6">
                            <p><strong>NRO CUENTA:</strong></p>
                          </div>
                          <div class="col-md-4">
                            <p>************1</p>
                          </div>
                        </div>
                        <div class="form-row py-1">
                          <div class="col-md-6">
                            <p><strong>SALDO ACTUAL:</strong></p>
                          </div>
                          <div class="col-md-4">
                            <p>S/. 10.00</p>
                          </div>
                        </div>
                        <div class="form-row py-2">
                          <div class="col-md-6">
                            <p><strong>MONTO DE RECARGA:</strong></p>
                          </div>
                          <div class="col-md-5">
                            <input type="text" class="form-control" placeholder="Ingrese monto ...">
                          </div>
                        </div>
                        <div class="form-row py-2">
                          <div class="col-md-6">
                            <p><strong>TOTAL</strong></p>
                          </div>
                          <div class="col-md-4">
                            <p>S/. 20.00</p>
                          </div>
                        </div>
                        <div class="d-flex flex-row justify-content-center mt-4">
                          <div class="col-md-3">
                            <button type="button" class="btn btn-default btn-circle" style="color: green"><i class="far fa-check-circle fa-3x"></i></button>
                            <p><strong>ACEPTAR</strong></p>
                          </div>
                        </div><br>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
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