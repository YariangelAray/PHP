<?php
/**
 * Combinar dos Comparaciones o condiciones
 * 
 * ---- Simbolo           Nombre ----
 *       and               and (y)
 *       or                or (o)
 *       !                 not (no)
 *       &&                and (y)
 *       ||                or (o)
 * 
 * 
 * ------------------ TABLA DEL OPERADOR AND ------------------
 * Expresión 1               Expresión 2             Resultado
 *  false           &&        false                   false
 *  false           &&        true                    false
 *  true            &&        true                    true
 *  true            &&        false                   false
 * 
 */

 $valor1 = 7;
 $valor2 = 2;

 var_dump($valor1 = 7 and 2 > 3);
 echo "<br>";
 var_dump($valor1 = 7 && 9 > 3);
 echo "<hr>";
 
/**
 * ------------------ TABLA DEL OPERADOR OR ------------------
 * Expresión 1               Expresión 2             Resultado
 *  false           ||        false                   false
 *  false           ||        true                    true
 *  true            ||        false                   true
 *  true            ||        true                    true
 */ 
 
 var_dump($valor1 == 7 or 2 > 3);
 echo "<br>";
 var_dump($valor1 == 5 || 9 > 3);
 echo "<br>";
 var_dump($valor1 == 5 || 1 > 3);
 echo "<hr>";
  
/**
 * ------------------ TABLA DEL OPERADOR NOT ------------------
 * Expresión 1             Resultado
 *  !true                   false
 *  !false                   true
 */ 

 var_dump(!($valor1 >= $valor2));
 echo "<br>";
 echo "<hr>";

 ?>