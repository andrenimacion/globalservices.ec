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
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    <style>
        #productos {
            margin-top: 150px;
            padding: 15px;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            flex-wrap: wrap;
        }
        
        .card {
            margin: 10px;
        }
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
    </style>
</head>

<body>
     <!--nav bar inicio-->
     <?php
            require_once('modules_php/nav.php');
        ?>
        <!--nav bar fin-->
        <div id="logo">
            <figure>
                <img src="assets/img/GLOBAL-SERVICES-LOGO-W.png" width="300px" height="auto" alt="logotipo" id="logoid">
            </figure>
        </div>
        <script src="js/logo_anim.js"></script>
       
    <div class="container" id="productos">
        <div class="card" style="width: 18rem;">
            <img src="assets/img/1186.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Contactos</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="assets/img/1186.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Contactos</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="assets/img/1186.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Contactos</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="assets/img/1186.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Contactos</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="assets/img/1186.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Contactos</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="assets/img/1186.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Contactos</a>
            </div>
        </div>
    </div>
</body>

<script src="node_modules/jquery/dist/jquery.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
-->
<script src="node_modules/tether/dist/js/tether.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="node_modules/animejs/lib/anime.min.js"></script>

</html>