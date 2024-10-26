<?php

$num1 = 25;
$num2 = 4;


function calculadora($num1, $num2){


  try {

    //Dividir
    if ($num2 === 0 ){
      throw new Exception("División por cero.");
    }


    if (is_string($num1) || is_string($num2)){
      throw new Exception("Se deben ingresar números.");
    }

    $resultado = array (
      "suma" => $num1 + $num2, 
      "resta" => $num1 - $num2, 
      "multiplicacion" => $num1 * $num2, 
      "division" => $num1 / $num2
    );

    return $resultado;
  
  } catch (Exception $e) {
    return $e->getMessage();
  }

  
  
}

$resultado = calculadora( $num1, $num2);


echo "<pre>";
print_r($resultado);
echo "</pre>";


?>