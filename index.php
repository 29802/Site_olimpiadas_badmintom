<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Badmintom.com</title>
    <link rel="stylesheet" href="index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header1">
            <a href="#" class="logo">
                <img src="./Badmintom/Img.menu/image 2.png" alt="">
        </a>
        <a href="#" class="logo1">
            <img src="./Badmintom/Img.menu/image 1.png" alt="">
        </a>
    </div>
</header>
<!-- ------------------------------------------------------------- -->

<!-- Header 2 -->
<div class="header2">
    <ul class="navbar">
        <i class='bx bxs-user' style='color:#080808' ></i>
            <li><a href="index.html #img">Home</a></li>
            <li><a href="./salgados.html #salgados">Noticias</a></li>
            <img src="./Badmintom/Img.menu/Logo.png" alt="" height="350px" width="10px">
            <li><a href="./gatos.html #gato">Ranking</a></li>
            <li><a href="index.html #customers">Avaliações</a></li>
        </ul>
</div>

<section class="home" id="home">
</section>
<!-- ----------------------------------------------------- -->

<!-- Modalidades/esporte -->
<section class="about">
    <div class="text">
        <h2>
            Tudo sobre o esporte
        </h2>
        <p>
            O badminton é um esporte dinâmico e rápido em que os jogadores usam raquetes para acertar um volante <br> sobre uma rede, buscando marcar pontos ao fazer com que o adversário não consiga devolver o volante.
        </p>
    </div>
</section>

<!-- Esporte -->
<div class="esporte">
        <div class="mod_card1">
            <a href="#"></a> 

            <div class="mod_img">
                <img src="./Badmintom/Img.menu/image 19.png" alt="">
            </div>

            <div class="mod_info">
                <h3>História do Badmintom</h3>
            </div>

        </div>

        <div class="mod_card1">
            <a href="#"></a> 
            
            <div class="mod_img">
                <img src="./Badmintom/Img.menu/image 20.png" alt="">
            </div>

            <div class="mod_info">
                <h3>Objetivo e curiosidades</h3>
            </div>

        </div>

        <div class="mod_card1">
            <a href="#"></a> 

            <div class="mod_img">
                <img src="./Badmintom/Img.menu/image 21.png" alt="">
            </div>

            <div class="mod_info">
                <h3> Os benefícios do esporte</h3>
            </div>
            
        </div>
    </div>
        
    <div class="mod_title">
        <h1>Modalidades</h1>
    </div>

    <!-- Modalidades -->

    <div class="modalidades">
            <div class="card">
                <a href="#"></a>

                <div class="card_img">
                    <img src="./Badmintom/Img.menu/49f5ddb8959df6999118f09be13f9ff4-removebg-preview 1.png" alt="">
                </div>
                <div class="card_info">
                    <h3>BWF - masculino</h3>
                </div>

            </div>

            <div class="card2">
                <a href="#"></a>

                <div class="card_img2">
                    <img src="./Badmintom/Img.menu/1000_F_41496909_Ic4qikvWhZRhfV3ZTZD4J2vBIpcEvtM4-removebg-preview 1.png" alt="">
                </div>
                <div class="card_info2">
                    <h3>BWF - Duplas</h3>
                </div>
                
            </div>

            <div class="card3">
                <a href="#"></a>

                <div class="card_img3">
                    <img src="./Badmintom/Img.menu/1000_F_80940600_co5M4s6CBuftAIHAKztldBZ7DOZPJPim-removebg-preview 1.png" alt="">
                </div>
                <div class="card_info3">
                    <h3>BWF - Feminino</h3>
                </div>
                
            </div>
            
        </div>
<!-- ------------------------------------------------------------- -->
<!-- Rank -->
<div class="title_rank">
            <h1>Ranking</h1>
        </div>
        <br>
        <div class="rank">
                <ul class="navbar_rank">
                    <li><a href="index.html #img">BWF Masc. Simples</a></li>
                    <li><a href="./.html #salgados">Bwf Fem. Simples</a></li>
                    <li><a href="">BFW Masc. Duplas</a></li>
                    <li><a href=". #gato">BWF Fem. Duplas</a></li>
                    <li><a href="#customers">BWF Duplas Mistas</a></li>
                </ul>
                
            </div>
            
            <div class="img_rank">
                <a href=""><img src="./Badmintom/Img.menu/image (4).png" alt=""></a>
            </div>
<!-- --------------------------------------------------------------- -->
<!-- Espaço -->
<div class="text">
                <h2>
                    Características do espaço
                </h2>
            </div>
            <div class="medidas">
                <img src="./Badmintom/Img.menu/Captura_de_tela_2024-08-24_152700-removebg-preview 1 (1).png" alt="" width="40%">
                <img src="./Badmintom/Img.menu/image 23.png" alt="" width="40%">
            </div>
<!-- -------------------------------------------------------- -->
 <!--Noticias-->

 <div class="Combo" id="Combo">
    <h1>Noticias</h1>

    <div class="Combo_image_box">
        <div class="Combo_image">
            <img src="./Badmintom/Img.menu/image (1).png" height="350px">

            <h3>Combo Crunchy Onion Rings</h3>
            <p>
                Anéis de cebola crocantes e saborosos, hambúrguer clássico de carne bovina, queijo, alface, tomate e batatas fritas.
            </p>
            <a href="#Pedido" class="Combo_btn">Pedir agora</a>
        </div>


        <div class="Combo_image">
            <img src="./Badmintom/Img.menu/image (3).png" height="350px">

            <h3>Combo Mineiro Burguer</h3>
            <p>
                Um hambúrguer suculento de carne bovina grelhada, coberto com queijo cheddar derretido, acompanhado de batatas fritas crocantes.
            </p>
            <a href="#Pedido" class="Combo_btn">Pedir agora</a>
        </div>

        <div class="Combo_image">
            <img src="img.ham/Captura de Tela (29).png" height="350px">

            <h3>Combo BBQ</h3>
            <p>
                Um hambúrguer com bacon crocante, queijo cheddar derretido, cebola frita, alface, tomate e maionese defumada, servido uma porção de fritas.
            </p>
            <a href="#Pedido" class="Combo_btn">Pedir agora</a>
        </div>

        <div class="Combo_image">
            <img src="img.ham/Captura de Tela (32).png" height="350px">

            <h3>Combo Simpão</h3>
            <p>
                Um hambúrguer de carne bovina grelhada, fatiaa de queijo cheddar derretido, alface crocante, tomate fresco, maionese e uma porção de fritas.
            </p>
            <a href="#Pedido" class="Combo_btn">Pedir agora</a>
        </div>
    </div>
</div>
<!-- ---------------------------------------------------------------- -->
<!-- Patrocinio -->



<div class="patrocinio">
    <img src="./Badmintom/Img.menu/image 8.png" alt="">
    <img src="./Badmintom/Img.menu/image 12.png" alt="">
    <img src="./Badmintom/Img.menu/image 9.png" alt="" class="img1">
    <img src="./Badmintom/Img.menu/image 11.png" alt="">
    <img src="./Badmintom/Img.menu/image 10.png" alt="">
    <img src="./Badmintom/Img.menu/image 13.png" alt="" class="img2">
</div>
</div>
<div class="container">
        <h1>Welcome!</h1>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
</body>
</html>