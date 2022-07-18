<?php

    function saludarNombre(){
        echo "Hola Oscar";
    }

    function saludar(){
        echo "Hola ...";
    }

    function despedir($nombre, $apellido){
        echo "Adios " . $nombre. " ". $apellido;
    }


    saludar();
    saludarNombre();
    echo "<br>";
    despedir("Oscar", "Wandurraga");



?>