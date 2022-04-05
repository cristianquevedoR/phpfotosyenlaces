<?php
    include ("conexion2.php");
    /*con este metodo traemos el nombre y la foto del index con el metodo $_post*/
    $nombre=$_POST('nombre');
    //en la foto debemos colocar addcslashes(file_get_contents($_files['foto']['tmp_name']));
    $foto=addcslashes(file_get_contents($_files['foto']['tmp_name']));
    /*vamos a insertar datos, llamando a la variable $query=(INSERT INTO) y la tabla de la base de datos
        con los atributos que le pusimos en la columna en este caso es el nombre y la foto y colocamos los 
        valores ingresados anterior mente osea $nombre y $foto
    */
   $query="INSERT INTO aprendiz(nombre,foto)VALUES('$nombre','$foto')";
    /*creamos otra varible donde la conexion valida si los datos ingresados estan en la base de datos
    esto lo hacemos con una estancia de la base de datos con el query*/ 
    $resul=$conexion->query($query);
    /*vamos a validar si se pudo conectar que lo envie a otra pagina :) y si no que le muestre error*/
    if($resul){
        header('location.php');
    }else{
        echo"no pudo ingresar";
    }
   




?>