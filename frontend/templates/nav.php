<?php
date_default_timezone_set('America/Sao_Paulo');
$hour = date('Y-m-d H:i:s');
$nav = "<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarTogglerDemo01' aria-controls='navbarTogglerDemo01' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarTogglerDemo01'>
            <a class='navbar-brand' href='home'><img src='img/logo.png'></img></a>
            <ul class='navbar-nav mr-auto mt-2 mt-lg-0'>
                <li class='nav-item'>
                    <a class='nav-link' href='home'><img src='img/icon-home.png' width='35' height='35'></img>Home <span class='sr-only'>(current)</span></a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='produtos'><img src='img/icon-ecommerce.png' width='35' height='35'></img>Loja</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='login'><img src='img/icon-login.png' width='35' height='35'></img>Login</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='cadastro'><img src='img/icon-siginup.png' width='35' height='35'></img>Cadastre-se</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='publicar'><img src='img/icon-siginup.png' width='35' height='35'></img>Publicar Produto</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' onclick='modalCart()' href='javascript:void(0)'><img src='img/icon-Cart.png' width='35' height='35'></img>Carrinho (<span id='contcart'> 0 </span>)</a>
                </li>
            </ul>
        </div>
    </nav>
    <input type='hidden' id='horaAtual' value='{$hour}'>";

echo $nav;