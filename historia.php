<?php

if(!isset($_SESSION)) {
    session_start();
};


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo.historia/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="./estilo.historia/media.queries.css">
    <title>Nossa história</title>
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
                <ul id="usu">
                    <?php if(!isset($_SESSION['usuario'])):?>
                        <li><a href="./login.php" class="topolog">Login &#x1F464</a></li>
                        <li><a href="./cadastro.php" class="topocad"> Cadastre-se  &#x1F58A &#xFE0F</a></li>
                        <li><a href="#"><img src="./imagens/logo-facebook.jpg" alt="Facebook" class="logos"></a></li>
                        <li><a href="#"><img src="./imagens/logo-instagram.jpg" alt="Instagram" class="logos"></a></li>
                        <li><a href="#"><img src="./imagens/x_logo.png" alt="Twitter" class="logos"></a></li>
                        <li><a href="https://wa.me/5521990420932"><img src="./imagens/whats_logo.png" alt="Whatsapp" class="logos"></a></li>
                    <?php else: ?>
                        <p class="topolog">Olá, <?=$_SESSION['usuario']?>!</p>
                        <li><a href="#"><img src="./imagens/logo-facebook.jpg" alt="Facebook" class="logos"></a></li>
                        <li><a href="#"><img src="./imagens/logo-instagram.jpg" alt="Instagram" class="logos"></a></li>
                        <li><a href="#"><img src="./imagens/x_logo.png" alt="Twitter" class="logos"></a></li>
                        <li><a href="https://wa.me/5521990420932"><img src="./imagens/whats_logo.png" alt="Whatsapp" class="logos"></a></li>
                        <li><a href="./logout.php" class="topocad">Logout</a></li>
                        <li><a href="./logout.php"><span class="material-symbols-outlined">logout</span></a></li>
                    <?php endif; ?>
                    <li>
                        <label class="toggle-button">
                            <input type="checkbox" class="toggle">
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
                <a href="#" class = "dropname">Luvas</a>

                <div class="dropdown-menu">
                    <a href="./compra.php" id="p1" onclick="selecionarProduto('p1')">F8 - Under Armour</a>
                    <a href="./compra.php" id="p2" onclick="selecionarProduto('p2')">Battle Ultra-Sticky</a>
                </div>
            
            </li>
            <li class="dropdown">
                <a href="#" class = "dropname">Chuteiras</a>

                <div class="dropdown-menu">
                    <a href="./compra.php" id="p3" onclick="selecionarProduto('p3')">Under Armour Spotlight RM 2.0</a>
                    <a href="./compra.php" id="p4" onclick="selecionarProduto('p4')">Nike Alpha Pro 2 TD</a>
                </div>
            
            </li>
            <li class="dropdown">
                <a href="#" class = "dropname">Capacetes</a>

                <div class="dropdown-menu">
                    <a href="./compra.php" id="p5" onclick="selecionarProduto('p5')">Helmet Schutt F7</a>
                    <a href="./compra.php" id="p6" onclick="selecionarProduto('p6')">Helmet Riddell Speed Icon</a>
                </div>


            </li>
            <li class="dropdown">
                <a href="#" class = "dropname">Shoulder pad</a>

            <div class="dropdown-menu">
                <a href="./compra.php" id="p7" onclick="selecionarProduto('p7')">Surge Youth Riddell</a>
                <a href="./compra.php" id="p8" onclick="selecionarProduto('p8')">Gauntlet I Youth Champro</a>
                <a href="./compra.php" id="p9" onclick="selecionarProduto('p9')">Rival Varsity Riddell</a>
            </div>   
                    
            </li>
            <li class="dropdown">
                <a href="#" class = "dropname">Bolas</a>

            <div class="dropdown-menu">
                <a href="./compra.php" id="p10" onclick="selecionarProduto('p10')">NFL Super Grip Wilson</a>
                <a href="./compra.php" id="p11" onclick="selecionarProduto('p11')">NFL New England Patriots Team Logo Jr Wilson</a>
            </div>
            
            </li>

            <li class="dropdown">
                <a href="./historia.php" class = "dropname">Nossa história</a>

            </li>
        </ul>
    </menu>

<section class="texto">
    <h1 class="title">Nossa História</h1>
    
    <p class="conteudo">Bem-vindo à Sport America Brazil, a maior fan shop de esportes americanos no Brasil! Nossa história começa em 2024, quando decidimos empreender para colaborar com o crescimento desse esporte no país. Trabalhamos duro para criar um modelo de negócio sólido, buscamos fornecedores nos Estados Unidos e montamos um e-commerce, além de um pequeno showroom. Assim, começamos a atender todos os adeptos do futebol americano em todo o Brasil.</p>
    
    <p class="conteudo">O sucesso no futebol americano nos levou a um próximo passo: além de oferecer equipamentos para os praticantes do esporte, transformamos a Sport America em uma verdadeira “fan shop” para os amantes do esporte americano. Começamos a ofertar milhares de produtos licenciados da NFL, garantindo que nossos clientes tenham acesso apenas a itens autênticos e com vendas legais no país.</p>
    
    <p class="conteudo">Nossa missão vai além da venda de equipamentos. Queremos fortalecer o cenário do esporte no Brasil, apoiando mais de 50 equipes nacionais, patrocinando campeonatos e investindo não apenas no futebol americano masculino, mas também no feminino. Recebemos o apoio da NFL e o reconhecimento da liga como uma loja que trabalha exclusivamente com produtos oficiais.</p>
    
    <p class="conteudo">Em 2024, a Sport America Brazil deu um passo adiante. Expandimos nossas lojas físicas, oferecendo experiências incríveis para os aficionados por futebol americano. Agora, nossa marca é sinônimo de paixão, qualidade e exclusividade. De fã para fã, convidamos você a visitar uma de nossas lojas e mergulhar na história vibrante da Sport America Brazil. Junte-se à nossa comunidade e explore o universo dos esportes americanos conosco! 🏈
    </p>
</section>
<footer>Site criado por <strong>Larissa Menezes</strong> e <strong>Lucas Menezes</strong> para o Projeto de ADS.</footer>
    <script src="./JS.index/funcoes.js"></script>
    <script src="./JS.historia/darkmode.js"></script>
    <script src="./JS.historia/menu.burguer.js"></script>
    <script src="./JS.historia/compra.js"></script>
</body>
</html>