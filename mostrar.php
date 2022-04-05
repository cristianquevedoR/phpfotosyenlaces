<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MOSTRAR</title>
    </head>
    <body>
        <center>
            <table border="2">
                <thead>
                    <tr> 
                        <th colspan="5"> <a href="index.php">Nuevo</a></th>
                    </tr>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Foto</th>
                        <th colspan="2"> Operaciones</th> 
                    </tr>
                </thead>
                <tbody> 
                    <?php
                        include("conexion.php");
                        $query = "SELECT * FROM aprendiz";
                        $result = $conexion->query($query);
                        while($row = $result->fetch_assoc()){
                    ?>
                    <tr> 
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['foto']);?>"/></td>
                        
                        <th><a href="modificar.php?id=<?php echo $row['id'];?>">Modificar</a></th>
                        <th><a href="eliminar.php?id=<?php echo $row['id'];?>">Elimminar</a></th>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </center>

    </body>
</html>