<?php

/**
 * Estructura condicional simple
 * 
 * if (expresion){
 *   Codigo a ejecutar
 * }
 * 
 * 
 * if (expresión):
 *   Codigo a ejecutar
 * endif;
 */

 $edad = 18;
 $saludo= "Hola";
 if($edad >= 18){
  echo "Hola, usted es mayor de edad.";
 }
 echo "<br>"
?>

<div>
  <?php if($edad >= 18): ?>
    <h1><?= $saludo?></h1>
  <?php endif; ?>
</div>

<div>
  <?php if($edad >= 18){ ?>
    <h1>Saludo a persona</h1>
  <?php } ?>
</div>

<!-- Realice un programa donde se pida un número, si es par que aparezca un mensaje que indique que lo es -->
<?php
  $num = 4;
  if($num %2 == 0){
    echo "El número es par";
  }
  echo "<br>";
?>

<!-- En un almacen se hace un 20% de descuento a los clientes, cuya compra supere los 100$, ¿cuál será la cantidad que pagará una persona por su compra-->

<?php
  $compra = 120;
  if($compra >= 100){
    $compra -= $compra*0.2;
    echo "Su compra es de: $".$compra;
  }
?>