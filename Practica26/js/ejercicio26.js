var valores = [true, 10, false, "codigo", "herramientas", 7];

var texto = valores[3] > valores[4];

if (valores[3] > valores[4]) {
    var result = (valores[3]+ " -- es mayor que -- " + valores[4]);
  } else {
    var result = (valores[4]+ " es mayor que " + valores[3]);
  }

var vfalse = valores[0] == valores[2];
var vtrue = valores[0] != valores[2]; 


var suma = valores[1] + valores[5];
var resta = valores[1] - valores[5];
var multi = valores[1] * valores[5];
var div = +valores[1] / valores[5];

 alert("TEXTO MAYOR: s" + result + 
 "\nVALORES BOOLEANOS: " + "\n" + valores[0] + " es igual a " + valores[2] + " = False" + "\n" + valores[0] + " es diferente a " + valores[2] + " = True" + 
 "\nOPERACIONES: \nResultado suma: " + suma + "\nResultado resta: " + resta + "\nResultado multiplicacion: " + multi + "\nResultado division: " + div) 
