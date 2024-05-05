
// Função para buscar os detalhes do produto com base no ID
function buscarDetalhesProduto(idProduto) {
    var detalhesProdutos = {
      'p1': {
        nome: 'F8 - Under Armour',
        preco: 'R$289,90',
        descricao: 'Luva F8 da Under Armour é um produto projetado para oferecer um bom grip e durabilidade durante a prática de esportes, como futebol americano. Alguns recursos destacados dessa luva são:<br>Tecnologia GlueGrip: A tecnologia GlueGrip proporciona um grip duradouro, permitindo que você faça grandes recepções e tenha um bom controle da bola ao longo do jogo.<br>Durabilidade: As luvas da Under Armour são feitas para durar a temporada inteira, proporcionando um desempenho consistente ao longo do tempo.<br>Leveza e conforto: A luva é feita com materiais leves e flexíveis, proporcionando um encaixe confortável na mão. Além disso, o material utilizado é de secagem rápida, permitindo que você se mantenha confortável durante a prática esportiva.',
        imagemPrincipal: './imagens/imagensprojeto/luva.webp',
        miniaturas: ['./imagens/imagensprojeto/luva.webp', './imagens/imagensprojeto/luvaprox.webp']
      },
      'p2': {
        nome: 'Battle Ultra-Sticky',
        preco: 'R$299.99',
        descricao: 'A Luva Battle Ultra-Sticky foi especialmente projetada para jogadores que treinam e jogam de forma intensa, sempre buscando melhorar seu desempenho. Algumas características importantes dessa luva são:<br>Palma com tecnologia UltraTack: A palma da luva apresenta a tecnologia UltraTack, que proporciona um grip excepcional e duradouro. Isso permite que você tenha um controle superior da bola durante as jogadas.<br>Material PerfectFit: A luva é feita com o material PerfectFit, que é leve, respirável e se adapta ao formato da sua mão. Isso proporciona um ajuste confortável e garante maior desempenho durante o jogo.<br>Fechamento anatômico: O fechamento no punho da luva possui um formato que permite liberdade de movimento, mantendo ao mesmo tempo um ajuste anatômico. Isso significa que a luva se encaixa bem na mão, oferecendo conforto e estabilidade.<br>Essas características são parte do DNA do produto e visam proporcionar uma experiência de uso superior para os jogadores.',
        imagemPrincipal: './imagens/imagensprojeto/Luva Battle.webp',
        miniaturas: ['./imagens/imagensprojeto/Luva Battle.webp', './imagens/imagensprojeto/Luva Battle.webp']
      },
      'p3': {
        nome: 'Under Armour Spotlight RM 2.0',
        preco: 'R$499,90',
        descricao: 'Chuteira Under Armour Spotlight RM 2.0 é a escolha perfeita para jogadores exigentes. Seu cabedal em material sintético de qualidade garante resistência e durabilidade, suportando os movimentos intensos do jogo.<br>Além disso, a chuteira proporciona um ajuste confortável e preciso, permitindo que você tenha total controle da bola e do seu jogo. Com ela, você poderá se movimentar de forma ágil e precisa, driblando os adversários com facilidade.<br>A sola com tecnologia RM (Rubber Molded) oferece excelente tração em diferentes superfícies, garantindo que você mantenha a estabilidade e o equilíbrio em seus movimentos. Assim, você estará preparado para acelerar, parar e mudar de direção rapidamente, deixando seus oponentes para trás.<br>Além de sua performance excepcional, a Chuteira Under Armour Spotlight RM 2.0 possui um design moderno e atraente, com detalhes que adicionam estilo ao seu jogo. Disponível em diferentes cores, você pode escolher aquela que melhor reflete sua personalidade e estilo no campo.<br>Com a Chuteira Under Armour Spotlight RM 2.0, você estará pronto para mostrar todo o seu talento e habilidade no futebol. Seja em gramados naturais ou sintéticos, esta chuteira resistente e confortável será sua aliada para dominar o jogo.<br>Eleve seu desempenho e jogue como os melhores com a Chuteira Under Armour Spotlight RM 2.0. Seja o destaque em campo e deixe sua marca em cada partida com esta chuteira de alto desempenho da Under Armour.',
        imagemPrincipal: './imagens/imagensprojeto/chuteira 45.webp',
        miniaturas: ['./imagens/imagensprojeto/chuteira 45.webp', './imagens/imagensprojeto/chuteira lado.webp']
      },
      'p4': {
        nome: 'Nike Alpha Pro 2 TD',
        preco: 'R$349,90',
        descricao: 'Eleve seu jogo para um novo patamar com a Chuteira Nike Alpha Pro 2 TD, uma escolha que combina tecnologia avançada, design arrojado e conforto excepcional para os jogadores que buscam alto desempenho no campo.<br>Projetada para oferecer agilidade e tração superiores, a Chuteira Nike Alpha Pro 2 TD possui solado com travas estrategicamente posicionadas para proporcionar movimentos rápidos e cortes precisos.<br>O cabedal da chuteira é construído com materiais leves e respiráveis, oferecendo conforto durante todo o jogo e permitindo uma sensação de ajuste personalizado.<br>A tecnologia Nike incorporada na construção da chuteira proporciona estabilidade extra, garantindo um apoio firme durante sprints e mudanças de direção.<br>Com um design moderno e a marca icônica da Nike, a Alpha Pro 2 TD não apenas entrega desempenho, mas também destaca seu estilo no campo.<br>Ideal para diversas posições no futebol americano, esta chuteira é adaptável a diferentes condições de jogo e tipos de campo.<br>Conhecida por sua durabilidade, a marca Nike assegura que a Alpha Pro 2 TD mantenha sua integridade mesmo após várias partidas intensas.<br>A Chuteira Nike Alpha Pro 2 TD é a escolha certa para jogadores que buscam uma combinação de desempenho, conforto e estilo. Ao investir em uma chuteira Nike, você está escolhendo uma marca líder que está comprometida em oferecer produtos de alta qualidade para os atletas mais exigentes.',
        imagemPrincipal: './imagens/imagensprojeto/chuteira1 lado.webp',
        miniaturas: ['./imagens/imagensprojeto/chuteira1 lado.webp', './imagens/imagensprojeto/chuteira1 baixo.webp']
      },
      'p5': {
        nome: 'Helmet Schutt F7 Preto Recondicionado e Recertificado',
        preco: 'R$2.499,90',
        descricao: 'O processo de recondicionamento e recertificação inclui:<br>Remoção de adesivos, facemask, partes internas, peças e parafusos, deixando apenas o casco.<br>Cascos pintados são lixados para remover a tinta antiga.<br>Limpeza e higienização de todas as partes.<br>Aplicação de uma nova camada de pintura no casco.<br>Reinstalação das partes interiores e substituição de peças que não funcionam adequadamente.<br>Instalação da facemask e substituição das peças de fixação, se necessário.<br>Realização de testes de certificação e aplicação do adesivo de “warning” e do selo de certificação.<br>Além disso, o Helmet Schutt F7 é conhecido por sua tecnologia avançada, como o Sistema de Movimento Tridimensional da Schutt (3DM), que inclui placas Tektonic estrategicamente localizadas sobre uma camada de amortecimento em TPU, oferecendo proteção extra e um nível de segurança jamais visto antes no futebol americano.',
        imagemPrincipal: './imagens/imagensprojeto/capacete1 frente.webp',
        miniaturas: ['./imagens/imagensprojeto/capacete1 frente.webp', './imagens/imagensprojeto/capacete1 atrás.webp']
      },
      'p6': {
        nome: 'Helmet Riddell Speed Icon Preto Recondicionado e Recertificado',
        preco: 'R$1.799,90',
        descricao: 'As imagens do produtos recondicionados e recertificados são ilustrativas*<br>O Helmet recondicionado e recertificado pela fabricante pode conter variação nas cores de Facemask e modelos de Chinstrap.<br>Para que enviemos a você o helmet com a Facemask correta para sua posição, por favor escreva nas observações do pedido. A facemask para sua posição será enviada mediante disponibilidade de estoque, caso contrátio será enviada a Facemask mais próxima que se adapta a sua posição.',
        imagemPrincipal: './imagens/imagensprojeto/capacete frente.webp',
        miniaturas: ['./imagens/imagensprojeto/capacete frente.webp', './imagens/imagensprojeto/capacete atrás.webp']
      },
      'p7': {
        nome: 'Shoulder Pad Surge Youth Riddell',
        preco: 'R$999,90',
        descricao: 'O Shoulder Pad Surge Youth Riddell foi projetada para fornecer aos jovens jogadores de futebol americano proteção, conforto e flexibilidade ideais no campo. Desenvolvida pela Riddell, uma marca confiável em equipamentos de futebol americano, esses shoulders oferecem recursos avançados para aprimorar a experiência de jogo para os jovens atletas.<br>Os Shoulders Surge são equipados com tecnologia avançada de proteção para absorver impactos e reduzir o risco de lesões durante o jogo. Os Shoulders são fabricados com materiais leves que oferecem excelente proteção sem comprometer a mobilidade. Isso permite que os jovens jogadores se movam livremente no campo.<br>Os Shoulders apresentam fitas ajustáveis que permitem um ajuste personalizado, garantindo uma sensação segura e confortável para cada jogador. A Riddell é conhecida por seus equipamentos de futebol duráveis, e os shoulders Surge não são exceção. Construídas para resistir às exigências do jogo, são duráveis e de longa duração.<br>Garanta a segurança e o desempenho do seu jovem atleta com o Shoulder Pad Surge Youth Riddell. Invista em equipamentos de qualidade que permitam que eles joguem da melhor forma, mantendo-se protegidos no campo.',
        imagemPrincipal: './imagens/imagensprojeto/shoulder pad frente.webp',
        miniaturas: ['./imagens/imagensprojeto/shoulder pad frente.webp', './imagens/imagensprojeto/shoulder pad atrás.webp']
      },
      'p8': {
        nome: 'Shoulder Pad Gauntlet I Youth Champro',
        preco: 'R$699,90',
        descricao: 'Shoulder Pad Gauntlet I Youth da Champro é especialmente projetada para oferecer proteção e conforto excepcionais aos jovens jogadores de futebol americano. Parte da renomada linha Gauntlet da Champro, este shoulder atende às necessidades específicas dos atletas em desenvolvimento, proporcionando um equilíbrio ideal entre segurança e mobilidade.<br>A Gauntlet I Youth oferece uma proteção essencial contra impactos, visando manter os jovens jogadores seguros durante o jogo. Fabricada com materiais de alta qualidade, esse shoulder é resistente e durável, capaz de suportar as demandas do futebol americano juvenil.<br>Com um design específico para jovens, o shoulder segue a anatomia do corpo em crescimento, proporcionando um ajuste confortável e seguro. As fitas ajustáveis permitem que os jovens atletas personalizem o ajuste do shoulder, garantindo um encaixe perfeito para suas necessidades individuais.<br>Prepare os jovens atletas para o campo com a confiança de estarem protegidos. Adquira o Shoulder Gauntlet I Youth da Champro agora para uma experiência completa e segura no futebol americano juvenil.',
        imagemPrincipal: './imagens/imagensprojeto/shoulder pad1 frente.webp',
        miniaturas: ['./imagens/imagensprojeto/shoulder pad1 frente.webp', './imagens/imagensprojeto/shoulder pad1 atrás.webp']
      },
      'p9': {
        nome: 'Shoulder Pad Rival Varsity Riddell',
        preco: 'R$1.299,90',
        descricao: 'O Shoulder Pad Rival Varsity Riddell é um equipamento de proteção projetado para jogadores de futebol americano. Aqui estão alguns detalhes sobre o produto:<br>Design: Possui um design plano, conhecido como Flat Pad Design, que se posiciona baixo nos ombros do jogador, minimizando a interferência com a amplitude de movimento do capacete.<br>Arquitetura: Equipado com arcos corrugados e epaulettes corrugados, que são características que proporcionam maior durabilidade e proteção.<br>Posições Recomendadas: É um equipamento versátil, recomendado para todas as posições, sendo classificado como All-Purpose.<br>Ajustes: Conta com corpos removíveis e ajustáveis, permitindo um ajuste personalizado para o conforto e segurança do atleta.<br>Capas: As capas são simplificadas, conhecidas como Streamline Caps, para uma proteção eficaz sem adicionar volume desnecessário.<br>Preço: Em torno de $124.99, variando conforme o tamanho e o fornecedor.<br>O Shoulder Pad Rival Varsity é fabricado pela Riddell, uma empresa líder no mercado de equipamentos de proteção para futebol americano, conhecida por sua qualidade e inovação. Este modelo em particular é elogiado por combinar algumas das características dos equipamentos de nível superior, mas com um preço mais acessível3.',
        imagemPrincipal: './imagens/imagensprojeto/ridellv-frente.webp',
        miniaturas: ['./imagens/imagensprojeto/ridellv-frente.webp', './imagens/imagensprojeto/ridellv-atrás.webp']
      },
      'p10': {
        nome: 'NFL Super Grip Wilson',
        preco: 'R$239,90',
        descricao: 'A bola de futebol americano NFL Super Grip Wilson é uma escolha excepcional para jogadores profissionais e entusiastas apaixonados pelo esporte. Ela é fabricada com microfibra de PU premium, proporcionando uma aderência superior e uma sensação agradável durante o jogo.<br>A construção de alta qualidade da bola inclui um forro multicamadas, que aumenta a durabilidade, mantém a forma da bola e garante consistência em suas características de jogo. Além disso, o laço de controle preciso patenteado (ACL) contribui para a estabilidade da forma da bola, permitindo um manuseio preciso e confiável.<br>Com um design tradicional e costura feita à máquina, a bola NFL Super Grip Wilson possui os pesos e medidas oficiais, atendendo aos padrões estabelecidos para o futebol americano profissional. Com essa bola, você poderá desfrutar de um jogo autêntico e obter a melhor experiência possível ao jogar futebol americano.',
        imagemPrincipal: './imagens/imagensprojeto/bola frente.webp',
        miniaturas: ['./imagens/imagensprojeto/bola frente.webp', './imagens/imagensprojeto/bola lado.webp']
      },
      'p11': {
        nome: 'NFL New England Patriots Team Logo Jr Wilson',
        preco: 'R$119,90',
        descricao: 'A Bola de Futebol Americano NFL New England Patriots Team Logo Jr da Wilson é o equipamento esportivo essencial para os jovens fãs dos Patriots e aspirantes a jogadores de futebol americano. Esta bola de futebol americano oficial da NFL apresenta o logotipo da equipe e é projetada para fornecer horas de diversão ativa.<br>Esta bola de futebol americano apresenta o logotipo oficial e as cores dos New England Patriots, permitindo que os jovens fãs mostrem seu apoio à equipe com orgulho.<br>A bola é do tamanho perfeito para jogadores jovens, facilitando o aprendizado e a diversão para os mais novos entusiastas do esporte.<br>Fabricada pela Wilson, uma marca de renome no mundo dos esportes, esta bola é construída com materiais de alta qualidade para garantir durabilidade e desempenho confiável.<br>Uma ótima opção de presente para crianças que adoram os Patriots e o futebol americano.<br>A Bola de Futebol Americano NFL New England Patriots Team Logo Jr da Wilson é a escolha perfeita para inspirar a próxima geração de fãs dos Patriots e jogadores de futebol americano. É uma introdução emocionante ao esporte e uma maneira divertida de compartilhar sua paixão pelos New England Patriots com os mais jovens.',
        imagemPrincipal: './imagens/imagensprojeto/bola patriots frente.webp',
        miniaturas: ['./imagens/imagensprojeto/bola patriots frente.webp', './imagens/imagensprojeto/bola patriots atrás.webp']
      }
      // Adicione mais produtos conforme necessário
    };
    return detalhesProdutos[idProduto];
  }
  
  window.onload = function() {
      // Recuperar o ID do produto do localStorage
      var idProduto = localStorage.getItem('produtoSelecionado');
  
      // Buscar os detalhes do produto usando o ID
      var produto = buscarDetalhesProduto(idProduto);
  
    // Construir a tela de compra com os detalhes do produto
    var container = document.getElementById('produtoContainer');
    container.innerHTML = `
      <div class="product-images">
        <img src="${produto.imagemPrincipal}" alt="${produto.nome}" class="main-image" id="mainImage">
        ${produto.miniaturas.map(miniatura => `<img src="${miniatura}" alt="Miniatura" class="thumbnail" onclick="mudarImagemPrincipal(this)">`).join('')}
      </div>
      <div class="product-info">
        <h1>${produto.nome}</h1>
        <p class="price">${produto.preco}</p>
        <p class="parc">Em até 4x sem juros!</p>
        <button class="buy-button" onclick="comprarProduto()">Comprar</button>
        <button onclick="toggleDescricao()" id="desc">Descrição</button>
        <div id="descricaoProduto" class="hidden">
              <p>${produto.descricao}</p>
            </div>
      </div>
    `;
    var username = localStorage.getItem('usuario'); // Recupera o nome do usuário do armazenamento local
    if(username) {
      document.getElementById('user').textContent = 'Olá, ' + username + "!";
      document.getElementById('logout-button').style.display = 'block';
      document.getElementById('usu').style.display = 'none'; // Esconde as opções de login e cadastro
      
  };
  };
  
  function toggleDescricao() {
    var descricao = document.getElementById('descricaoProduto');
    if (descricao.classList.contains('hidden')) {
      descricao.classList.remove('hidden');
    } else {
      descricao.classList.add('hidden');
    }
  }
  
  // Adicione as funções mudarImagemPrincipal e comprarProduto aqui
  function mudarImagemPrincipal(miniatura) {
    var mainImage = document.getElementById('mainImage');
    mainImage.src = miniatura.src;
  }
  
  function comprarProduto() {
    alert("Produto adicionado ao carrinho!");
  }

  function mudouTamanho() {
    if (window.innerWidth >= 1349) {
        pe.style.display = 'block'
    } else {
        pe.style.display = 'none'
    }
}
function clickMenu() {
    if (pe.style.display == 'block') {
        pe.style.display = 'none'
    } else {
        pe.style.display = 'block'
    }
}

  function logout() {
    localStorage.removeItem('usuario'); // Remove o nome do usuário do armazenamento local
    document.getElementById('user').textContent = ''; // Limpa o texto de informação do usuário
    document.getElementById('logout-button').style.display = 'none'; // Esconde o botão de logout
    document.getElementById('usu').style.display = 'block'; // Mostra as opções de login e cadastro após o logout
    
    alert('Você foi deslogado.'); // Opcional: Mostra um alerta informando que o logout foi bem-sucedido

    window.location.href = "./index.html";
  }

let hamburguer = document.querySelector(".hamburguer");
let menu = document.getElementById("topo");

hamburguer.addEventListener("click", () => menu.classList.toggle("active"));