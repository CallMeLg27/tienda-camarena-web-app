<?php
require_once 'models/cliente.php';
require_once 'models/empleado.php';

class Index extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
    }

    function render(){
        session_start();
        $usuarioLogeado = false;
        if(isset($_SESSION["usuario_actual"])){
            $usuarioLogeado = true;
            $usuario_actual = unserialize($_SESSION["usuario_actual"]);
            // var_dump($usuario_actual);
            if (get_class($usuario_actual)=='Empleado'){
                $tipoUsuario = $usuario_actual->rol;
            }
            else{
                $tipoUsuario = 'cliente';
            }
        }
        if($usuarioLogeado){
            $this->view->nombreUsuario = $usuario_actual->nombre;
            $this->view->render('users/'.$tipoUsuario.'/index');
        }
        else{
            $this->view->render('index/index'); 
        }
    }
}

?>