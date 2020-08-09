<?php
class Login extends Controller{
    
    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
    }

    function autenticar(){
        $usuario = $_POST["username"];
        $contra = $_POST["password"];
        echo '<p>'.$_POST["username"].'</p>';
        echo '<p>'.$_POST["password"].'</p>';
        $cliente = $this->model->getByCredentials($usuario, $contra);
        if ($cliente){
            session_start();
            $_SESSION["cliente_actual"] = $cliente;
            $this->view->cliente = $cliente;
            $this->view->mensaje="Acceso correcto";
        }else{
            $this->view->mensaje="Acceso incorrecto";
        }
        $this->render();
     	// autentica al cliente
    	//   Se valida el Login
    	//   Se busca en la base de datos si el usuario existe
    	//		Si existe: Crea una sesion
    	// 		Si no exite: Retorna
    }

    // verifica que los campos de usuario y contraseña sean válidos
    function validarLogin(){
        
    }

    function render(){
        $this->view->render('login/index');
    }
}
?>