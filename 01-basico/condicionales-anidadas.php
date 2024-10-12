<?php
/**
 * Estructura de condicion anidada
 * if(?){
 *  if(?){
 *    Código
 *  }
 * else{
 *    Código
 *  }
 * }
 */

 $a = 1;
 $b = 3;
 $c = 2;

 if($a > $b){
  
  if($a > $c){
    echo "El mayor es $a";
  }
  else{
    echo "El mayor es $c";
  }
 }
 else{
  if($b > $c){
    echo "El mayor es $b";
  }
  else{
    echo "El mayor es $c";
  }
 }

echo "<hr>";

 $dia = 5;

 if ($dia == 1){
  echo "Lunes";
 }
 else if ($dia == 2){
  echo "Martes";
 }
 else if ($dia == 3){
  echo "Miércoles";
 }
 else if ($dia == 4){
  echo "Jueves";
 }
 else if ($dia == 5){
  echo "Viernes";
 }
 else if ($dia == 6){
  echo "Sábado";
 }
 else if ($dia == 7){
  echo "Domingo";
 }
 else{
  echo "El día es inválido.";
 }