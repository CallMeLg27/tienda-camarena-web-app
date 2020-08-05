<?php

class Index extends Controller{
    function __construct(){
        parent::__construct();
        //$this->view->mensaje = "Hay un error al cargar el recurso";
    }

    function render(){
        session_start();
        $usuarioLogeado = true;
        $tipoUsuario = "cliente";
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