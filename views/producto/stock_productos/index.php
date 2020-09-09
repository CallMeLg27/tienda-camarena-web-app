<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Stock - Mini Market Camarena</title>
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <!--Plantilla admin-->
      <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/AdminLTE.min.css"> 
     <!--CDN Bootstrap (CSS)-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">      
      <!-- Los iconos tipo Solid de Fontawesome-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
      <!-- Nuestros css-->
      <link rel="icon" href="<?php echo constant('URL'); ?>public/img/logo.png" sizes="32x32"> 
      <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/main.css ?3.0">
      <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/head-foot.css ?3.0">  
      <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/sidebar.css ?4.0">
      <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/header-trabajador.css ?4.0">
      <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/cuenta_usuario.css ?1.0">
      <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/container.css ?4.0">
      <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/stock_productos.css ?4.0">     
  </head>
  <body>
    <?php require_once 'views/header_trabajador.php'; ?>   
    <div class="d-flex" id="wrapper">    
      <?php require 'views/sidebar/almacenero.php'; ?>
      <div id="page-content-wrapper"class="w-100">
        <div class="container" id="contenido">
          <div class="d-flex justify-content-center" id="title">
            <h2 ><strong >Stock de productos</strong></h2>
          </div>
          <div class="container d-flex flex-row-reverse mt-2" id="selection">    
            <div class="ml-auto" >
              <select  class="selectpicker" data-style="btn-primary">
                <option>Todos</option>
                <option>Menor a 10</option>
              </select>
            </div>
          </div>
          <div class="container mt-4">
            <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
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
                  
                  <!--<?php require 'models/producto.php';
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
          <div class="form-row text-center mt-4">
              <div class="col-12">
                <button type="submit" class="btn btn-primary " id="imprimir" onclick="javascript:window.print()"><i class="fas fa-print"></i> Imprimir</button>
            </div>
          </div>
        </div>            
      </div>
      
      <!-- /#page-content-wrapper -->
    </div> 
    <?php require 'views/footer.php'; ?> 
    <!--Iconos--> 
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <!--CDN JQuery,Popper,Bootstrap (JS)-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script> 
    <!--Scripts Lógica de Negocio--> 
    <script src="<?php echo constant('URL'); ?>/public/js/scriptsProducto.js"></script>  
	</body>
</html>