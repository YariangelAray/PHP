<?php

 $texto = "fundamentos de programacion";

 $asignacion = $texto;

 $referencia = &$texto;

 echo $asignacion;
 echo "<br>";
 echo $referencia;

 $texto = "Asignacion por referencia";

 echo "<br>";
 echo $referencia;

 echo $asignacion;
?>