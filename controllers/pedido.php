<?php
class Pedido extends Controller{
    
    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
        $this->view->mensaje="";
        
    }

    function render(){
        $this->view->render('pedido/index');
    }
}
?>