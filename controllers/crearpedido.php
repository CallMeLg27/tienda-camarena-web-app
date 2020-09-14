<?php

require_once 'models/cliente.php';
require_once 'models/empleado.php';

require_once 'models/pedido.php';
require_once 'models/venta.php';
require_once 'models/derived/productodelpedido.php';
require_once 'models/crudproductomodel.php';
require_once 'models/crudtarjetamodel.php';
require_once 'models/crudventamodel.php';
require_once 'models/crudproductopedidomodel.php';


class CrearPedido extends Controller{

    function __construct(){
        parent::__construct();
        session_start();
        $this->view->mensaje="";
        $this->usuario_actual = unserialize($_SESSION["usuario_actual"]);
        if (isset($_SESSION["pedido_actual_id"]))
            $this->pedido_actual_id = $_SESSION["pedido_actual_id"];
    }

    function render(){
        $this->sendDataToView();
        $this->view->render('pedido/index');
    }

    function crear(){
        if(!isset($_SESSION["pedido_actual_id"])){
            $_SESSION["pedido_actual_id"] = $this->generateNewId();
            $this->pedido_actual_id = $_SESSION["pedido_actual_id"];
        }
        $pedido_id = $_SESSION["pedido_actual_id"];
        if($this->model->insert(['pedido_id' => $pedido_id, 'cliente_id' => $this->usuario_actual->cliente_id])){
            $this->view->mensaje = "Nuevo pedido creado correctamente";
            $this->render();
        }else{
            $this->view->mensaje = "No se ha creado un nuevo pedido";
            $this->render();
        }
    }

    function generateNewId(){
        $biggestId = $this->model->getBiggestId();
        $numeric_part = (int)substr($biggestId,2)+1;
        $numlength = strlen((string)$numeric_part);
        $newId = substr($biggestId,0,5-$numlength).$numeric_part;
        return $newId;
    }

    function insertarProducto(){
        $producto_id = $_POST['producto_id'];
        $cantidad = $_POST['cantidad'];

        // Se intenta añadir el producto a la BD
        $crudproductopedidomodel = new CrudProductopedidoModel();
        if($crudproductopedidomodel->insert(['producto_id' => $producto_id, 'pedido_id' => $this->pedido_actual_id, 'cantidad' => $cantidad])){
            $this->view->mensaje = "Producto añadido correctamente";
            // $this->view->render('producto/index');
            $this->render();
        }else{
            $this->view->mensaje = "Error aqui!";
            $this->render();
        }
    }

    function sendDataToView(){
        $crudtarjetamodel = new CrudTarjetaModel();
        $crudventamodel = new CrudVentaModel();
        $crudproductopedidomodel = new CrudProductopedidoModel();
        $crudproductomodel = new CrudProductoModel();
        $tarjeta = $crudtarjetamodel->getTarjetasDeCliente($this->usuario_actual->cliente_id)[0];
        $arr_productopedido = $crudproductopedidomodel->getProductopedidoDePedido($this->pedido_actual_id);

        $arr_ProductosDelPedido = [];
        foreach ($arr_productopedido as $productopedido) {
            $productodelpedido = new ProductoDelPedido();
            $producto = $crudproductomodel->getById($productopedido->producto_id);
            // var_dump($producto);
            $productodelpedido->codigo = $producto->producto_id;
            $productodelpedido->nombre = $producto->nombre;
            $productodelpedido->descripcion = $producto->descripcion;
            $productodelpedido->costo = $producto->costo;
            $productodelpedido->cantidad = $productopedido->cantidad;
            array_push($arr_ProductosDelPedido, $productodelpedido);
        }

        // envia datos a la vista
        $this->view->nombreUsuario = $this->usuario_actual->nombre;  // Nombre
        $this->view->tarjeta = $tarjeta; // "NRO CUENTA (id)  SALDO DISPONIBLE (saldo)"
        $this->view->nro_venta = (int)substr($this->pedido_actual_id,2);
        $this->view->fecha = getdate();
        $this->view->arr_ProductosDelPedido = $arr_ProductosDelPedido; // "Código  Nombre  Descripción  Costo S/.   Cantidad"
    }

    function ejecutar(){
        $this->sendDataToView();
        // Crear la venta
        $crudventamodel = new CrudVentaModel();
        $nueva_venta = new Venta();
        $nueva_venta->venta_id = 'VE'.substr($this->pedido_actual_id,2);
        $nueva_venta->pedido_id = $this->pedido_actual_id;
        $nueva_venta->descripcion = null;
        $total_a_pagar=0;
        foreach ($this->view->arr_ProductosDelPedido as $item) {
            $total_a_pagar += $item->cantidad * $item->costo;
        }
        $nueva_venta->monto = $total_a_pagar;
        $nueva_venta->fecha = $this->view->fecha['year'].'-'.$this->view->fecha['mon'].'-'.$this->view->fecha['mday'];

        if($crudventamodel->insert((array)$nueva_venta)){
            $this->view->mensaje = "Venta ejecutada correctamente";
        }else{
            $this->view->mensaje = "No se pudo ejecutar la venta";
        }
        
        // actualizar el saldo
        $crudtarjetamodel = new CrudTarjetaModel();
        $tarjeta_actualizada = new Tarjeta();
        $tarjeta_actualizada->tarjeta_id = $this->view->tarjeta->tarjeta_id;
        $tarjeta_actualizada->cliente_id = $this->view->tarjeta->cliente_id;
        $tarjeta_actualizada->fechavencimiento = $this->view->tarjeta->fechavencimiento;
        $tarjeta_actualizada->saldo = $this->view->tarjeta->saldo - $total_a_pagar;
        $crudtarjetamodel->update((array)$tarjeta_actualizada);

        $this->view->tarjeta->saldo = $tarjeta_actualizada->saldo;
        $this->view->render('pedido/index');
    }
}
?>
