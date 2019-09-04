<?php
    function connectFuncDb($a,$b,$c,$d){
    $cn=mysqli_connect($a, $b, $c, $d);
    if(!$cn){
        echo "<script>";
        echo "alert('algo esta pasando no nos pudimos conectar revise el código')";
        echo "</script>";
    }
    else{
        
        echo "<script>";
        echo "console.log('nos pudimos conectar')";
        echo "</script>";
    }
    }

    //connectFuncDb("localhost", "root", "", "gservices");
    //HOST GODADDY
    function openDoor(){
    connectFuncDb("localhost", "aRiveraWebMaster", "Mormon1990", "gServices");
    }
    openDoor();
?>
