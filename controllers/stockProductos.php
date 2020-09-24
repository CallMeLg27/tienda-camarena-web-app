<?php
require_once 'models/empleado.php';
require_once 'models/crudproductomodel.php';

class StockProductos extends Controller{
    
    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
    }

    function render(){
        session_start();
        $usuario_actual = unserialize($_SESSION["usuario_actual"]);
        $this->view->nombreUsuario = $usuario_actual->nombre;
        
        $crudproductomodel = new CrudProductoModel();
        $productos = $this->view->datos = $crudproductomodel->get();
        $this->view->productos = $productos;
        $this->view->render('producto/stock_productos/index');
    }

    function menorA5(){
        session_start();
        $usuario_actual = unserialize($_SESSION["usuario_actual"]);
        $this->view->nombreUsuario = $usuario_actual->nombre;

        $crudproductomodel = new CrudProductoModel();
        $productos = $this->view->datos = $crudproductomodel->getMenorA5();
        $this->view->productos = $productos;
        $this->view->render('producto/stock_productos/index');
    }

    function menorA10(){
        session_start();
        $usuario_actual = unserialize($_SESSION["usuario_actual"]);
        $this->view->nombreUsuario = $usuario_actual->nombre;

        $crudproductomodel = new CrudProductoModel();
        $productos = $this->view->datos = $crudproductomodel->getMenorA10();
        $this->view->productos = $productos;   
        $this->view->render('producto/stock_productos/index');
    }

    function menorA20(){
        session_start();
        $usuario_actual = unserialize($_SESSION["usuario_actual"]);
        $this->view->nombreUsuario = $usuario_actual->nombre;

        $crudproductomodel = new CrudProductoModel();
        $productos = $this->view->datos = $crudproductomodel->getMenorA20();
        $this->view->productos = $productos; 
        $this->view->render('producto/stock_productos/index');
    }
}
?>