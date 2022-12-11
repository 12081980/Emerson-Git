<?Php
include('./Controller/Constantes.php')

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
 
   
    <script src="./js/modal.js" defer></script>
    <script src="./js/script.js" defer></script>

    <title><?= APP_NOME ?></title>
</head>

<body>
    <header>
        <div class="nav">
            <nav>
                <div id="logo"> A&L</div>
                <ul>

                    <li><a href="index.php">Home </a></li>
                    <!-- <li><a href="./View/quemsomos.php">Quem Somos</a></li> -->
                   
                    <li><a href="./views/cadastro.php">Cadastrar</a>
                    <li><a href="./views/login.php">Login</a></li>



                    </li>
                    <li><a href="#">Meus pedidos</a><span class="material-symbols-outlined">
                            shopping_cart
                        </span></li>


                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">

            <div class="bloco">
                <div class="menulateral">
                    <ul id="lateral">
                        <li><a href="./views/masculina.php">Moda Masculina<span class="material-symbols-outlined">
                                    arrow_right
                                </span></a></li><br>
                        <li><a href="#modafeminina">Moda Feminina<span class="material-symbols-outlined">
                                    arrow_right
                                </span></a></li><br>
                        <li><a href="#modainfantil"> Moda Infantil<span class="material-symbols-outlined">
                                    arrow_right
                                </span></a><br><br>

                            <ul>
                </div>
            </div>
            <!-- <div class="bloco"> -->
            <div class="carrossel">
                <div class="conteiner" id="img">
                    <img src="./img/crianca2.jpg" alt="">
                    <img src="./img/fashion.jpg" alt="">
                    <img src="./img/coisas.jpg" alt="">
                    <img src="./img/crianca.jpg" alt="">

                    <img src="./img/black.jpg" alt="">

                </div>

            </div>
        </div>

<footer>
   
</p>
</footer>



</body>

</html>