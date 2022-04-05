<?php
    include("conexion.php");

    $nombre = $_POST['nombre'];
    $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));

    $query = "INSERT INTO aprendiz(nombre, foto) VALUES('$nombre','$foto')";

    $result = $conexion->query($query);

    if($result){
        header('Location: mostrar.php');
    }else{
        echo "ERROR la crear registro";
    }

?>