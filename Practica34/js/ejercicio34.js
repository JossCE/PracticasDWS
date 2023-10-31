
function calcularNotas() {
    var asignaturas = ["asignatura1", "asignatura2", "asignatura3", "asignatura4", "asignatura5", "asignatura6", "asignatura7", "asignatura8"];
    var sumaNotas = 0;
    var mensaje = "";
    var campoFaltante = null;

    for (var i = 0; i < asignaturas.length; i++) {
        var nota = document.getElementById(asignaturas[i]).value;
        if (nota === "") {
            campoFaltante = asignaturas[i];
            break;
        } else {
            nota = parseFloat(nota);
            sumaNotas += nota;
            mensaje += "En " + asignaturas[i] + " has sacado " + nota + "\n";
        }
    }

    if (campoFaltante !== null) {
        alert("Ingresar nota faltante:  " + campoFaltante);
        document.getElementById(campoFaltante).focus();
        return;
    }

    var promedio = sumaNotas / 8;
    mensaje += "El promedio final es: " + promedio + "\n";

    if (promedio > 85) {
        mensaje += "Estás exento de ordinario.";
    } else {
        mensaje += "Debes presentar examen ordinario.";
    }

    alert(mensaje);
}