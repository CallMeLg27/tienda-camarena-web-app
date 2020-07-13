<?php
class Producto extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
    }

    function render(){
    		$productos = $this->view->datos = $this->model->get();
        $this->view->productos = $productos;
        $this->view->render('producto/index');
    }

    function crear(){
        $producto_id = $_POST['producto_id'];
        $nombre      = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $cantidad    = $_POST['cantidad'];
        $costo       = $_POST['costo'];

        if($this->model->insert(['producto_id' => $producto_id, 'nombre' => $nombre, 'descripcion' => $descripcion, 'cantidad' => $cantidad, 'costo' => $costo])){
            //header('location: '.constant('URL').'nuevo/productoCreado');
            $this->view->mensaje = "Producto creado correctamente";
           	// $this->view->render('producto/index');
           	$this->render();
        }else{
        	  $this->view->mensaje = "Producto no se pudo crear";
            $this->render();
        }
    }

    function verProducto($param = null){
        $idProducto = $param[0];
        $producto = $this->model->getById($idProducto);

        session_start();
        $_SESSION["id_verProducto"] = $producto->matricula;

        $this->view->producto = $producto;
        $this->view->render('consulta/detalle');
    }

    function actualizarProducto($param = null){
        session_start();
        $matricula = $_SESSION["id_verProducto"];
        $nombre    = $_POST['nombre'];
        $apellido  = $_POST['apellido'];


        unset($_SESSION['id_verProducto']);

        if($this->model->update(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido])){
            $producto = new Producto();
            $producto->matricula = $matricula;
            $producto->nombre = $nombre;
            $producto->apellido = $apellido;

            $this->view->producto = $producto;
            $this->view->mensaje = "Producto actualizado correctamente";
        }else{
            $this->view->mensaje = "No se pudo actualizar al producto";
        }
        $this->view->render('consulta/detalle');
    }

    function eliminarProducto($param = null){
        $matricula = $param[0];

        if($this->model->delete($matricula)){
            $mensaje ="Producto eliminado correctamente";
            //$this->view->mensaje = "Producto eliminado correctamente";
        }else{
            $mensaje = "No se pudo eliminar al producto";
            //$this->view->mensaje = "No se pudo eliminar al producto";
        }

        //$this->render();

        echo $mensaje;
    }

}
?>
