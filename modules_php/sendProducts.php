<?php
    include "cn.php";

    $gName = $_REQUEST['gName'];
    $gDatos = $_REQUEST['gDatos'];
    $gImagen = addslashes(file_get_contents($_FILES['gImagen']['tmp_name']));
    $gStock = $_REQUEST['gStock'];
/*
    echo $gName;
    echo $gDatos;
    echo $gPrecio;
    echo $gStock;
*/

    $queryInsert = "INSERT INTO "

?>