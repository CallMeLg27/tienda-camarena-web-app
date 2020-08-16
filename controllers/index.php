<?php
require_once 'models/cliente.php';
require_once 'models/empleado.php';

class Index extends Controller{
    function __construct(){
        parent::__construct();
    }

    function render(){
        session_start();
        $usuarioLogeado = false;
        if(isset($_SESSION["usuario_actual"])){
            $usuarioLogeado = true;
            $usuario_actual = unserialize($_SESSION["usuario_actual"]);
            // var_dump($usuario_actual);
            $tipoUsuario = $usuario_actual->rol;
        }
        if($usuarioLogeado){
            $this->view->render('users/'.$tipoUsuario.'/index');    
        }
        else{
            $this->view->render('index/index');  
        }
    }

    function saludo(){
        echo "<p>Hola a todos<p>";
    }
}

?>