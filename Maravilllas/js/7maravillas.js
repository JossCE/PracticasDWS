
//Se define un arreglo con los nombres de los archivos de imagenes que apareceran durante el juego
let maravillas = ["chichen-itza.svg", "coliseo.svg", "cristo-redentor.svg", "machu-picchu.svg", "muralla-china.svg","petra.svg","taj-mahal.svg"];
//Se define un array que contiene las respuestas correctas para cada maravilla
let correcta = [1,0,2,1,2,0,1];

//Se define un arreglo para las opciones que se mostraran
let opciones = [];

//Cada opcion envia al arreglo opciones, las posibles respuestas
opciones.push(["Machu Picchu", "Chichen Itza", "Coliseo"]);
opciones.push(["Coliseo", "Petra", "Cristo Redentor"]);
opciones.push(["Muralla China", "Taj Mahal", "Cristo Redentor"]);
opciones.push(["Petra", "Machu Picchu", "Taj Mahal"]);
opciones.push(["Chichen Itza", "Petra", "Muralla China"]);
opciones.push(["Petra", "Machu Pichu", "Chichen Itza"]);
opciones.push(["Coliseo", "Taj Mahal", "Cristo Redentor"]);

//Se inicializa la posicion de la partida, almacena la poscion actual
let posActual = 0;
//Almacena contidad de respuestas almacenada
let cantidadAcertadas = 0;

//Funcion que inicializa el juego
function comenzarJuego(){
    posActual = 0;//Reinicia la posicion alcutal y la cantidad de respuestas correctas
    cantidadAcertadas = 0;//Inicializa la cantidad de aciertos
    //Oculta la pantalla inicial y muestra la pantalla de juego
    document.getElementById("pantalla-inicial").style.display = "none";
    document.getElementById("pantalla-juego").style.display = "block";
    cargarMaravilla();//Carga la primera maravilla y sus opciones

}

//Funcion que carga la maravilla y sis opciones en pantalla
function cargarMaravilla(){
    if(maravillas.length <= posActual){//verifca si se han mostrado todas las maravillas
        terminarJuego(); //Si todas las maravillas han sido mostradas se termina el juego
    }
    else{
        limpiarOpciones();//Si quedan maravillas por mostrar, limpia las opciones anteriores
        //Muestra la imagen de la maravilla actual y sus opciones correspondientes
        document.getElementById("imgMaravilla").src = "img/" + maravillas[posActual];
        document.getElementById("n0").innerHTML = opciones[posActual][0];
        document.getElementById("n1").innerHTML = opciones[posActual][1];
        document.getElementById("n2").innerHTML = opciones[posActual][2];
    }
}

//Funcion que limpia las clases de estilos de las opciones y letras
function limpiarOpciones(){
    document.getElementById("n0").className = "nombre";
    document.getElementById("n1").className = "nombre";
    document.getElementById("n2").className = "nombre";
    document.getElementById("l0").className = "letra";
    document.getElementById("l1").className = "letra";
    document.getElementById("l2").className = "letra";
}

//Se compara que la opcion elegida sea igual a la posicion actual del arreglo                      
function comprobarRespuesta(opElegida){
    //Compara la opcion seleccionada por el usuario con la respuesta correcta
    if(opElegida==correcta[posActual]){//acertó
        //Si es correcta, aplica clases de estlo para indicar la respuesta correcta
        document.getElementById("n" + opElegida).className = "nombre nombreAcertada";
        document.getElementById("l" + opElegida).className = "letra letraAcertada";
        cantidadAcertadas++;//Incrementa el contador de respuetas correctas
    }else{
        //Si es incorrecta, aplica clases de estilo para indicar la respuesta incorrecta y la mostrar cual era correcta
        document.getElementById("n" + opElegida).className = "nombre nombreNoAcertada";
        document.getElementById("l" + opElegida).className = "letra letraNoAcertada";
        document.getElementById("n" + correcta[posActual]).className = "nombre nombreAcertada";
        document.getElementById("l" + correcta[posActual]).className = "letra letraAcertada";
    }
    posActual++;//Incrementa la posicion actual para cargar la siguiente maravilla
    setTimeout(cargarMaravilla,1000);//Espera un segundo para cargar la siguiente imagen
}
//Miestra la pantalla final del juego
function terminarJuego(){
    //Oculta la pantalla de juego y muestra la pantalla final
    document.getElementById("pantalla-juego").style.display = "none";
    document.getElementById("pantalla-final").style.display = "block";
    document.getElementById("numCorrectas").innerHTML = cantidadAcertadas;//Muestra la cantidad de respuestas correctas e incorrectas
    document.getElementById("numIncorrectas").innerHTML = maravillas.length - cantidadAcertadas;//
}
//Funcion que permite volver al inicio del juego desde la pantalla final
function volverAlInicio(){
    //Oculta la pantalla final y muestra la pantalla inicial
    document.getElementById("pantalla-final").style.display = "none";
    document.getElementById("pantalla-inicial").style.display = "block";
    document.getElementById("pantalla-juego").style.display = "none";
}