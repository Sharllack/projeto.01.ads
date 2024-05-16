document.querySelector('.toggle').addEventListener('change', function() {
  var main = document.getElementById('main');
  var topo = document.getElementById('topo');
  var log = document.getElementById('topolog');
  var cad = document.getElementById('topocad');
  var usu = document.getElementById('usu');
  var header = document.getElementById('header');
  var user = document.getElementById('user');
  var logado = document.querySelector('#logado'); 
  var logbutton = document.querySelector('#logoutbtn');
  var icon = document.querySelector('.material-symbols-outlined');
  var username = document.querySelector('#usunome'); 

  if (this.checked) {
      console.log('Toggle ON');
      main.style.backgroundColor = "black";
      main.style.transition = '.5s';
      topo.style.backgroundColor = "black";
      topo.style.transition = '.5s';
      log.style.color = "white";
      log.style.transition = '.5s';
      cad.style.color = "white";
      cad.style.transition = '.5s';
      usu.style.backgroundColor = "black";
      usu.style.transition = '.5s';
      header.style.backgroundColor = "black";
      header.style.transition = '.5s';
      user.style.color = "white";
      user.style.transition = '.5s';
      // rest of your code
  } else {
      console.log('Toggle OFF');
      main.style.backgroundColor = "";
      main.style.transition = '.5s';
      topo.style.backgroundColor = "";
      topo.style.transition = '.5s';
      log.style.color = "";
      log.style.transition = '.5s';
      cad.style.color = "";
      cad.style.transition = '.5s';
      usu.style.backgroundColor = "rgb(212, 212, 212)";
      usu.style.transition = '.5s';
      header.style.backgroundColor = "";
      header.style.transition = '.5s';
      user.style.color = "";
      user.style.transition = '.5s';
      // rest of your code
  }

  // Se os elementos existirem, altere suas propriedades
  if (logado) logado.style.backgroundColor = this.checked ? "black" : "";
  if (logbutton) logbutton.style.color = this.checked ? "white" : "";
  if (icon) icon.style.color = this.checked ? "white" : "";
  if (username) username.style.color = this.checked ? "white" : "";
});

