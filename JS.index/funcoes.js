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

window.addEventListener('scroll', function(){
    let cab = document.getElementById('header')
    
    cab.classList.toggle('rolagem', window.scrollY > 0) /* Toggle ex.: Se uma coisa existe, retira, senão, põe. */
});

window.onload = function() {
    const username = localStorage.getItem('usuario'); // Recupera o nome do usuário do armazenamento local
    const login = localStorage.getItem('login');
    if(username == login) {
      document.getElementById('user').textContent = 'Olá, ' + username + "!";
      document.getElementById('logout-button').style.display = 'block';
      document.getElementById('usu').style.display = 'none'; // Esconde as opções de login e cadastro
      document.getElementById('toggle-button').style.display = 'block';
      document.getElementById('logout').style.display = 'block';
      
  };
}

  function logout() {
    localStorage.removeItem('usuario'); // Remove o nome do usuário do armazenamento local
    document.getElementById('user').textContent = ''; // Limpa o texto de informação do usuário
    document.getElementById('logout-button').style.display = 'none'; // Esconde o botão de logout
    document.getElementById('usu').style.display = 'block'; // Mostra as opções de login e cadastro após o logout
    document.getElementById('toggle-button').style.display = 'none';
    document.getElementById('logout').style.display = 'none';
    alert('Você foi deslogado.'); // Opcional: Mostra um alerta informando que o logout foi bem-sucedido

    window.location.href = "./index.html";
  }

let hamburguer = document.querySelector(".hamburguer");
let menu = document.getElementById("topo");

hamburguer.addEventListener("click", () => menu.classList.toggle("active"));