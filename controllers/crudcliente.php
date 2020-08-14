<?php

class CRUDCliente extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
    }

    function render(){
    	$clientes = $this->view->datos = $this->model->get();
        $this->view->clientes = $clientes;
        $this->view->render('cliente/index');
    }

    function crear(){

        $nuevo_cliente = new Cliente;
        $nuevo_cliente->cliente_id = $_POST['cliente_id'];
        $nuevo_cliente->nombre = $_POST['nombre'];
        $nuevo_cliente->apellido = $_POST['apellido'];
        $nuevo_cliente->dni = $_POST['dni'];
        $nuevo_cliente->edad = $_POST['edad'];
        $nuevo_cliente->distrito = $_POST['distrito'];
        $nuevo_cliente->direccion = $_POST['direccion'];
        $nuevo_cliente->telefono = $_POST['telefono'];
        $nuevo_cliente->email = $_POST['email'];

        // Se valida el cliente antes de intentar agregarlo a la BD
        if (!$this->validarCliente($nuevo_cliente)){
            $this->view->mensaje = "Cliente no se pudo crear, fallo en la validacion";
            $this->render();
            return;
        }

        // Se intenta añadir el cliente a la BD
        if($this->model->insert(['cliente_id' => $nuevo_cliente->cliente_id, 'nombre' => $nuevo_cliente->nombre, 'apellido' => $nuevo_cliente->apellido, 'dni' => $nuevo_cliente->dni, 'edad' => $nuevo_cliente->edad, 'distrito' => $nuevo_cliente->distrito, 'telefono' => $nuevo_cliente->telefono, 'email' => $nuevo_cliente->email])){
            //header('location: '.constant('URL').'nuevo/clienteCreado');
            $this->view->mensaje = "Cliente creado correctamente";
            
           	// $this->view->render('cliente/index');
           	$this->render();
        }else{
        	$this->view->mensaje = "Error! Cliente ya existe";
            $this->render();
        }
    }

    function verCliente($param = null){
        $idCliente = $param[0];
        $cliente = $this->model->getById($idCliente);

        session_start();
        $_SESSION["id_verCliente"] = $cliente->cliente_id;

        $this->view->cliente = $cliente;
        $this->view->render('consulta/detalle');
    }

    function actualizarCliente($param = null){
        session_start();
        $cliente_por_actualizar = new Cliente;
        // $cliente_por_actualizar->cliente_id = $_SESSION["id_verCliente"];
        $cliente_por_actualizar->cliente_id = $_POST['cliente_id'];
        $cliente_por_actualizar->nombre = $_POST['nombre'];
        $cliente_por_actualizar->apellido = $_POST['apellido'];
        $cliente_por_actualizar->dni = $_POST['dni'];
        $cliente_por_actualizar->edad = $_POST['edad'];
        $cliente_por_actualizar->distrito = $_POST['distrito'];
        $cliente_por_actualizar->direccion = $_POST['direccion'];
        $cliente_por_actualizar->telefono = $_POST['telefono'];
        $cliente_por_actualizar->email = $_POST['email'];

        unset($_SESSION['id_verCliente']);

        // Se valida el cliente antes de intentar agregarlo a la BD
        if (!$this->validarCliente($cliente_por_actualizar)){
            $this->view->mensaje = "Cliente no se pudo actualizar, fallo en la validacion";
            $this->render();
            return;
        }

        if($this->model->update(['cliente_id' => $cliente_por_actualizar->cliente_id, 'nombre' => $cliente_por_actualizar->nombre, 'apellido' => $cliente_por_actualizar->apellido,'dni' => $cliente_por_actualizar->dni, 'edad' => $cliente_por_actualizar->edad, 'distrito' => $cliente_por_actualizar->distrito, 'direccion' => $cliente_por_actualizar->direccion, 'telefono' => $cliente_por_actualizar->telefono, 'email' => $cliente_por_actualizar->email])){

            $this->view->cliente = $cliente_por_actualizar;
            $this->view->mensaje = "Cliente actualizado correctamente";
        }else{
            $this->view->mensaje = "No se pudo actualizar al cliente";
        }
        $this->render();
    }

    function eliminarCliente($param = null){
        $cliente_id = $param[0];

        if($this->model->delete($cliente_id)){
            $mensaje ="Cliente eliminado correctamente";
            //$this->view->mensaje = "Cliente eliminado correctamente";
        }else{
            $mensaje = "No se pudo eliminar al cliente";
            //$this->view->mensaje = "No se pudo eliminar al cliente";
        }

        //$this->render();

        echo $mensaje;
    }

    function validarCliente($cliente=null){
        if(true){
            return true;
        }
        else{
            return false;
        }
    }
}
?>
