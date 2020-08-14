<?php

class CRUDProducto extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
    }

    function render(){
    	$productos = $this->view->datos = $this->model->get();
        $this->view->productos = $productos;
        $this->view->render('producto/index');
    }

    function crear(){

        $nuevo_producto = new Producto;
        $nuevo_producto->producto_id = $_POST['producto_id'];
        $nuevo_producto->nombre = $_POST['nombre'];
        $nuevo_producto->descripcion = $_POST['descripcion'];
        $nuevo_producto->cantidad = $_POST['cantidad'];
        $nuevo_producto->costo = $_POST['costo'];

        // Se valida el producto antes de intentar agregarlo a la BD
        if (!$this->validarProducto($nuevo_producto)){
            $this->view->mensaje = "Producto no se pudo crear, fallo en la validacion";
            $this->render();
            return;
        }

        // Se intenta añadir el producto a la BD
        if($this->model->insert(['producto_id' => $nuevo_producto->producto_id, 'nombre' => $nuevo_producto->nombre, 'descripcion' => $nuevo_producto->descripcion, 'cantidad' => $nuevo_producto->cantidad, 'costo' => $nuevo_producto->costo])){
            //header('location: '.constant('URL').'nuevo/productoCreado');
            $this->view->mensaje = "Producto creado correctamente";
            
           	// $this->view->render('producto/index');
           	$this->render();
        }else{
        	$this->view->mensaje = "Error! Producto ya existe";
            $this->render();
        }
    }

    function verProducto($param = null){
        $idProducto = $param[0];
        $producto = $this->model->getById($idProducto);

        session_start();
        $_SESSION["id_verProducto"] = $producto->producto_id;

        $this->view->producto = $producto;
        $this->view->render('consulta/detalle');
    }

    function actualizarProducto($param = null){
        session_start();
        $producto_por_actualizar = new Producto;
        // $producto_por_actualizar->producto_id = $_SESSION["id_verProducto"];
        $producto_por_actualizar->producto_id = $_POST['producto_id'];
        $producto_por_actualizar->nombre = $_POST['nombre'];
        $producto_por_actualizar->descripcion = $_POST['descripcion'];
        $producto_por_actualizar->cantidad = $_POST['cantidad'];
        $producto_por_actualizar->costo = $_POST['costo'];

        unset($_SESSION['id_verProducto']);

        // Se valida el producto antes de intentar agregarlo a la BD
        if (!$this->validarProducto($producto_por_actualizar)){
            $this->view->mensaje = "Producto no se pudo actualizar, fallo en la validacion";
            $this->render();
            return;
        }

        if($this->model->update(['producto_id' => $producto_por_actualizar->producto_id, 'nombre' => $producto_por_actualizar->nombre, 'descripcion' => $producto_por_actualizar->descripcion, 'cantidad' => $producto_por_actualizar->cantidad, 'costo' => $producto_por_actualizar->costo])){

            $this->view->producto = $producto_por_actualizar;
            $this->view->mensaje = "Producto actualizado correctamente";
        }else{
            $this->view->mensaje = "No se pudo actualizar al producto";
        }
        $this->render();
    }

    function eliminarProducto($param = null){
        $producto_id = $param[0];

        if($this->model->delete($producto_id)){
            $mensaje ="Producto eliminado correctamente";
            //$this->view->mensaje = "Producto eliminado correctamente";
        }else{
            $mensaje = "No se pudo eliminar al producto";
            //$this->view->mensaje = "No se pudo eliminar al producto";
        }

        //$this->render();

        echo $mensaje;
    }

    function validarProducto($producto=null){
        if(true){
            return true;
        }
        else{
            return false;
        }
    }
}
?>
