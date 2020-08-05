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
        
        <!-- Nuestros css-->
        <link rel="stylesheet" href="<?php echo constant('URL'); ?>/public/css/main.css">
        <link rel="stylesheet" href="<?php echo constant('URL'); ?>/public/css/index.css">
        <link rel="stylesheet" href="<?php echo constant('URL'); ?>/public/css//user_admin.css">
    </head>
    <body>
        <?php require_once 'views/header.php'; ?>
 <div class="container d-flex flex-row-reverse" style="padding-top:100px">
    <section class="row">    
        <div class="form-row " > 
            <div class="col-md-8">
                 <input type="text" class="form-control" placeholder="Buscar...">
            </div>
            <div class="col-md-4">
                <button type="button" class="btn btn-primary btn-block">BUSCAR</button>
            </div>
         </div>
    </section>
  </div>               
        <div class="d-flex justify-content-center">
            <p><?php echo $this->mensaje; ?></p>
        </div>
        <div class="d-flex justify-content-center">
            <h2 style="color:##09ea1a"><strong>Registra tus productos</strong></h2>
        </div>
        <form action="<?php echo constant('URL'); ?>crudproducto/crear" method="POST">
            <div class="col-md-6" style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto">
                <div class="form-row py-2">
                    <div class="col-md-4">
                        <p><strong>CÓDIGO:</strong></p>
                    </div>
                    <div class="col-md-8">
                        <input required name="producto_id" type="text" class="form-control" placeholder="Ingrese su código...">
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
                        <input required name="costo" type="number" class="form-control" placeholder="Ingrese el costo...">
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
                        <input required name="cantidad" type="number" class="form-control" placeholder="Ingrese la cantidad...">
                    </div>
                </div>
                    <div class="d-flex flex-row justify-content-center mt-4">
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-plus-circle"></i> AÑADIR</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <center>
        <div class="container mt-4">
            <div class="table-responsive">
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
    </center>
    <?php require_once 'views/footer.php'; ?>
</body>

</html>