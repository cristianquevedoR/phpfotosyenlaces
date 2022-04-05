<?php

    $conexion= new mysqli("localhost","root","","ejemplo");
    if(!$conexion){
        echo "FALLO EN LA CONEXION";
    }
?>