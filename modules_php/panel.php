<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel</title>
    <style>
        #formulario{
            width: 40%;
            height: auto;
            padding: 15px;
        }
        input{
            width: 100%;
            padding: 10px;
            font-size: 22pt;
        }
    </style>
</head>
<body>
<div id="formulario">
<form method="POST" enctype="multipart/form-data" action="sendProducts.php">
        <label for="nombre" style="color: gray; padding: 10px; font-size: 9pt;">Ingresa un Nombre para el producto:</label>
        <input type="text" name="gName" placeholder="Nombre..." style="padding: 10px;"><br>
        
        <input type="submit" value="Crear Producto" class="btn btn-primary mt-3">
    </form>
</div>
</body>
</html>