<?php
/**
 * Operadores de incremento y descremento
 * 
 * Simbolo              Nombre
 *  ++                  Incremento
 *  --                  Decremento
 * 
 * Ejemplo              
 * ++$variables         Pre-incremento
 * --$variables         Pre-decremento
 * $variables--         Pos-incremento
 * $variables--         Pos-decremento
 * 
 * 
 * operador unario ++/--
 */
 $numero = 10;
 echo "Variable= ". $numero;
 echo "<br>";

// Incrementa o decrementa antes de utilizar la variable.
 echo "Pre incremento ". ++$numero;
 echo "<br>";
 echo "Pre decremento ". --$numero;
 echo "<br>";

// Primero realiza la operación y luego incrementa o decrementa
 echo "<br>";
 echo "Post incremento ". $numero++;
 echo "<br>";
 echo "Post decremento ". $numero--; //10
 echo "<br>";

//  10 + 1 = 11
 $resultado = ++$numero;
 echo $resultado;

 echo "<br>";
//  primero asigna la variable numero y luego si le incrementa 1
 $resultado = $numero++;
 echo $resultado;
?>