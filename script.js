 // Obtener el botón de compra por su ID
var botonComprar = document.getElementById("comprar");

// Agregar un controlador de eventos para el clic
botonComprar.addEventListener("click", function() {
  // Colocar aquí la lógica para procesar la compra
  alert("Gracias por comprar nuestro fondo de pantalla");
});
const form = document.querySelector('.search-form');

form.addEventListener('submit', function(event) {
  event.preventDefault(); // Evita que la página se recargue al enviar el formulario
  const query = this.querySelector('input[type="search"]').value;
  console.log('Búsqueda de:', query);
  // Agrega aquí la lógica para buscar en tu sitio
});

