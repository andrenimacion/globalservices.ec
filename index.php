<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Global Services</title>
   <!-- <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto&display=swap" rel="stylesheet">
    -->
    <link rel="stylesheet" href="./modules_php/css/head.css">
    <link rel="stylesheet" href="./modules_php/css/nav.css">
    <link rel="stylesheet" href="./modules_php/css/body.css">
    <link rel="stylesheet" href="./modules_php/css/footer.css">
    <link rel="stylesheet" href="./modules_php/css/index.css"><!--
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <style>
    
    #header {
        background-image: url('assets/img/1186.jpg');
        background-size: 100% auto;
        background-repeat: no-repeat;
        background-position: 0px 0px;
        transition: ease all 3s;
    }

    #image2 {
        background-image: url('assets/img/1190.jpg');
        height: 200px;
        background-size: 100% auto;
        background-repeat: no-repeat;
        background-position: 0px -200px;
    }
    
    </style>
</head>
<body>
        <!--nav bar inicio-->
        <?php
            require_once('modules_php/nav.php')
        ?>
        <script src="js/nav.js"></script>
        <!--nav bar fin-->
        <div id="logo">
            <figure>
                <img src="assets/img/GLOBAL-SERVICES-LOGO-W.png" width="175px" height="auto" alt="logotipo" id="logoid">
            </figure>
        </div>
        <script src="js/logo_anim.js"></script>
        <!--head inicio-->
        <?php
            require_once('modules_php/head.php');
        ?>
        <!--head Fin-->
        <!--body inicio-->
        <?php
            require_once('modules_php/body.php');
        ?>
        <!--body fin-->
        <!--footer inicio-->
        <?php
            require_once('modules_php/footer.php');
        ?>
        <!--footer fin-->
</body>
<script src="node_modules/jquery/dist/jquery.js"></script>
<!--
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
-->
<script src="node_modules/tether/dist/js/tether.js"></script>
<script src="node_modules/animejs/lib/anime.min.js"></script>
</html>