function mostrarFechaHora() {
    const ahora = new Date();

    const opcionesFecha = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    const fecha = ahora.toLocaleDateString('es-ES', opcionesFecha);
    const hora = ahora.toLocaleTimeString('es-ES');

    document.getElementById('hora').textContent = `${fecha} - ${hora}`;
  }
  // Mostrar fecha y hora cada segundo
  setInterval(mostrarFechaHora, 1000);

  // Mostrar inmediatamente al cargar
  mostrarFechaHora();

