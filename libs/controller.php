<?php

class Controller{

    function __construct(){
        $this->view = new View();
        //echo "<p>Controlador principal</p>";
    }

    function loadModel($model){
        $url = 'models/'.$model.'model.php';

        if(file_exists($url)){
            require_once $url;
            
            $modelName = $model.'Model';
            $this->model = new $modelName();
        }
    }
}

?>