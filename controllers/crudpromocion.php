<?php
require_once 'models/empleado.php';
class CRUDPromocion extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
    }

    function render(){
        session_start();
        $usuario_actual = unserialize($_SESSION["usuario_actual"]);
        $this->view->nombreUsuario = $usuario_actual->nombre;
        
        $promociones = $this->view->datos = $this->model->get();
        $this->view->promociones = $promociones;
        $this->view->render('promocion/index');
    }

    function crear(){

        $nuevo_promocion = new Promocion;
        $nuevo_promocion->promocion_id = $_POST['promocion_id'];
        $nuevo_promocion->nombre = $_POST['nombre'];
        $nuevo_promocion->descripcion = $_POST['descripcion'];
        $nuevo_promocion->cantidad = $_POST['cantidad'];
        $nuevo_promocion->costo = $_POST['costo'];

        // Se valida el promocion antes de intentar agregarlo a la BD
        if (!$this->validarPromocion($nuevo_promocion)){
            $this->view->mensaje = "Promocion no se pudo crear, fallo en la validacion";
            $this->render();
            return;
        }

        // Se intenta añadir el promocion a la BD
        if($this->model->insert(['promocion_id' => $nuevo_promocion->promocion_id, 'nombre' => $nuevo_promocion->nombre, 'descripcion' => $nuevo_promocion->descripcion, 'cantidad' => $nuevo_promocion->cantidad, 'costo' => $nuevo_promocion->costo])){
            //header('location: '.constant('URL').'nuevo/promocionCreado');
            $this->view->mensaje = "Promocion creado correctamente";
            
           	// $this->view->render('promocion/index');
           	$this->render();
        }else{
        	$this->view->mensaje = "Error! Promocion ya existe";
            $this->render();
        }
    }

    function verPromocion($param = null){
        $idPromocion = $param[0];
        $promocion = $this->model->getById($idPromocion);

        session_start();
        $_SESSION["id_verPromocion"] = $promocion->promocion_id;

        $this->view->promocion = $promocion;
        $this->view->render('consulta/detalle');
    }

    function actualizarPromocion($param = null){
        session_start();
        $promocion_por_actualizar = new Promocion;
        // $promocion_por_actualizar->promocion_id = $_SESSION["id_verPromocion"];
        $promocion_por_actualizar->promocion_id = $_POST['promocion_id'];
        $promocion_por_actualizar->nombre = $_POST['nombre'];
        $promocion_por_actualizar->descripcion = $_POST['descripcion'];
        $promocion_por_actualizar->cantidad = $_POST['cantidad'];
        $promocion_por_actualizar->costo = $_POST['costo'];

        unset($_SESSION['id_verPromocion']);

        // Se valida el promocion antes de intentar agregarlo a la BD
        if (!$this->validarPromocion($promocion_por_actualizar)){
            $this->view->mensaje = "Promocion no se pudo actualizar, fallo en la validacion";
            $this->render();
            return;
        }

        if($this->model->update(['promocion_id' => $promocion_por_actualizar->promocion_id, 'nombre' => $promocion_por_actualizar->nombre, 'descripcion' => $promocion_por_actualizar->descripcion, 'cantidad' => $promocion_por_actualizar->cantidad, 'costo' => $promocion_por_actualizar->costo])){

            $this->view->promocion = $promocion_por_actualizar;
            $this->view->mensaje = "Promocion actualizado correctamente";
        }else{
            $this->view->mensaje = "No se pudo actualizar al promocion";
        }
        $this->render();
    }

    function eliminarPromocion($param = null){
        $promocion_id = $param[0];

        if($this->model->delete($promocion_id)){
            $mensaje ="Promocion eliminado correctamente";
            //$this->view->mensaje = "Promocion eliminado correctamente";
        }else{
            $mensaje = "No se pudo eliminar al promocion";
            //$this->view->mensaje = "No se pudo eliminar al promocion";
        }

        //$this->render();

        echo $mensaje;
    }

    function validarPromocion($promocion=null){
        if(true){
            return true;
        }
        else{
            return false;
        }
    }
}
?>
