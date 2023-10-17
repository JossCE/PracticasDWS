
/*function comparar(){

    if(numero % 2 === 0){
        alert("Es numero par: " + numero);
    }else{
        alert("Es numero impar: " + numero);
    }

}
var numero = prompt("Ingresar un numero: ");
numero = parseInt(numero);
comparar(numero);*/

/*function avisoHuracan(hayunHuracan){

    if(hayunHuracan){
        alert("Hay un huracan");
    }else{
        alert("Esta soleado");
    }

}

var hayunHuracan = true;
avisoHuracan(hayunHuracan);*/

var operacion = prompt("Ingresa un operacion: ");
var n1 = parseInt(prompt("Ingresar un numero: "));
var n2 = parseInt(prompt("Ingresar un numero: "));

function OperacionesMatematicas(operacion, n1, n2){
    var resultado;
    switch (operacion) {
        case "suma":
            resultado = n1 + n2;
            alert("Resultado de la suma: " + resultado);
            break;
        
        case "resta":
            resultado = n1 - n2;
            alert("Resultado de la resta: " + resultado);
            break;

        case "multiplicacion":
            resultado = n1 * n2;
            alert("Resultado de la nultiplicacion: " + resultado);
            break;

        case "division":
            resultado = n1 / n2;
            alert("Resultado de la divsion: " + resultado);
            break;
        
        default:
            alert("La operacion no existe");
    }
}

OperacionesMatematicas(operacion, n1, n2);

