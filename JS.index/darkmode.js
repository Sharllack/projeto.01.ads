document.querySelector('.toggle').addEventListener('change', function() {
  var main = document.getElementById('main');
  var topo = document.getElementById('topo');
  var log = document.getElementById('topolog');
  var cad = document.getElementById('topocad');
  var usu = document.getElementById('usu');
  var header = document.getElementById('header');
  var user = document.getElementById('user');

  if (this.checked) {
      console.log('Toggle ON');
      main.style.backgroundColor = "black";
      main.style.transition = '.5s';
      topo.style.backgroundColor = "black";
      topo.style.color = "white";
      topo.style.transition = '.5s';
      log.style.color = "white";
      log.style.transition = '.5s';
      cad.style.color = "white";
      cad.style.transition = '.5s';
      usu.style.backgroundColor = "black";
      usu.style.color = "white";
      usu.style.transition = '.5s';
      header.style.backgroundColor = "black";
      header.style.color = "white";
      header.style.transition = '.5s';
      user.style.color = "white";
      user.style.transition = '.5s';
      // rest of your code
  } else {
      console.log('Toggle OFF');
      main.style.backgroundColor = "";
      main.style.transition = '.5s';
      topo.style.backgroundColor = "";
      topo.style.color = "";
      topo.style.transition = '.5s';
      log.style.color = "";
      log.style.transition = '.5s';
      cad.style.color = "";
      cad.style.transition = '.5s';
      usu.style.backgroundColor = "rgb(212, 212, 212)";
      usu.style.color = "";
      usu.style.transition = '.5s';
      header.style.backgroundColor = "";
      header.style.color = "";
      header.style.transition = '.5s';
      user.style.color = "";
      user.style.transition = '.5s';
};
});
