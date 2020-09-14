<?php
class Logout extends Controller{
    
    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
        session_start();
        unset($_SESSION["usuario_actual"]);
        unset($_SESSION["pedido_actual_id"]);
        header('Location: '.constant('URL'));
    }
}
?>