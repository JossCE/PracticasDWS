var p = prompt("Ingresar tu peso: ")
var peso = parseInt(p);

var peso_tierra = 9.807;
var peso_marte = 3.71;
var peso_jupiter = 24.79;
var resultado;

var opciones = prompt("Opciones 1 o 2 \n1- Martes \n2-Jupiter:");

switch(opciones){
    case "1":
        resultado = (peso * peso_marte)/peso_tierra;
        alert("Su peso es: " +  resultado);
    break;

    case "2":
        resultado = (peso * peso_jupiter)/peso_tierra;
        alert("Su peso es: " +  resultado);
    break;

    default:
        alert("No existe esa opcion");
    break;
}


/*if (opciones == 1){
    resultado = (peso * peso_marte)/peso_tierra;
    alert("Su peso es: " +  resultado);
}else if (opciones == 2){
    resultado = (peso * peso_jupiter)/peso_tierra;
    alert("Su peso es: " +  resultado);
}else{
    alert("No existe esa opcion");
}*/




