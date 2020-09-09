<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mini Market Camarena</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!--Plantilla admin-->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/AdminLTE.min.css"> 
    <!--CDN Bootstrap (CSS)-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/clientes.css ?3.0">
</head>
<body>
    <?php require_once "views/header_trabajador.php" ?>
    <div class="d-flex" id="wrapper">
        <?php require 'views/sidebar/atcliente.php'; ?>        
        <div id="page-content-wrapper"class="w-100">
            <div class=container id="contenido">
            <div class="d-flex justify-content-center">
                <p><?php echo $this->mensaje; ?></p>
            </div> 
            <div class="d-flex justify-content-center">
                <h2><strong>Registrar datos</strong></h2>
            </div>
            <form action="<?php echo constant('URL'); ?>crudcliente/crear" method="POST">
                <div class="col-md-12" style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto">
                <div class="container">
                    <div class="row py-2">
                      <div class="col-md-4">
                        <div class="form-row py-2">
                            <div class="col-md-4">
                                <p><strong>NRO CUENTA:</strong></p>
                            </div>
                            <div class="col-md-8">
                                <input required type="text" name="cliente_id" class="form-control" placeholder="Ingrese Nro de cuenta...">
                            </div>
                        </div>                   
                        <div class="form-row py-2">
                            <div class="col-md-4">
                                <p><strong>NOMBRE:</strong></p>
                            </div>
                            <div class="col-md-8">
                                <input required type="text" name="nombre" class="form-control" placeholder="Ingrese nombre...">
                            </div>
                        </div>
                        <div class="form-row py-2">
                            <div class="col-md-4">
                                <p><strong>APELLIDO:</strong></p>
                            </div>
                            <div class="col-md-8">
                                <input required type="text"name="apellido" class="form-control" placeholder="Ingrese apellido...">
                            </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-row py-2">
                            <div class="col-md-4">
                                <p><strong>DNI:</strong></p>
                            </div>
                            <div class="col-md-8">
                                <input required type="number" name="dni" class="form-control" placeholder="Ingrese su DNI...">
                            </div>
                        </div>
                        <div class="form-row py-2">
                            <div class="col-md-4">
                                <p><strong>EDAD:</strong></p>
                            </div>
                            <div class="col-md-8">
                                <input required type="number" name="edad" class="form-control" placeholder="Ingrese su edad...">
                            </div>
                        </div>
                        <div class="form-row py-2">
                            <div class="col-md-4">
                                <p><strong>DISTRITO:</strong></p>
                            </div>
                            <div class="col-md-8">
                                <input required type="text" name="distrito" class="form-control" placeholder="Ingrese distrito...">
                            </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-row py-2">
                            <div class="col-md-4">
                                <p><strong>DIRECCION:</strong></p>
                            </div>
                            <div class="col-md-8">
                                <input required type="text" name="direccion" class="form-control" placeholder="Ingrese dirección...">
                            </div>
                        </div>
                        <div class="form-row py-2">
                            <div class="col-md-4">
                                <p><strong>TELEFONO:</strong></p>
                            </div>
                            <div class="col-md-8">
                                <input required type="number" name="telefono" class="form-control" placeholder="Ingrese telefono...">
                            </div>
                        </div>
                        <div class="form-row py-2">
                            <div class="col-md-4">
                                <p><strong>E-MAIL:</strong></p>
                            </div>
                            <div class="col-md-8">
                                <input required type="text" name="email" class="form-control" placeholder="Ingrese e-mail...">
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
                        <div class="d-flex flex-row justify-content-center mt-2">
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-plus-circle"></i> AÑADIR</button>
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
                                    <th scope="col">Nro Cuenta</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">DNI</th>
                                    <th scope="col">Edad</th>
                                    <th scope="col">Distrito</th>
                                    <th scope="col">Direccion</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Actividad</th>
                                </tr>
                            </thead>
                            <tbody id="tbody-clientes">
                                <?php
                                    require_once 'models/cliente.php';
                                    foreach ($this->clientes as $row) {
                                        $cliente = new Cliente();
                                        $cliente = $row;
                                ?>
                                
                                        <tr id="fila-<?php echo $cliente->cliente_id; ?>">
                                            <td><?php echo $cliente->cliente_id; ?></td>
                                            <td><?php echo $cliente->nombre; ?></td>
                                            <td><?php echo $cliente->apellido; ?></td>
                                            <td><?php echo $cliente->dni; ?></td>
                                            <td><?php echo $cliente->edad; ?></td>
                                            <td><?php echo $cliente->distrito; ?></td>
                                            <td><?php echo $cliente->direccion; ?></td>
                                            <td><?php echo $cliente->telefono; ?></td>
                                            <td><?php echo $cliente->email; ?></td>
                                            <?php if($cliente->estado=='activo'){ ?>
                                                <td><i class="far fa-check-square fa-2x pl-3"></i></td>
                                            <?php }else{ ?>
                                                <td><i class="far fa-times-circle fa-2x pl-3"></i></td>
                                            <?php } ?>
                                            <td>
                                                <div role="group" class="mb-2 btn-group-md btn-group">
                                                    <button data-cliente_id="<?php echo $cliente->cliente_id; ?>" class="bEditar btn-shadow btn-hover-shine btn btn-success btn-md btn-pill pl-3" title="Editar">
                                                        <i class="iEditar fa fa-pencil" aria-hidden="true"></i>
                                                    </button>
                                                    <button data-cliente_id="<?php echo $cliente->cliente_id; ?>" class="bEliminar btn-shadow btn-hover-shine btn btn-danger btn-md btn-pill pr-3" title="Eliminar">
                                                        <i class="iEliminar fa fa-trash" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <!-- <td><a href="<?php echo constant('URL') . 'crudcliente/verCliente/' . $cliente->cliente_id; ?>">Actualizar</a></td>
                                            <td><button class="bEliminar" data-matricula="<?php echo $cliente->cliente_id; ?>">Eliminar</button></td> --> 
                                        </tr>
                                <!-- </form> -->
                                <?php } ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div> 
            <br>
            </div>
        </div>        
    </div>
    <?php require 'views/footer.php'; ?> 
     <!--CDN JQuery,Popper,Bootstrap (JS)-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!--Iconos-->
    <script src="https://kit.fontawesome.com/27d40e429f.js" crossorigin="anonymous"></script>
    <!--Script lógica de negocio-->
    <script src="<?php echo constant('URL'); ?>/public/js/scriptsCliente.js"></script> 
</body>
</html>