<?php

class View{

    function __construct(){
        //echo "<p>Vista principal</p>";
    }

    function render($nombre){
        require_once 'views/' . $nombre . '.php';
    }
}

?>