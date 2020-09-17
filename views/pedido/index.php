<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mini Market Camarena</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
          <!--Plantilla admin-->
		<link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/AdminLTE.min.css"> 
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">         
        <!-- Los iconos tipo Solid de Fontawesome-->   
        <link rel="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>
	    <!-- Nuestros css-->
        <link rel="icon" href="<?php echo constant('URL'); ?>public/img/logo.png" sizes="32x32">
	    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/main.css">
	    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/head-foot.css">  
	    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/header_cliente.css">
	    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/cuenta_usuario.css">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/container.css">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/pedido.css">       
        
    </head>
    <body>
        <?php require_once 'views/header_cliente.php'; ?>
        <div class="container" id="contenido"> 
        
            <div class="d-flex justify-content-center">
                <h2><strong>Registra tu pedido</strong></h2>
            </div>
            <?php echo $this->mensaje ?>
<!--             <p>Producto:</p>
            <?php var_dump($this->producto); ?>
            <p>nombreUsuario:</p>
            <?php var_dump($this->nombreUsuario); ?>
            <p>tarjeta:</p>
            <?php var_dump($this->tarjeta); ?>
            <p>venta:</p>
            <?php var_dump($this->nro_venta); ?>
            <p>arr_ProductosDelPedido:</p>
            <?php var_dump($this->arr_ProductosDelPedido); ?> -->
            <form>
            <div class="container">
                <div class="col-md-12" style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto">
                    <div class="d-flex">
                        <h3 style="color:##09ea1a"><i class="fas fa-user-circle pr-2"></i><strong><?php echo $this->nombreUsuario; ?></strong></h3>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-row ">
                                <div class="col-md-4">
                                    <p><strong>NRO CUENTA:</strong></p>
                                </div>
                                <div class="col-md-8">
                                    <p><?php echo $this->tarjeta->tarjeta_id; ?></p>
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="col-md-4">
                                    <p><strong>SALDO DISPONIBLE:</strong></p>
                                </div>
                                <div class="col-md-8">
                                    <p><?php echo $this->tarjeta->saldo; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-row ">
                                <div class="col-md-4">
                                    <p><strong>NRO VENTA:</strong></p>
                                </div>
                                <div class="col-md-8">
                                    <p><?php echo $this->nro_venta; ?></p>
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="col-md-4">
                                    <p><strong>FECHA</strong></p>
                                </div>
                                <div class="col-md-8">
                                    <p><?php 
                                    $fecha_imprimible = $this->fecha['mday'].'-'.$this->fecha['mon'].'-'.$this->fecha['year'];
                                    echo $fecha_imprimible;
                                    ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><hr>
            </div>
            </form>
            
            <form  action="<?php echo constant('URL'); ?>crearpedido/insertarProducto" method="POST">
                <div class="col-md-6" style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto">
                    <div class="form-row py-2">
                        <div class="col-md-4">
                            <p><strong>CÓDIGO:</strong></p>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="producto_id" class="form-control" placeholder="Ingrese su código...">
                        </div>
                    </div>
                    <div class="form-row py-2">
                        <div class="col-md-4">
                            <p><strong>CANTIDAD:</strong></p>
                        </div>
                        <div class="col-md-8">
                            <input type="number" name="cantidad" class="form-control" placeholder="Ingrese cantidad...">
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-center mt-4">
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-plus-circle"></i> AÑADIR</button>
                        </div>
                    </div>
                </div>
            </form>
            <center>
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
                                            foreach ($this->arr_ProductosDelPedido as $row) {
                                                $producto = $row;
                                        ?>
                                        
                                                <tr id="fila-<?php echo $producto->codigo; ?>">
                                                    <td><?php echo $producto->codigo; ?></td>
                                                    <td><?php echo $producto->nombre; ?></td>
                                                    <td><?php echo $producto->descripcion; ?></td>
                                                    <td><?php echo $producto->costo; ?></td>
                                                    <td><?php echo $producto->cantidad; ?></td>
                                                    <td>
                                                        <div role="group" class="mb-2 btn-group-md btn-group">
                                                            <button data-producto_id="<?php echo $producto->codigo; ?>" class="bEditar btn-shadow btn-hover-shine btn btn-success btn-md btn-pill pl-3" title="Editar">
                                                                <i class="iEditar fa fa-pencil" aria-hidden="true"></i>
                                                            </button>
                                                            <button data-producto_id="<?php echo $producto->codigo; ?>" class="bEliminar btn-shadow btn-hover-shine btn btn-danger btn-md btn-pill pr-3" title="Eliminar">
                                                                <i class="iEliminar fa fa-trash" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                    </div>
                </div>
            </center>   
            <div class="container d-flex flex-row-reverse">
                <div class="col-md-4">
                    <div class="form-row ">
                        <div class="col-md-4">
                                <p><strong>TOTAL A PAGAR:</strong></p>
                            </div>
                            <div class="col-md-1">
                                <p><strong>
                                    <?php 
                                    $total_a_pagar = 0;
                                    foreach ($this->arr_ProductosDelPedido as $item) {
                                        $total_a_pagar += $item->cantidad * $item->costo;
                                    }
                                    echo $total_a_pagar;
                                    ?>
                                </strong></p>
                            </div>
                    </div>
                    <div class="form-row ">
                        <div class="col-md-4">
                            <p><strong>SALDO:</strong></p>
                        </div>
                        <div class="col-md-2">
                                <p><strong>
                                    <?php 
                                    echo $this->tarjeta->saldo - $total_a_pagar;
                                    ?>
                                </strong></p>
                            </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-center mt-2">
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus-circle"></i> PAGAR</button>
                 </div>
            </div>
            <br>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-user-circle pr-2"></i><strong><?php echo $this->nombreUsuario; ?></strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="form-row ">
                                                <div class="col-md-6">
                                                    <p><strong>NRO CUENTA:</strong></p>
                                                </div>
                                                <div class="col-md-4">
                                                    <p><?php echo $this->tarjeta->tarjeta_id; ?></p>
                                                </div>
                                            </div>
                                            <div class="form-row ">
                                                <div class="col-md-6">
                                                    <p><strong>SALDO DISPONIBLE:</strong></p>
                                                </div>
                                                <div class="col-md-4">
                                                    <p><?php echo $this->tarjeta->saldo; ?></p>
                                                </div>
                                            </div>
                                        
                                        <hr>
                                            <div class="form-row ">
                                                <div class="col-md-6">
                                                    <p><strong>NRO VENTA:</strong></p>
                                                </div>
                                                <div class="col-md-4">
                                                    <p><?php echo $this->nro_venta; ?></p>
                                                </div>
                                            </div>
                                            <div class="form-row ">
                                                <div class="col-md-6">
                                                    <p><strong>FECHA</strong></p>
                                                </div>
                                                <div class="col-md-4">
                                                    <p><?php echo $fecha_imprimible ?></p>
                                                </div>
                                            </div>
                                        <hr>
                                            <div class="form-row ">
                                                <div class="col-md-6">
                                                    <p><strong>TOTAL A PAGAR:</strong></p>
                                                </div>
                                                <div class="col-md-4">
                                                    <p><?php echo $total_a_pagar; ?></p>
                                                </div>
                                            </div>
                                            <div class="form-row ">
                                                <div class="col-md-6">
                                                    <p><strong>SALDO</strong></p>
                                                </div>
                                                <div class="col-md-4">
                                                    <p><?php echo $this->tarjeta->saldo - $total_a_pagar;?></p>
                                                </div>
                                            </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                    <button id="bPagar" type="button" class="btn btn-primary">ACEPTAR</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <?php require_once "views/footer.php" ?>
        <!--CDN JQuery,Popper,Bootstrap (JS)-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <!--Iconos--> 
        <script src="https://kit.fontawesome.com/27d40e429f.js" crossorigin="anonymous"></script>
          <!--Scripts Lógica de Negocio--> 
        <script src="<?php echo constant('URL'); ?>/public/js/scriptsPedido.js"></script>
    </body>
</html>