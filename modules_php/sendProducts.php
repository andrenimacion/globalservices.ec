<?php
    include "cn.php";

    $gName = $_REQUEST['gName'];
    $gDatos = $_REQUEST['gDatos'];
    $gEspec = $_REQUEST['gEspec'];
    $gImagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
    $gPrecio = $_REQUEST['gPrecio'];
    $gStock = $_REQUEST['gStock'];

    echo $gName;
    echo $gDatos;
    echo $gEspec;
    echo $gPrecio;
    echo $gStock;
/*
    mysqli_query( openDoor(),"insert into gProducts(gName, gData, gEspec, gImagen, gPrecio, gStock) values 
                       ('$gName', 'hola soy paolo', 'paolo es un humano', '', '', '125', '123')")
    or die("Problemas en el select".mysqli_error( openDoor()));
    header('location: error.php');
    mysqli_close(openDoor());*/
?>