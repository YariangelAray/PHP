<?php

$numero = 12;


function tablaMultiplicar($numero){

  echo "<br>TABLA DEL $numero <br>";

  for ($i = 1; $i <= 10  ; $i++) {
  
  echo "$numero x $i = ". $numero*$i. "<br>";
  }
}

echo "Tabla de un número indicado. <br>";

tablaMultiplicar($numero);

echo "<hr>";

echo "Tabla de números del 1 al 10. <br>";

for ($i=1; $i <= 10 ; $i++) { 
  tablaMultiplicar($i);
}



?>