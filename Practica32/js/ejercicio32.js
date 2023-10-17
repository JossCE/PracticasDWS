//Ejercicio 4
/*for(var i = 0; i < 7; i++) {
    
    if(i==3){
        alert("Soy el 4to");

    }else if(i==6){
        alert("Acabamos de saludad");
    }else{
        alert("Hola mundo");

    }
}*/

//Ejercicio 5
//let array = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Agosto", "Septiembre", "Octubre", "Noviembre" ];
/*for (let i in array) {
    alert(i); 
}*/

/*for (let i of array) {
    alert(i); 
}

var array = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Agosto", "Septiembre", "Octubre", "Noviembre" ];
array.forEach( function(array) {
    alert(array);
});*/

//Ejercicio 6
let array = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Agosto", "Septiembre", "Octubre", "Noviembre" ];
for (let i of array) {
    if(i == 5){
        i++;
        alert(i); 
    }else if( i==0){

        alert("Diciembre"); 
    }else{
        alert(i); 
    }
}

