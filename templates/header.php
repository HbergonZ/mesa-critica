<?php

require_once("globals.php");
require_once("database.php");

?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesa Crítica</title>
    <link rel="show icon" href="<?= $BASE_URL ?>img/mesacritica.ico" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- FONTE CONCERT ONE -->
    <link href='https://fonts.googleapis.com/css?family=Concert One' rel='stylesheet'>

    <!-- FONTE LUCKIEST GUY -->
    <link href='https://fonts.googleapis.com/css?family=Luckiest Guy' rel='stylesheet'>


    <!-- CSS do Projeto -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>templates/css/styles.css">
</head>


<body>
    <!-- MENU DE NAVEGAÇÃO LATERAL -->
    <header>
        <div class="menu-icon">
            <i class="fa-solid fa-bars menu-icon"></i>
        </div>

        <div class="menu-icon-return">
            <i class="fa-solid fa-rotate-left"></i>
            <p class="menu-icon-return-text">Voltar</p>
        </div>

        <div class="sidebar" id="sidebar">
            <script src="utils/button.js"></script>

            <!-- Título + Logo -->
            <div class="header">
                <img src="img/fundo1.png" alt="" class="background-img">
                <img src="img/mesacritica.ico" alt="" class="logo">
                <h2 class=nav-title>Mesa Crítica</h2>
            </div>

            <!-- Caixa de Busca no Site -->
            <div class="input-group mb-3 search-menu">
                <input type="text" class="form-control" placeholder="Busque no Site">
                <button class="btn btn-success search-icon" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>

            <!-- Localização -->
            <div class="location">
                <i class="fa-solid fa-map-location"></i>
                <p class="location-text">Cidade - Estado</p>
            </div>

            <div class=buttons-nav>
                <div class=login>
                    <button type="button" class="btn btn-primary login-button">Fazer Login</button>
                </div>

                <div class=register>
                    <button type="button" class="btn btn-success register-button">Cadastrar</button>
                </div>
            </div>

            <!-- Itens de Navegação -->
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa-thumbs-up"></i>
                        Melhores Avaliados
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa-ranking-star"></i>
                        Melhores Ranks
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa-bell-concierge"></i>
                        Novos Restaurantes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa-circle-info"></i>
                        Sobre
                    </a>
                </li>
            </ul>
        </div>

        <!-- Título + Logo -->
        <div class="header-mobile-background"></div>
        <div class="header-mobile">
            <img src="img/mesacritica.ico" alt="" class="logo">
            <h2 class=nav-title>Mesa Crítica</h2>
        </div>



    </header>