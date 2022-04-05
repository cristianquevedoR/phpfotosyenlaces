<?php

    /*vamos a iniciar la conexion por medio de mysqli entonces creamos una variable 
    
    $variable=new servidor(mysqli)("localhost")

    */ 

    $conexion=new mysqli("localhost","root","","ejemplo");
    if(!$conexion){
        echo"no pudiste ingresar";
    }


?>