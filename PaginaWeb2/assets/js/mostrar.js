function mostrarOcultar() {
    const arti = document.getElementById('arti');
    if (arti.style.display === 'none' || arti.style.display === '') {
      arti.style.display = 'block';
    } else {
      arti.style.display = 'none';
    }
  }
  function Ocultar() {
    document.getElementById("panelDeAviso").style.display = "none";
}