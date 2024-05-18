const topo = document.getElementById('topo');
const header = document.getElementById('header');
const log = document.querySelector('.topolog');
const cad = document.querySelector('.topocad');
const usu = document.querySelector('#usu');
const logado = document.getElementById('logado');
const toggle = document.querySelector('.toggle');

toggle.addEventListener('change', function() {  
    if (this.checked) {
        console.log('Toggle ON');
        topo.style.backgroundColor = "black";
        topo.style.transition = '.5s';
        header.style.backgroundColor = "black"
        header.style.transition = ".5s";
        log.style.color = "white";
        log.style.transition = '.5s';
        cad.style.color = "white";
        cad.style.transition = '.5s';
        usu.style.backgroundColor = "black";
        usu.style.transition = '.5s';
        logado.style.backgroundColor = "black";
        logado.style.transition = '.5s';

        localStorage.setItem('darkMode', 'on');

    } else {
        console.log('Toggle OFF');
        topo.style.backgroundColor = "";
        topo.style.transition = '.5s';
        header.style.backgroundColor = ""
        header.style.transition = ".5s";
        log.style.color = "";
        log.style.transition = '.5s';
        cad.style.color = "";
        cad.style.transition = '.5s';
        usu.style.backgroundColor = "";
        usu.style.transition = '.5s';
        logado.style.backgroundColor = "";
        logado.style.transition = '.5s';

        localStorage.setItem('darkMode', 'off');

  };
  });

  const darkModePreference = localStorage.getItem('darkMode');
  if (darkModePreference === 'on') {
    topo.style.backgroundColor = "black";
    topo.style.transition = '.5s';
    header.style.backgroundColor = "black"
    header.style.transition = ".5s";
    log.style.color = "white";
    log.style.transition = '.5s';
    cad.style.color = "white";
    cad.style.transition = '.5s';
    usu.style.backgroundColor = "black";
    usu.style.transition = '.5s';
    logado.style.backgroundColor = "black";
    logado.style.transition = '.5s';

    toggle.checked = true;

      
  } else {
    topo.style.backgroundColor = "";
    topo.style.transition = '.5s';
    header.style.backgroundColor = ""
    header.style.transition = ".5s";
    log.style.color = "";
    log.style.transition = '.5s';
    cad.style.color = "";
    cad.style.transition = '.5s';
    usu.style.backgroundColor = "";
    usu.style.transition = '.5s';
    logado.style.backgroundColor = "";
    logado.style.transition = '.5s';
  }
