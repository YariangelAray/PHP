<?php
/**
 * Cree una función que calcule la longitud de una palabra, si es corta o es larga, las palabras cortas son menores de 5 caracteres. 
 */


 $palabra = "Yari";

 function longitudPalabra($palabra){

   if (strlen($palabra) < 5){
    return "La palabra es corta.";
   }
   else{
    return "La palabra es larga.";
   }

 }

echo longitudPalabra($palabra);


?>