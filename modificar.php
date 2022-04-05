<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICAR</title>
</head>
<body>
     <?php
            include("conexion.php");
            $id = $_REQUEST['id'];
            $query = "SELECT * FROM aprendiz WHERE id= $id";
            $result = $conexion->query($query);
            $row = $result->fetch_assoc();
     ?>

    <center>
        <form action="modificarProceso.php?id=<?php echo $row['id'];?>" method="POST" enctype="multipart/form-data">
            <input REQUIRED type="text" name="nombre" placeholder="Nombre..." value="<?php echo $row['nombre'];?>"/><br/><br/><br/>
            <img  height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['foto']);?>"/><br/><br/>
            <input type="file" REQUIRED name="foto" /><br/><br/>
            <input type="submit" name="Aceptar"/>
        </form>
    </center>
</body>
</html>