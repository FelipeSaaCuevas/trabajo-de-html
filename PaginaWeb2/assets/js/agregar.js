document.getElementById("formArticulo").addEventListener("submit", function(event) {
  event.preventDefault();

  const titulo = document.getElementById("titulo").value;
  const descripcion = document.getElementById("descripcion").value;

  const nuevoArticulo = document.createElement("article");
  nuevoArticulo.className = "noticias1 destacado"; // clase para estilo grande
  nuevoArticulo.innerHTML = `
      <article class="box">
      <h2 class="title">${titulo}</h2>
      <p>${descripcion}</p>
      </article> 
  `;

  // Mover el artículo actualmente destacado a la lista de artículos pequeños
  const contenedorDestacado = document.getElementById("articuloDestacado");
  const articuloAnterior = contenedorDestacado.querySelector("article");
  if (articuloAnterior) {
      articuloAnterior.classList.remove("destacado");
      articuloAnterior.classList.add("miniatura"); // con esto se vera mas pequeño
      document.getElementById("listaArticulos").prepend(articuloAnterior);
  }

  // Insertar el nuevo artículo como destacado
  contenedorDestacado.innerHTML = ""; // este limpiamos el articulo
  contenedorDestacado.appendChild(nuevoArticulo);

  document.getElementById("formArticulo").reset();
});
/////////////////////////////////////////////////////////////777
fetch('panelDeAviso.html')
        .then(response => response.text()
      )
        .then(html => {
            document.getElementById('contenedorAviso').innerHTML = html;
        }
      );
      