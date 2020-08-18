<?php

class CRUDRecarga extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
    }

    function render(){
    	// $recargas = $this->view->datos = $this->model->get();
        // $this->view->recargas = $recargas;
        $this->view->render('recarga/index');
    }

    function crear(){

        $nuevo_recarga = new Recarga;
        $nuevo_recarga->recarga_id = $_POST['recarga_id'];
        $nuevo_recarga->nombre = $_POST['nombre'];
        $nuevo_recarga->apellido = $_POST['apellido'];
        $nuevo_recarga->dni = $_POST['dni'];
        $nuevo_recarga->edad = $_POST['edad'];
        $nuevo_recarga->distrito = $_POST['distrito'];
        $nuevo_recarga->direccion = $_POST['direccion'];
        $nuevo_recarga->telefono = $_POST['telefono'];
        $nuevo_recarga->email = $_POST['email'];
        $nuevo_recarga->estado = $_POST['estado'];

        // Se valida el recarga antes de intentar agregarlo a la BD
        if (!$this->validarRecarga($nuevo_recarga)){
            $this->view->mensaje = "Recarga no se pudo crear, fallo en la validacion";
            $this->render();
            return;
        }

        // Se intenta añadir el recarga a la BD
        if($this->model->insert(['recarga_id' => $nuevo_recarga->recarga_id, 'nombre' => $nuevo_recarga->nombre, 'apellido' => $nuevo_recarga->apellido, 'dni' => $nuevo_recarga->dni, 'edad' => $nuevo_recarga->edad, 'distrito' => $nuevo_recarga->distrito, 'direccion' => $nuevo_recarga->direccion,'telefono' => $nuevo_recarga->telefono, 'email' => $nuevo_recarga->email, 'estado' => $nuevo_recarga->estado,])){
            //header('location: '.constant('URL').'nuevo/recargaCreado');
            $this->view->mensaje = "Recarga creado correctamente";
            
           	// $this->view->render('recarga/index');
           	$this->render();
        }else{
        	$this->view->mensaje = "Error! Recarga ya existe";
            $this->render();
        }
    }

    function verRecarga($param = null){
        $idRecarga = $param[0];
        $recarga = $this->model->getById($idRecarga);

        session_start();
        $_SESSION["id_verRecarga"] = $recarga->recarga_id;

        $this->view->recarga = $recarga;
        $this->view->render('consulta/detalle');
    }

    function actualizarRecarga($param = null){
        session_start();
        $recarga_por_actualizar = new Recarga;
        // $recarga_por_actualizar->recarga_id = $_SESSION["id_verRecarga"];
        $recarga_por_actualizar->recarga_id = $_POST['recarga_id'];
        $recarga_por_actualizar->nombre = $_POST['nombre'];
        $recarga_por_actualizar->apellido = $_POST['apellido'];
        $recarga_por_actualizar->dni = $_POST['dni'];
        $recarga_por_actualizar->edad = $_POST['edad'];
        $recarga_por_actualizar->distrito = $_POST['distrito'];
        $recarga_por_actualizar->direccion = $_POST['direccion'];
        $recarga_por_actualizar->telefono = $_POST['telefono'];
        $recarga_por_actualizar->email = $_POST['email'];
        if(isset($_POST['estado']) && $_POST['estado']=="activo"){
            $recarga_por_actualizar->estado = "activo";
        }else{
            $recarga_por_actualizar->estado = "inactivo"; 
        }
        
        // var_dump($recarga_por_actualizar);

        // Se valida el recarga antes de intentar agregarlo a la BD
        if (!$this->validarRecarga($recarga_por_actualizar)){
            $this->view->mensaje = "Recarga no se pudo actualizar, fallo en la validacion";
            $this->render();
            return;
        }

        if($this->model->update(['recarga_id' => $recarga_por_actualizar->recarga_id, 'nombre' => $recarga_por_actualizar->nombre, 'apellido' => $recarga_por_actualizar->apellido,'dni' => $recarga_por_actualizar->dni, 'edad' => $recarga_por_actualizar->edad, 'distrito' => $recarga_por_actualizar->distrito, 'direccion' => $recarga_por_actualizar->direccion, 'telefono' => $recarga_por_actualizar->telefono, 'email' => $recarga_por_actualizar->email, 'estado' => $recarga_por_actualizar->estado])){

            $this->view->recarga = $recarga_por_actualizar;
            $this->view->mensaje = "Recarga actualizado correctamente";
        }else{
            $this->view->mensaje = "No se pudo actualizar al recarga";
        }
        $this->render();
    }

    function eliminarRecarga($param = null){
        $recarga_id = $param[0];

        if($this->model->delete($recarga_id)){
            $mensaje ="Recarga eliminado correctamente";
            //$this->view->mensaje = "Recarga eliminado correctamente";
        }else{
            $mensaje = "No se pudo eliminar al recarga";
            //$this->view->mensaje = "No se pudo eliminar al recarga";
        }

        //$this->render();

        echo $mensaje;
    }

    function validarRecarga($recarga=null){
        if(true){
            return true;
        }
        else{
            return false;
        }
    }
}
?>
