<?php

class CRUDUsuario extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
    }

    function render(){
    	$usuarios = $this->view->datos = $this->model->get();
        $this->view->usuarios = $usuarios;
        $this->view->render('usuario/index');
    }

    function crear(){

        $nuevo_usuario = new Usuario;
        $nuevo_usuario->usuario_id = $_POST['usuario_id'];
        $nuevo_usuario->nombre = $_POST['nombre'];
        $nuevo_usuario->apellido = $_POST['apellido'];
        $nuevo_usuario->dni = $_POST['dni'];
        $nuevo_usuario->edad = $_POST['edad'];
        $nuevo_usuario->distrito = $_POST['distrito'];
        $nuevo_usuario->direccion = $_POST['direccion'];
        $nuevo_usuario->telefono = $_POST['telefono'];
        $nuevo_usuario->email = $_POST['email'];
        $nuevo_usuario->estado = $_POST['estado'];

        // Se valida el usuario antes de intentar agregarlo a la BD
        if (!$this->validarUsuario($nuevo_usuario)){
            $this->view->mensaje = "Usuario no se pudo crear, fallo en la validacion";
            $this->render();
            return;
        }

        // Se intenta añadir el usuario a la BD
        if($this->model->insert(['usuario_id' => $nuevo_usuario->usuario_id, 'nombre' => $nuevo_usuario->nombre, 'apellido' => $nuevo_usuario->apellido, 'dni' => $nuevo_usuario->dni, 'edad' => $nuevo_usuario->edad, 'distrito' => $nuevo_usuario->distrito, 'direccion' => $nuevo_usuario->direccion,'telefono' => $nuevo_usuario->telefono, 'email' => $nuevo_usuario->email, 'estado' => $nuevo_usuario->estado,])){
            //header('location: '.constant('URL').'nuevo/usuarioCreado');
            $this->view->mensaje = "Usuario creado correctamente";
            
           	// $this->view->render('usuario/index');
           	$this->render();
        }else{
        	$this->view->mensaje = "Error! Usuario ya existe";
            $this->render();
        }
    }

    function verUsuario($param = null){
        $idUsuario = $param[0];
        $usuario = $this->model->getById($idUsuario);

        session_start();
        $_SESSION["id_verUsuario"] = $usuario->usuario_id;

        $this->view->usuario = $usuario;
        $this->view->render('consulta/detalle');
    }

    function actualizarUsuario($param = null){
        session_start();
        $usuario_por_actualizar = new Usuario;
        // $usuario_por_actualizar->usuario_id = $_SESSION["id_verUsuario"];
        $usuario_por_actualizar->usuario_id = $_POST['usuario_id'];
        $usuario_por_actualizar->nombre = $_POST['nombre'];
        $usuario_por_actualizar->apellido = $_POST['apellido'];
        $usuario_por_actualizar->dni = $_POST['dni'];
        $usuario_por_actualizar->edad = $_POST['edad'];
        $usuario_por_actualizar->distrito = $_POST['distrito'];
        $usuario_por_actualizar->direccion = $_POST['direccion'];
        $usuario_por_actualizar->telefono = $_POST['telefono'];
        $usuario_por_actualizar->email = $_POST['email'];
        if(isset($_POST['estado']) && $_POST['estado']=="activo"){
            $usuario_por_actualizar->estado = "activo";
        }else{
            $usuario_por_actualizar->estado = "inactivo"; 
        }
        
        // var_dump($usuario_por_actualizar);

        // Se valida el usuario antes de intentar agregarlo a la BD
        if (!$this->validarUsuario($usuario_por_actualizar)){
            $this->view->mensaje = "Usuario no se pudo actualizar, fallo en la validacion";
            $this->render();
            return;
        }

        if($this->model->update(['usuario_id' => $usuario_por_actualizar->usuario_id, 'nombre' => $usuario_por_actualizar->nombre, 'apellido' => $usuario_por_actualizar->apellido,'dni' => $usuario_por_actualizar->dni, 'edad' => $usuario_por_actualizar->edad, 'distrito' => $usuario_por_actualizar->distrito, 'direccion' => $usuario_por_actualizar->direccion, 'telefono' => $usuario_por_actualizar->telefono, 'email' => $usuario_por_actualizar->email, 'estado' => $usuario_por_actualizar->estado])){

            $this->view->usuario = $usuario_por_actualizar;
            $this->view->mensaje = "Usuario actualizado correctamente";
        }else{
            $this->view->mensaje = "No se pudo actualizar al usuario";
        }
        $this->render();
    }

    function eliminarUsuario($param = null){
        $usuario_id = $param[0];

        if($this->model->delete($usuario_id)){
            $mensaje ="Usuario eliminado correctamente";
            //$this->view->mensaje = "Usuario eliminado correctamente";
        }else{
            $mensaje = "No se pudo eliminar al usuario";
            //$this->view->mensaje = "No se pudo eliminar al usuario";
        }

        //$this->render();

        echo $mensaje;
    }

    function validarUsuario($usuario=null){
        if(true){
            return true;
        }
        else{
            return false;
        }
    }
}
?>
