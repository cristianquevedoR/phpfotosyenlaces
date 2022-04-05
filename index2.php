<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--vamos a guardar los procesos realizados  -->
    <form action="guardarprocesos2.php" method="POST"enctype="multipart/form-data">
        <input  REQUIRED type="text" name="nombre" placeholder="Nombre...">
        <input REQUIRED type="file" names="foto"/>
        <input type="submit" name="Aceptar">
    </form>
</body>
</html>