// Selecciona todos los inputs con la clase 'uppercase-input'
var uppercaseInputs = document.querySelectorAll('.uppercase-input');

// Agrega el evento 'input' a cada input seleccionado
uppercaseInputs.forEach(function (input) {
  input.addEventListener('input', function (e) {
    // Obtener el valor actual del campo de entrada
    let inputValue = e.target.value;

    // Convertir el valor a mayúsculas
    let upperCaseValue = inputValue.toUpperCase();

    // Asignar el valor en mayúsculas al campo de entrada
    e.target.value = upperCaseValue;
  });
});

function toggleTallaInput() {
  var camisaSelect = document.getElementById('inputGroupSelectCamisa');
  var tallaInputs = document.getElementById('tallaInputs');

  // Si la opción seleccionada es 'SI', muestra los inputs de talla
  if (camisaSelect.value === 'SI') {
    tallaInputs.style.display = 'flex';  // Puedes usar 'block' en lugar de 'flex' si prefieres
  } else {
    tallaInputs.style.display = 'none';
  }
}
