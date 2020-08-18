<?php

class CRUDPedido extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
    }

    function render(){
    	$pedidos = $this->view->datos = $this->model->get();
        $this->view->pedidos = $pedidos;
        $this->view->render('pedido/index');
    }

    function anadirProducto(){
        $producto_id = $_POST["producto_id"];
        $this->view->producto = $this->model->getProductoById($producto_id);
        $this->render();
    }

    function crear(){

        $nuevo_pedido = new Pedido;
        $nuevo_pedido->pedido_id = $_POST['pedido_id'];
        $nuevo_pedido->nombre = $_POST['nombre'];
        $nuevo_pedido->descripcion = $_POST['descripcion'];
        $nuevo_pedido->cantidad = $_POST['cantidad'];
        $nuevo_pedido->costo = $_POST['costo'];

        // Se valida el pedido antes de intentar agregarlo a la BD
        if (!$this->validarPedido($nuevo_pedido)){
            $this->view->mensaje = "Pedido no se pudo crear, fallo en la validacion";
            $this->render();
            return;
        }

        // Se intenta añadir el pedido a la BD
        if($this->model->insert(['pedido_id' => $nuevo_pedido->pedido_id, 'nombre' => $nuevo_pedido->nombre, 'descripcion' => $nuevo_pedido->descripcion, 'cantidad' => $nuevo_pedido->cantidad, 'costo' => $nuevo_pedido->costo])){
            //header('location: '.constant('URL').'nuevo/pedidoCreado');
            $this->view->mensaje = "Pedido creado correctamente";
            
           	// $this->view->render('pedido/index');
           	$this->render();
        }else{
        	$this->view->mensaje = "Error! Pedido ya existe";
            $this->render();
        }
    }

    function verPedido($param = null){
        $idPedido = $param[0];
        $pedido = $this->model->getById($idPedido);


        $this->view->pedido = $pedido;
        $this->view->render('consulta/detalle');
    }

    function actualizarPedido($param = null){
        session_start();
        $pedido_por_actualizar = new Pedido;
        // $pedido_por_actualizar->pedido_id = $_SESSION["id_verPedido"];
        $pedido_por_actualizar->pedido_id = $_POST['pedido_id'];
        $pedido_por_actualizar->nombre = $_POST['nombre'];
        $pedido_por_actualizar->descripcion = $_POST['descripcion'];
        $pedido_por_actualizar->cantidad = $_POST['cantidad'];
        $pedido_por_actualizar->costo = $_POST['costo'];

        unset($_SESSION['id_verPedido']);

        // Se valida el pedido antes de intentar agregarlo a la BD
        if (!$this->validarPedido($pedido_por_actualizar)){
            $this->view->mensaje = "Pedido no se pudo actualizar, fallo en la validacion";
            $this->render();
            return;
        }

        if($this->model->update(['pedido_id' => $pedido_por_actualizar->pedido_id, 'nombre' => $pedido_por_actualizar->nombre, 'descripcion' => $pedido_por_actualizar->descripcion, 'cantidad' => $pedido_por_actualizar->cantidad, 'costo' => $pedido_por_actualizar->costo])){

            $this->view->pedido = $pedido_por_actualizar;
            $this->view->mensaje = "Pedido actualizado correctamente";
        }else{
            $this->view->mensaje = "No se pudo actualizar al pedido";
        }
        $this->render();
    }

    function eliminarPedido($param = null){
        $pedido_id = $param[0];

        if($this->model->delete($pedido_id)){
            $mensaje ="Pedido eliminado correctamente";
            //$this->view->mensaje = "Pedido eliminado correctamente";
        }else{
            $mensaje = "No se pudo eliminar al pedido";
            //$this->view->mensaje = "No se pudo eliminar al pedido";
        }

        //$this->render();

        echo $mensaje;
    }

    function validarPedido($pedido=null){
        if(true){
            return true;
        }
        else{
            return false;
        }
    }
}
?>
