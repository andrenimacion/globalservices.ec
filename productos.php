<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./modules_php/css/head.css">
    <link rel="stylesheet" href="./modules_php/css/body.css">
    <link rel="stylesheet" href="./modules_php/css/footer.css">
    <link rel="stylesheet" href="./modules_php/css/productos.css">
    <link rel="stylesheet" href="./modules_php/css/nav.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

</head>

<body>
        <!--nav bar inicio-->
        <?php
            require_once('modules_php/nav.php');
        ?>
        <?php
            require_once('modules_php/nav-products.php');
        ?>
        <!--nav bar fin-->
        <script src="js/nav.js"></script>
        
        <div class="container mt-4" id="contProd" style="display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap;" >
        <?php
            require_once "modules_php/products.php";
        ?>
        </div>

        <script src="js/filtro.js"></script>
<script>
            
            

</script>

</body>

<script src="node_modules/jquery/dist/jquery.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
-->
<script src="node_modules/tether/dist/js/tether.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="node_modules/animejs/lib/anime.min.js"></script>

</html>