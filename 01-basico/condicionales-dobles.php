<?php 

/**
 * Estructura condicional doble (if - else)
 * 
 * if (expresión){
 *  código a ejecutar si la expresión es verdadera
 * }
 * else{
 *  código si es falsa
 * }
 * 
 * if(expresión):
 *  codigo
 * else:
 *  codigo
 * endif;
 */

 if (1 > 7){
  echo "Condición evalua a verdadera";
 }
 else{
  echo "Condición evalua a falso";
 }

 echo "<br>";

 if (9 != 12):
   echo "Condición evalua a verdadera";
 else:
   echo "Condición evalua a falso";
 endif;

  echo "<hr>";
//  Calcular el total que una persona debe pagar en un montallantas, el precio de cada llanta es de 800 si se compra menos de 5 llantas, y 700 si se compran 5 o más llantas

 $totalLlantas = 5;

 if($totalLlantas < 5){
  $precio = 800;
 }
 else{
  $precio = 700;
 }
 $total = $totalLlantas*$precio;

 echo "Usted debe pagar un total de: $".$total;

// Determinar si un alumno aprueba o reprueba un curso, sabiendo que aprobará si su promedio de 3 calificaciones es mayor o iual a 3.0, caso contrario reprueba.

  echo "<hr>";
 $nota1 = 3.01;
 $nota2 = 3.02;
 $nota3 = 3.01;

 $promedio = ($nota1 + $nota2 + $nota3) / 3;

 if($promedio >= 3.0):
  echo "APROBADO: ";
 else:
  echo "REPROBADO: ";
 endif;

 echo "Promedio de ".$promedio;
 
  echo "<hr>";
/**
 * OPERADOR TERNARIO
 * (condicion) ? true : false;
 */

 echo (8 >= 10) ? "Verdadero": "Wtf no";

 $num1 = 4;
 $num2 = 5;

 ($num1 > $num2) ? $result = $num1*$num2 : $result = $num1/$num2;
 echo "<br>";
 echo "Resultado: ".$result;
?>