<?php
class Logout extends Controller{
    
    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
        session_start();
        unset($_SESSION["usuario_actual"]);
    }


    function render(){
        $this->view->render('logout/index');
    }
}
?>