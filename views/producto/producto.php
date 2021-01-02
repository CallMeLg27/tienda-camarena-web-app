<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Producto - Mini Market Camarena</title>
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
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/crudProducto.css">   
    </head>
    <body>
        <?php require_once 'views/header_trabajador.php'; ?>   
        <div class="d-flex" id="wrapper">
            <?php require 'views/sidebar/almacenero.php'; ?> 
            <div id="page-content-wrapper"class="w-100">
                <div class="container" id="contenido">               
                    <?php require 'views/alertModal.php'; ?>
                    <div class=" center d-flex justify-content-center">
                        <h2><strong>Registra tus productos</strong></h2>
                    </div>
                    <form action="<?php echo constant('URL'); ?>crudproducto/crear" method="POST">
                        <div class="col-md-6" style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto">
                            <div class="form-row py-2">
                                <div class="col-md-4">
                                    <p><strong>CÓDIGO:</strong></p>
                                </div>
                                <div class="col-md-8">
                                    <input required name="producto_id" type="text" class="form-control" placeholder="Ingrese su código..." pattern="^PR[0-9]{3}$">
                                </div>
                            </div>
                            <div class="form-row py-2">
                                <div class="col-md-4">
                                    <p><strong>NOMBRE:</strong></p>
                                </div>
                                <div class="col-md-8">
                                    <input required name="nombre" type="text" class="form-control" placeholder="Ingrese su nombre...">
                                </div>
                            </div>
                            <div class="form-row py-2">
                                <div class="col-md-4">
                                    <p><strong>COSTO:</strong></p>
                                </div>
                                <div class="col-md-8">
                                    <input required name="costo" type="number" class="form-control" placeholder="Ingrese el costo..." min="0" />
                                </div>
                            </div>
                            <div class="form-row py-2">
                                <div class="col-md-4">
                                    <p><strong>DESCRIPCIÓN:</strong></p>
                                </div>
                                <div class="col-md-8">
                                    <input required name="descripcion" type="text" class="form-control" placeholder="Descripción...">
                                </div>
                            </div>
                            <div class="form-row py-2">
                                <div class="col-md-4">
                                    <p><strong>CANTIDAD:</strong></p>
                                </div>
                                <div class="col-md-8">
                                    <input required name="cantidad" type="number" class="form-control" placeholder="Ingrese la cantidad..." min="0"/>
                                </div>
                            </div>
                                <div class="d-flex flex-row justify-content-center mt-4">
                                <div class="col-md-4">
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
                                            <th scope="col">Código</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Descripción</th>
                                            <th scope="col">Costo S/.</th>
                                            <th scope="col">Cantidad</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody-productos">
                                        <?php
                                            require_once 'models/producto.php';
                                            foreach ($this->productos as $row) {
                                                $producto = new Producto();
                                                $producto = $row;
                                        ?>
                                        
                                                <tr id="fila-<?php echo $producto->producto_id; ?>">
                                                    <td><?php echo $producto->producto_id; ?></td>
                                                    <td><?php echo $producto->nombre; ?></td>
                                                    <td><?php echo $producto->descripcion; ?></td>
                                                    <td><?php echo $producto->costo; ?></td>
                                                    <td><?php echo $producto->cantidad; ?></td>
                                                    <td>
                                                        <div role="group" class="mb-2 btn-group-md btn-group">
                                                            <button data-producto_id="<?php echo $producto->producto_id; ?>" class="bEditar btn-shadow btn-hover-shine btn btn-success btn-md btn-pill pl-3" title="Editar">
                                                                <i class="iEditar fa fa-pencil" aria-hidden="true"></i>
                                                            </button>
                                                            <button data-producto_id="<?php echo $producto->producto_id; ?>" class="bEliminar btn-shadow btn-hover-shine btn btn-danger btn-md btn-pill pr-3" title="Eliminar">
                                                                <i class="iEliminar fa fa-trash" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                    <!-- <td><a href="<?php echo constant('URL') . 'crudproducto/verProducto/' . $producto->producto_id; ?>">Actualizar</a></td>
                                                    <td><button class="bEliminar" data-matricula="<?php echo $producto->producto_id; ?>">Eliminar</button></td> --> 
                                                </tr>
                                        <!-- </form> -->
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        <?php require_once 'views/footer.php'; ?>
        <!--CDN JQuery,Popper,Bootstrap (JS)-->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <!--Iconos-->
        <script src="https://kit.fontawesome.com/27d40e429f.js" crossorigin="anonymous"></script>
         <!--Scripts Lógica de Negocio--> 
        <script src="<?php echo constant('URL'); ?>/public/js/scriptsProducto.js"></script>
        <!--Script alertModal-->
        <script type="text/javascript" src="<?php echo constant('URL'); ?>/public/js/alertModal.js"></script>
        <!--Ejecutamos el script alertModal-->
        <script>
            if ("<?php echo $this->mensaje ?>" != "")
                alertModal("","<?php echo $this->mensaje ?>")
        </script>
        <?php
        echo $_ENV["test"]
        ?>
    </body>
</html>