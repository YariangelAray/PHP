<?php

/**
 * En una farmacia aplica al precio de los remedios el 10% de descuento. Hacer un programa que ingresando el costo de los medicamentos calcule el valor del descuento y el precio final.
 */


 $precio = 10000; // $
 $porcDesc = 10; // %

  function sacarDescuento($precio, $porcDesc){
    
    return $precio * ($porcDesc/100);
  }

  function precioTotal($precio, $descuento){

    return $precio - $descuento;
  }

$descuento = sacarDescuento($precio, $porcDesc);
$precioFinal = precioTotal($precio, $descuento);

echo "El precio del medicamento es: $".$precio;
echo "<br> El descuento aplicado es: $".$descuento;
echo "<br> El precio final es: $".$precioFinal;

/**
 * Escribir un programa que muestre la tabla de multiplicar del 1 al 10. 
 */

?>