<?php
    include("conexion.php");

    $id = $_REQUEST['id'];
    //$nombre = $_POST['nombre'];
    //$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    $query = "DELETE FROM aprendiz WHERE id='$id'";
    $result = $conexion->query($query);

    if($result){
        header('Location: mostrar.php');
    }else{
        echo "ERROR la ELIMINAR registro";
    }

?>