<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./imagens/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./estilo.principal/styles.css">
    <link rel="stylesheet" href="./estilo.principal/media.queries.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Projeto 01 ADS </title>
</head>
<body onresize="mudouTamanho()">
    <header id="header">
        <menu id="topo">
            <h1>
                <div id="title">
                    <a href="./index.php"><img src="./imagens/logolm1.png" alt="logo L e M" id="img1"></a>
                    <a href="./index.php"><img src="./imagens/logonfl.png" alt="logo nfl" id="img2"></a>
                </div>
                <input type="search" name="pes" id="idpes" placeholder="O que você está buscando?">
            </h1>
            <button class="hamburguer"></button>
            <section id="logado">
                <div id="user"></div>
                <ul id="usu">
                    <li><a href="./login.php" id="topolog">Login &#x1F464</a></li>
                    <li><a href="./cadastro.php" id="topocad"> Cadastre-se  &#x1F58A &#xFE0F</a></li>
                    <li><a href="#"><img src="./imagens/logo-facebook.jpg" alt="Facebook" class="logos"></a></li>
                    <li><a href="#"><img src="./imagens/logo-instagram.jpg" alt="Instagram" class="logos"></a></li>
                    <li><a href="#"><img src="./imagens/x_logo.png" alt="Twitter" class="logos"></a></li>
                    <li><a href="#"><img src="./imagens/whats_logo.png" alt="Whatsapp" class="logos"></a></li>
                </ul>
                <ul id="logout">
                    <li>
                        <button id="logout-button" onclick="logout()">Logout <span class="material-symbols-outlined">
                            logout
                            </span></button>
                    </li>
                    <li>
                        <label id="toggle-button">
                            <input type="checkbox" id="toggle">
                            <span class="slider1 round"></span>
                        </label>
                    </li>
                </ul>
            </section>
        </menu>
        <span id="burguer" class="material-symbols-outlined" onclick="clickMenu()">Menu</span>
    </header>
    <menu id="pe">
        <ul>
            <li class="dropdown">
                <a href="#">Luvas</a>

                <div class="dropdown-menu">
                    <a href="./compra.html" id="p1" onclick="selecionarProduto('p1')">F8 - Under Armour</a>
                    <a href="./compra.html" id="p2" onclick="selecionarProduto('p2')">Battle Ultra-Sticky</a>
                </div>
            
            </li>
            <li class="dropdown">
                <a href="#">Chuteiras</a>

                <div class="dropdown-menu">
                    <a href="./compra.html" id="p3" onclick="selecionarProduto('p3')">Under Armour Spotlight RM 2.0</a>
                    <a href="./compra.html" id="p4" onclick="selecionarProduto('p4')">Nike Alpha Pro 2 TD</a>
                </div>
            
            </li>
            <li class="dropdown">
                <a href="#">Capacetes</a>

                <div class="dropdown-menu">
                    <a href="./compra.html" id="p5" onclick="selecionarProduto('p5')">Helmet Schutt F7</a>
                    <a href="./compra.html" id="p6" onclick="selecionarProduto('p6')">Helmet Riddell Speed Icon</a>
                </div>


            </li>
            <li class="dropdown">
                <a href="#">Shoulder pad</a>

            <div class="dropdown-menu">
                <a href="./compra.html" id="p7" onclick="selecionarProduto('p7')">Surge Youth Riddell</a>
                <a href="./compra.html" id="p8" onclick="selecionarProduto('p8')">Gauntlet I Youth Champro</a>
                <a href="./compra.html" id="p9" onclick="selecionarProduto('p9')">Rival Varsity Riddell</a>
            </div>   
                    
            </li>
            <li class="dropdown">
                <a href="#">Bolas</a>

            <div class="dropdown-menu">
                <a href="./compra.html" id="p10" onclick="selecionarProduto('p10')">NFL Super Grip Wilson</a>
                <a href="./compra.html" id="p11" onclick="selecionarProduto('p11')">NFL New England Patriots Team Logo Jr Wilson</a>
            </div>
            
            </li>

            <li class="dropdown">
                <a href="#">Nossa história</a>

            </li>
        </ul>
    </menu>
        <main id="main">
            <div class="slider">

                <div class="slides">
                    <!--Radio Buttons-->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <!--Radio Buttons-->
        
                    <!--Slides img-->
                    <div class="slide first">
                        <img src="./imagens/ridell-frente.jpg">
                    </div>
                    <div class="slide">
                        <img src="./imagens/champro-frente.png" alt="img2">
                    </div>
                    <div class="slide">
                        <img src="./imagens/ridellv-frente.jpg" alt="img3">
                    </div>
                    <div class="slide">
                        <img src="../imagens/imagensprojeto/shoulder pad1 atrás.webp" alt="img4">
                    </div>
                    <!--Slides img-->
        
                    <!--Navigation auto-->
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                    </div>
                    <!--Navigation auto-->
        
                </div>
        
                <div class="manual-navigation">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                </div>
            </div>
            <section class="prod">
                <div class="prod-item">
                    <a href="./compra.html" onclick="selecionarProduto('p6')" id="p6"><img src="./imagens/imagensprojeto/capacete frente.webp" alt="capacete"></a>
                    <h2 id="pro6">R$1.799,90</h2>
                    <hr class="hr1">
                    <p><a href="./compra.html" onclick="selecionarProduto('p6')" id="p6">Helmet Riddell Speed Icon Preto Recondicionado e Recertificado</a></p>
                    <hr class="hr2">
                    <a href="./compra.html" onclick="selecionarProduto('p6')" id="p6" class="icons" >
                        <span class="material-symbols-outlined">
                        add_shopping_cart info
                        </span>
                    </a>
                </div>
                <div class="prod-item">
                    <a href="./compra.html" onclick="selecionarProduto('p5')" id="p5"><img src="./imagens/imagensprojeto/capacete1 frente.webp" alt="capacete"></a>
                    <h2 id="pro5">R$2.499,90</h2>
                    <hr class="hr1">
                    <p><a href="./compra.html" onclick="selecionarProduto('p5')" id="p5">Helmet Schutt F7 Preto Recondicionado e Recertificado</a></p>
                    <hr class="hr2">
                    <a href="./compra.html" onclick="selecionarProduto('p5')" id="p5" class="icons" >
                        <span class="material-symbols-outlined">
                        add_shopping_cart info
                        </span>
                    </a>
                </div>
                <div class="prod-item">
                    <a href="./compra.html" onclick="selecionarProduto('p10')" id="p10"><img src="./imagens/imagensprojeto/bola frente.webp" alt="capacete"></a>
                    <h2 id="pro10">R$239,90</h2>
                    <hr class="hr1">
                    <p><a href="./compra.html" onclick="selecionarProduto('p10')" id="p10">Bola de Futebol Americano NFL Super Grip Wilson</a></p>
                    <hr class="hr2">
                    <a href="./compra.html" onclick="selecionarProduto('p10')" id="p10" class="icons" >
                        <span class="material-symbols-outlined">
                        add_shopping_cart info
                        </span>
                    </a>
                </div>
                <div class="prod-item">
                    <a href="./compra.html" onclick="selecionarProduto('p1')" id="p1"><img src="./imagens/imagensprojeto/luva.webp" alt="capacete"></a>
                    <h2 id="pro1">R$289,90</h2>
                    <hr class="hr1">
                    <p><a href="./compra.html" onclick="selecionarProduto('p1')" id="p1">Luva F8 - Under Armour</a></p>
                    <hr class="hr2">
                    <a href="./compra.html" onclick="selecionarProduto('p1')" id="p1" class="icons">
                        <span class="material-symbols-outlined">
                        add_shopping_cart info
                        </span>
                    </a>
                </div>
                <div class="prod-item">
                    <a href="./compra.html" onclick="selecionarProduto('p7')" id="p7"><img src="./imagens/imagensprojeto/shoulder pad frente.webp" alt="capacete"></a>
                    <h2 id="pro7">R$999,90</h2>
                    <hr class="hr1">
                    <p><a href="./compra.html" onclick="selecionarProduto('p7')" id="p7">Shoulder Pad Surge Youth Riddell</a></p>
                    <hr class="hr2">
                    <a href="./compra.html" onclick="selecionarProduto('p7')" id="p7" class="icons">
                        <span class="material-symbols-outlined">
                        add_shopping_cart info
                        </span>
                    </a>
                </div>
                <div class="prod-item">
                    <a href="./compra.html" onclick="selecionarProduto('p3')" id="p3"><img src="./imagens/imagensprojeto/chuteira 45.webp" alt="capacete"></a>
                    <h2 id="pro3">R$499,90</h2>
                    <hr class="hr1">
                    <p><a href="./compra.html" onclick="selecionarProduto('p3')" id="p3">Chuteira Under Armour Spotlight RM 2.0</a></p>
                    <hr class="hr2">
                    <a href="./compra.html " onclick="selecionarProduto('p3')" id="p3" class="icons" >
                        <span class="material-symbols-outlined">
                        add_shopping_cart info
                        </span>
                    </a>
                </div>
                <div class="prod-item">
                    <a href="./compra.html" onclick="selecionarProduto('p2')" id="p2" id="p2"><img src="./imagens/imagensprojeto/Luva Battle.webp" alt="Luva Battle"></a>
                    <h2 id="pro2">R$299,90</h2>
                    <hr class="hr1">
                    <p><a href="./compra.html" onclick="selecionarProduto('p2')" id="p2" id="p2">Battle Ultra-Sticky</a></p>
                    <hr class="hr2">
                    <a href="./compra.html" onclick="selecionarProduto('p2')" id="p2" id="p2" class="icons">
                        <span class="material-symbols-outlined">
                        add_shopping_cart info
                        </span>
                    </a>
                </div>
                <div class="prod-item">
                    <a href="./compra.html" onclick="selecionarProduto('p4')" id="p4"><img src="./imagens/imagensprojeto/chuteira1 lado.webp" alt="Luva Battle"></a>
                    <h2 id="pro4">R$349,90</h2>
                    <hr class="hr1">
                    <p><a href="./compra.html" onclick="selecionarProduto('p4')" id="p4">Nike Alpha Pro 2 TD</a></p>
                    <hr class="hr2">
                    <a href="./compra.html" onclick="selecionarProduto('p4')" id="p4" class="icons" >
                        <span class="material-symbols-outlined">
                        add_shopping_cart info
                        </span>
                    </a>
                </div>
                <div class="prod-item">
                    <a href="./compra.html" onclick="selecionarProduto('p9')" id="p9"><img src="./imagens/imagensprojeto/ridellv-frente.webp" alt="Luva Battle"></a>
                    <h2 id="pro9">R$1.299,90</h2>
                    <hr class="hr1">
                    <p><a href="./compra.html" onclick="selecionarProduto('p9')" id="p9">Rival Varsity Riddell</a></p>
                    <hr class="hr2">
                    <a href="./compra.html" onclick="selecionarProduto('p9')" id="p9" class="icons" >
                        <span class="material-symbols-outlined">
                        add_shopping_cart info
                        </span>
                    </a>
                </div>
                <div class="prod-item">
                    <a href="./compra.html" onclick="selecionarProduto('p11')" id="p11"><img src="./imagens/imagensprojeto/bola patriots frente.webp" alt="Luva Battle"></a>
                    <h2 id="pro11">R$119,90</h2>
                    <hr class="hr1">
                    <p><a href="./compra.html" onclick="selecionarProduto('p11')" id="p11">NFL New England Patriots Team Logo Jr Wilson</a></p>
                    <hr class="hr2">
                    <a href="./compra.html" onclick="selecionarProduto('p11')" id="p11" class="icons">
                        <span class="material-symbols-outlined">
                        add_shopping_cart info
                        </span>
                    </a>
                </div>
            </section>
        </main>
        <footer>Site criado por <strong>Larissa Menezes</strong> e <strong>Lucas Menezes</strong> para o Projeto de ADS.</footer>
    <script src="./JS.index/funcoes.js"></script>
    <script src="./JS.index/script.js"></script>
    <script src="./JS.index/compra.js"></script>
    <script src="./JS.index/darkmode.js"></script>
</body>
</html>