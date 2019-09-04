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
    <link rel="stylesheet" href="./modules_php/css/body.css">
    <link rel="stylesheet" href="./modules_php/css/footer.css"><!--
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        /*uso correcto de font family {google fonts}
            font-family: 'Raleway', sans-serif;
            font-family: 'Roboto', sans-serif;
        */
        #header{
            background-image: url('assets/img/1186.jpg');
            background-size: 100% auto;
            background-repeat: no-repeat;
            background-position: 0px -200px;
            transition:ease all 3s;
        }
        
@media(max-width: 800px) {
    #header {
        background-position: 0px 0px;
    }
    #header:hover{
            transition:ease all 1s;
            background-position: 0px 0px;
        }
    
        #logo{
            width: 125px;
            height: 125px;
            left: 100%;
            margin-top: 100px;
        }
        #logoid{
            width: 125px;
            height: auto;
            margin-top: 20px;
        }
        }
        #header:hover{
            transition:ease all 1s;
            background-position: 0px -450px;
        }
        #image2{
            background-image: url('assets/img/1190.jpg');
            height: 200px;
            background-size: 100% auto;
            background-repeat: no-repeat;
            background-position: 0px -200px;
        }
        a{
            color:white;
        }
    </style>
</head>
<body>
        <!--nav bar inicio-->
        <?php
            require_once('modules_php/nav.php')
        ?>
        <!--nav bar fin-->
        <div id="logo">
            <figure>
                <img src="assets/img/GLOBAL-SERVICES-LOGO-W.png" width="300px" height="auto" alt="logotipo" id="logoid">
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
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
-->
<script src="node_modules/tether/dist/js/tether.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="node_modules/animejs/lib/anime.min.js"></script>
</html>