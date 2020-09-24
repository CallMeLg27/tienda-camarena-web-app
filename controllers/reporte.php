<?php
require_once 'models/empleado.php';

class reporte extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
    }

    function render(){
    		session_start();
        $usuario_actual = unserialize($_SESSION["usuario_actual"]);
        $this->view->nombreUsuario = $usuario_actual->nombre;
        $this->view->render('reporte/index');
    }
 }
?>
