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

////////////////////////////////////////////7777
const form = document.getElementById('formArticulo');
const lista = document.getElementById('listaArticulos');

form.addEventListener('submit', function(e) {
  e.preventDefault(); // Evita recargar la página

  const titulo = document.getElementById('titulo').value.trim();
  const descripcion = document.getElementById('descripcion').value.trim();

  if (titulo && descripcion) {
    const nuevoArticulo = document.createElement('div');
    nuevoArticulo.classList.add('articulo');

    nuevoArticulo.innerHTML = `
    <article class="noticias1">
      <h2>${titulo}</h2>
      <p>${descripcion}</p>
    </article> 
    `;

    lista.appendChild(nuevoArticulo);

    // Limpiar los campos del formulario
    form.reset();
  } else {
    alert('Por favor, completa todos los campos.');
  }
}); 
//////////////////////////////
<script>
  const contenedor = document.getElementById('listaArticulos');
    const articulos = JSON.parse(localStorage.getItem('idex')) || [];

    if () {
    
      articulos.forEach(articulo => {
        <article class="noticias1">
      <h2>${titulo}</h2>
      <p>${descripcion}</p>
      </article> 
        ;
        contenedor.innerHTML += articuloHTML;
      });
    }