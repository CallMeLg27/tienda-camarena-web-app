<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administración - Mini Market Camarena</title>
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
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/main.css ?3.0">
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/head-foot.css ?3.0">  
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/sidebar.css ?4.0">
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/header-trabajador.css ?4.0">
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/cuenta_usuario.css ?1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/container.css ?4.0">
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/crudUsuario.css ?3.0">
</head>      
<body>
    <?php require_once "views/header_trabajador.php" ?>
    <div class="d-flex" id="wrapper">
        <?php require 'views/sidebar/admin.php'; ?>         
        <div id="page-content-wrapper"class="w-100">
            <div class=container id="contenido">          
                <div class="center d-flex justify-content-center">
                    <h2><strong>Mantener información de los usuarios</strong></h2>
                </div>
                <form>
                    <div class="col-md-12" style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto">
                    <div class="container">
                        <div class="row py-2">
                          <div class="col-md-1"></div>
                          <div class="col-md-5">
                            <div class="form-row py-2">
                                <div class="col-md-4">
                                    <p><strong>NOMBRE:</strong></p>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Ingrese su nombre...">
                                </div>
                            </div>
                           
                            <div class="form-row py-2">
                                <div class="col-md-4">
                                    <p><strong>DNI:</strong></p>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Ingrese su DNI...">
                                </div>
                            </div>
                            <div class="form-row py-2">
                                <div class="col-md-4">
                                    <p><strong>TELEFONO:</strong></p>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Ingrese su telefono...">
                                </div>
                            </div>
                         
                            <div class="form-row py-2">
                                <div class="col-md-4">
                                    <p><strong>E-MAIL:</strong></p>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Ingrese su e-mail...">
                                </div>
                            </div>
                          </div>

                          <div class="col-md-5">
                            <div class="form-row py-2">
                                <div class="col-md-4">
                                    <p><strong>SUELDO:</strong></p>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Ingrese su sueldo...">
                                </div>
                            </div>
                            <div class="form-row py-2">
                                <div class="col-md-4">
                                    <p><strong>DIRECCION:</strong></p>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Ingrese su direccion...">
                                </div>
                            </div>
                            <div class="form-row py-2">
                                <div class="col-md-4">
                                    <p><strong>ID:</strong></p>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Ingrese su id...">
                                </div>
                            </div>
                          
                          <div class="form-row py-2">
                                <div class="col-md-4">
                                    <p><strong>CONTRASEÑA:</strong></p>
                                </div>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña...">
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                            <div class="d-flex flex-row justify-content-center mt-2">
                            <div class="col-md-2">
                                <button type="button" class="btn btn-primary btn-block"><i class="fas fa-plus-circle"></i> AÑADIR</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="container d-flex flex-row-reverse" style="padding-top:20px">
                    <form class="form-inline ml-auto">
                        <div class="md-form my-0">
                            <input class="form-control" type="text" placeholder="Buscar...">
                        </div>
                        <button href="#!" class="ml-2 btnBuscar btn-shadow btn-hover-shine btn btn-dark btn-md btn-pill pr-3" type="submit">
                            <i class="iBuscar fas fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                </div> 
                <div class="center">
                    <div class="container mt-4">
                        <div class="table-wrapper-scroll-y my-custom-scrollbar table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">DNI</th>
                                        <th scope="col">Telefono</th>
                                        <th scope="col">E-mail</th>
                                        <th scope="col">Sueldo</th>
                                        <th scope="col">Direccion</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Contraseña</th>
                                        <th scope="col">Actividad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Maria</td>
                                        <td>70568323</td>
                                        <td>953108837</td>
                                        <td>Maria01@gmail</td>
                                        <td>3000</td>
                                        <td>Calle Los Halcones 111</td>
                                        <td>Maria.villanueva</td>
                                        <td>******</td>
                                        <td>
                                            <div role="group" class="mb-2 btn-group-md btn-group">
                                                <button class="btn-shadow btn-hover-shine btn btn-success btn-md btn-pill pl-3" title="Editar">
                                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                                </button>
                                                <button class="btn-shadow btn-hover-shine btn btn-danger btn-md btn-pill pr-3" title="Eliminar">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>                    
                                    
                                </tbody>

                            </table>
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
    <!--<script src="<?php echo constant('URL'); ?>/public/js/scripts.js"></script>--> 
</body>
</html>