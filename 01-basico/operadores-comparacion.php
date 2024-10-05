<?php
/**
 * ----Ejemplo           Simbolo              Resultado
 *     1 == "1"           == (igual)            TRUE
 *     10 === "10"        === (identico)        FALSE
 *     7 != 7             != (diferente)        FALSE
 *     7 !== "7"          != (no identico)      TRUE
 *     21 <> "21"         <> (diferente)        FALSE 
 *     21 !== "21"        != (no identico)      TRUE
 *     7 < 4              < (menor que)         FALSE
 *     7 > 4              > (mayor que)         TRUE
 *     2 <= 2             <= (menor igual)      TRUE
 *     3 >= 7             >= (mayor igual)      FALSE
 */

var_dump( 2 == "2");
echo "<br>";
var_dump( 2 === "2");

?>