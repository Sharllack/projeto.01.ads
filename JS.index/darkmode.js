document.querySelector('.toggle').addEventListener('change', function() {
  var main = document.getElementById('main');
  var topo = document.getElementById('topo');
  var log = document.querySelector('.topolog');
  var cad = document.querySelector('.topocad');
  var usu = document.querySelector('#usu');

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
      usu.style.backgroundColor = "";
      usu.style.transition = '.5s';
};
});
