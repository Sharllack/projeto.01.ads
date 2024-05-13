// JavaScript para detectar a mudança e executar uma ação
document.getElementById('toggle').addEventListener('change', function() {
    main = document.getElementById('main');
    topo = document.getElementById('topo');
    log = document.getElementById('topolog');
    cad = document.getElementById('topocad');
    usu = document.getElementById('usu');
    header = document.getElementById('header');
    if(this.checked) {
      console.log('Toggle ON');
      main.style.backgroundColor = "black";
      main.style.transition = '.5s';
      topo.style.backgroundColor = "black";
      topo.style.transition = '.5s';
      log.style.color = "white";
      cad.style.color = "white";
      usu.style.backgroundColor = "black";
      header.style.backgroundColor = "black";
    } else {
      console.log('Toggle OFF');
      main.style.backgroundColor = "";
      main.style.transition = '.5s';
      topo.style.backgroundColor = "";
      topo.style.transition = '.5s';
      log.style.color = "";
      cad.style.color = ""
      usu.style.backgroundColor = "rgb(212, 212, 212)";
      header.style.backgroundColor = "";
    }
  });

