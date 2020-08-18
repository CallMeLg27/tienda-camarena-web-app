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

        <!--CDN JQuery,Popper,Bootstrap (JS)-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
        <!-- Los iconos tipo Solid de Fontawesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
        <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
        
        <!-- Nuestros css-->
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/index.css">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/user_admin.css">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/main.css">
    </head>
    <body>
	    <?php require 'views/header.php'; ?>
	    <div class="contespace">
		    <div class="d-flex justify-content-center">
		        <h2 style="color:##09ea1a"><strong>Stock de productos</strong></h2>
		    </div>
	   </div>
	  	<div class="container d-flex flex-row-reverse mt-4">    
            <div class="col-md-4" >
			   	<select class="selectpicker" data-style="btn-primary">
				    <option>Todos</option>
				    <option>Menor a 10</option>
		  		</select>
			</div>
        </div>
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
			            </tr>
			        </thead>
			        <tbody id="tbody-productos">
			            <!--<?php
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
			                    </tr>
			            <?php } ?>-->
			        </tbody>
			    </table>
			</div>
		</div> 
		<div class="container d-flex flex-row justify-content-center mt-4">
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-print"></i> IMPRIMIR</button>
                </div>
                
        </div> 
	    <div class="container d-flex mt-5">
		        <div class="col-md-4">
		                    <button type="submit" class="btn btn-secondary btn-block"><i class="fa fa-home"></i> INICIO</button>
		        </div>
	    </div>
	    <?php require 'views/footer.php'; ?>
	</body>
</html>
