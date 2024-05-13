// JavaScript para detectar a mudança e executar uma ação
document.getElementById('toggle').addEventListener('change', function() {
    main = document.getElementById('main');
    if(this.checked) {
      console.log('Toggle ON');
      main.style.backgroundColor = "black";
      main.style.transition = '.5s';
      prod.style.backgroundColor = "black";
    } else {
      console.log('Toggle OFF');
      main.style.backgroundColor = "";
      main.style.transition = '.5s';
      prod.style.backgroundColor = "";
    }
  });

