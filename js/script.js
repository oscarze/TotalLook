alert("El sitio web solicitado no parece ser seguro, ¿Deseas continuar?");
{ bienvenida ();	}
function bienvenida(){ //función de Bienvenida monstrando un alert dando la bienvenida
  alert("Bienvenido a TOTAL LOOK su tienda online de confianza")
}
  var nombre=prompt ("Ingrese su nombre:"," " );//Declarando la variable nombre
   var respuesta=confirm ("Hola"+nombre+"tienes que iniciar sesión antes de realizar una compra en el sitio web");
    if (respuesta=1) { validacion();	}
//Funciones
function validacion(){ //función Validacion para validar los datos del usuario y saber que son correctos
  var edad = prompt("¿Cuantos años tiene? ")//La variable edad guarda la respuesta del prompt y muestra la pregunta
   if( edad >= 18){alert('Usted es mayor de edad') }//Si es mayor muestra un alert diciendo que es correcto
    else {alert('Usted es menor de edad ¿En verdad desea continuar?') }}//Si es menor muestra un alert diciendo que es incorrecto
     let confirmar = confirm ("Bienvenido, si usted es menor de edad sus datos no seran guardados. ¿Desea continuar?")
window.onbeforeunload = preguntar_AL_SALIR;
function preguntar_AL_SALIR(){
  return "¿Realmente quieres salir?";
}
