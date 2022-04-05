<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Fotos</title>
</head>
<body>
    <center>
        <form action="guardarProceso.php" method="POST" enctype="multipart/form-data">
            <input REQUIRED type="text" name="nombre" placeholder="Nombre..." value=""/>
            <input REQUIRED type="file" name="foto" />
            <input type="submit" name="Aceptar"/>
        </form>
    </center>
</body>
</html>