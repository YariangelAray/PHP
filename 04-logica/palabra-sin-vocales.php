<?php
/**
 * Escriba una funcion que tome una cadena, y devuelva una nueva cadena sin vocales.
 */

$nombre = "yari";

function replaceVocales($nombre){
  return preg_replace('/a|á|e|é|i|í|o|ó|u|ú/i', '',strtolower($nombre) );
}


echo "La cadena era '$nombre'. Sin vocales es: ".replaceVocales($nombre);



?>