<?php
class Login extends Controller{
    
    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
    }

    function autenticar(){
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