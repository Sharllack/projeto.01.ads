const topo = document.getElementById('topo');
const logo = document.getElementById('logo');

  const darkModePreference = localStorage.getItem('darkMode');
  if (darkModePreference === 'on') {
    topo.style.backgroundColor = "black";
    topo.style.transition = '.5s';
    logo.style.color = "white";
    logo.style.transition = '.5s';
      
  } else {
    topo.style.backgroundColor = "";
    topo.style.transition = '.5s';
    logo.style.color = "";
    logo.style.transition = '.5s';
  }
