<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel</title>
</head>
<body>
<div>
<form method="POST" enctype="multipart/form-data" action="sendProducts.php">
        <label for="nombre" style="color: gray; padding: 10px; font-size: 9pt;">Ingresa un Nombre para el producto:</label>
        <input type="text" name="gName" placeholder="Nombre..." style="padding: 10px;"><br>
        <label for="datos" style="padding: 10px;color: gray; font-size: 9pt;" >Ingresa la descripci&oacuten:</label>
        <textarea name="gDatos" style="padding: 10px;" rows="4" cols="61"></textarea><br>
        <label for="datos" style="padding: 10px;color: gray; font-size: 9pt;" >Ingresa la descripci&oacuten T&eacutecnica:</label>
        <textarea name="gEspec" style="padding: 10px;" rows="4" cols="61"></textarea><br>
         <input type="file" name="gImagen" >
        <label for="stock" style="padding: 10px;color: gray; font-size: 9pt;" >Ingresa Stock:</label>
        <input type="number" name="gStock">
        <input type="submit" value="Crear Producto" class="btn btn-primary mt-3">
    </form>
</div>
</body>
</html>