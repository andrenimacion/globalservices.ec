<?php
    include "cn.php";


    $gName = $_REQUEST['gName'];
    $gPass = $_REQUEST['gPass'];
    /*$gDatos = $_REQUEST['gDatos'];
    $gEspec = $_REQUEST['gEspec'];
    $gImagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
    $gPrecio = $_REQUEST['gPrecio'];
    $gStock = $_REQUEST['gStock'];*/


    mysqli_query( openDoor(),"insert into gUsers(gName, gPass) values ('$gName', '$gPass')")
    or die("Problemas en el select".mysqli_error( openDoor()));
    header('location: error.php');
    mysqli_close(openDoor());
?>