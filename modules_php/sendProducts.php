<?php
    include "cn.php";

    $gName = $_REQUEST['gName'];
    $gDatos = $_REQUEST['gDatos'];
    $gEspec = $_REQUEST['gEspec'];
    $gImagen = addslashes(file_get_contents($_FILES['gImagen']['tmp_name']));
    $gPrecio = $_REQUEST['gPrecio'];
    $gStock = $_REQUEST['gStock'];
/*
    echo $gName;
    echo $gDatos;
    echo $gPrecio;
    echo $gStock;
*/
    $queryInsert = "INSERT INTO gProducts('gName', 'gData', 'gEspec', 'gImagen', 'gPrecio', 'gStock')
    VALUE('$gName','$gDatos','$gEspec','$gImagen','$gPrecio','$gStock')" or die("Problemas en el select".mysqli_error(openDoor()));
    header('location: error.php');
    mysqli_close(openDoor());
?>