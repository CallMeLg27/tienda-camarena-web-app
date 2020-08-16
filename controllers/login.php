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
            echo "Cliente";
            session_start();
            $_SESSION["usuario_actual"] = serialize($usuarioActivo);
            $this->view->usuarioActivo = $usuarioActivo;
            $this->view->mensaje="Acceso correcto";
        }

        if (get_class($usuarioActivo)=="Empleado"){
            session_start();
            echo $usuarioActivo->rol;
            $_SESSION["usuario_actual"] = serialize($usuarioActivo);
            $this->view->usuarioActivo = $usuarioActivo;
            $this->view->mensaje="Acceso correcto";
            // var_dump(unserialize($_SESSION["usuario_actual"]));
        }
        $this->render();
    }

    // verifica que los campos de usuario y contraseña sean válidos
    function validarLogin(){
        
    }

    function render(){
        $this->view->render('login/index');
    }
}
?>