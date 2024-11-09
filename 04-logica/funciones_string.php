<?php

// $exp = "/PRUEBA/i";
// $exp = "/[0-9]/i";
// $exp = "/^textp/i";
// $exp = "/pr[eu]eba/i";
// $exp = "/grupo-[0-9]{0,9}-adso/i";
// $exp = "/le{2,4}r/i";
// $exp = "/l[aeiou]{2,4}r/i";
// $exp = "/[0-9]/";
$texto = "Los números naturales son 0 1 2 3 4 5 6 7 8 9";
// $exp = "/[A-Za-z]/";
// $exp = "/[\D]/";
$exp = "/[\d]/";
$resultado = preg_match($exp, $texto, $coincidencias, PREG_OFFSET_CAPTURE); 

// echo "<pre>";
// print_r($coincidencias);
// echo "</pre>";
// echo "<br>";
// print_r($resultado);

$frase = "hola ADSS 22";
// $exp = "/[A-Z]{4}/";
// $exp = "/[0-9]{2}/";
$exp = "/([A-Z{4,}])\s([0-9]{2,})/";
//"/(?=.*[A-Z])(?=.*[0-9])/"
// contraseña /^(?=.*[A-Z])(?=.*[0-9])(?=.*[\W_]).{8,}$/

//(?= ...) es una verificación condicional que no consume caracteres y solo confirma si algo está presente. (para saber si está y ya, sin orden, o algo así)
//(?: ...) agrupa partes de la expresión para poder aplicar repetición o alternación sin capturar el grupo. (se puede usar para ver si algo esta especificamente y cuantas veces está)
$respuesta = preg_match($exp, $frase);



if ($respuesta){
  echo "Su frase <b>SÍ</b> cumple";
}
else{
  echo "Su frase <b>NO</b> cumple";
}


?>