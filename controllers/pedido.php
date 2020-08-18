<?php
class Pedido extends Controller{
    
    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
    }

    function render(){
        $this->view->render('pedido/index');
    }

    function getProducto(){
    		$this->view->producto = $this->model->getProductoById('PR001');
    }
}
?>