<?php
    include "cn.php";

    $gName = $_REQUEST['gName'];
    $gDatos = $_REQUEST['gDatos'];
    $gEspec = $_REQUEST['gEspec'];
    $gImagen = addslashes(file_get_contents($_FILES['gImagen']['tmp_name']));
    $gPrecio = $_REQUEST['gPrecio'];
    $gStock = $_REQUEST['gStock'];

    echo $gName;
    echo $gDatos;
    echo $gPrecio;
    echo $gStock;

    mysqli_query($cn,"insert into gProducts(gName, gData, gEspec, gImagen, gPrecio, gStock) values 
                       ('$gName', '$gData', '$Espec', '$gImagen', '$gPrecio', '$gPrecio', '$gStock')")
    or die("Problemas en el select".mysqli_error($cn));
    header('location: index.php');
    mysqli_close($cn);
?>