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
        $usuarioActivo = $this->model->getByCredentials($usuario, $contra);
        if($usuarioActivo==null){
            $this->view->mensaje="Acceso incorrecto";
            $this->render();
            return;
        }

        if (get_class($usuarioActivo)=="Cliente"){
            session_start();
            $_SESSION["usuario_actual"] = serialize($usuarioActivo);
        }

        if (get_class($usuarioActivo)=="Empleado"){
            session_start();
            $_SESSION["usuario_actual"] = serialize($usuarioActivo);
        }

        header('Location: '.constant('URL'));
        unset($_SESSION["pedido_actual_id"]);
    }

    // verifica que los campos de usuario y contraseña sean válidos
    function validarLogin(){
        
    }

    function render(){
        $this->view->render('login/index');
    }
}
?>