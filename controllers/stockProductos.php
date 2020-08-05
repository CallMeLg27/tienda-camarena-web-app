<?php
class StockProductos extends Controller{
    
    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
        
    }

    function render(){
        $this->view->render('producto/stock_productos/index');
    }
}
?>