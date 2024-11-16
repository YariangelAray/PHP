<?php

// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";

// var_dump($_FILES);

// $temporal = $_FILES["archivo"]["tmp_name"];
// $nombre_archivo = $_FILES["archivo"]["name"];
// $tamanio_archivo = $_FILES["archivo"]["size"];
// $tipo_archivo = $_FILES["archivo"]["type"];
// $error_archivo = $_FILES["archivo"]["error"];

// echo $temporal."<br>";
// echo $nombre_archivo."<br>";
// echo $tamanio_archivo."<br>";
// echo $tipo_archivo."<br>";
// echo $error_archivo."<br>";

// Crear una función que haga todo lo que hace despues del if, que es guardar esos elementos de un archivo. Esa función se va a llamar según la cantidad de archivos que haya con un for. Que minimo se envien tres archivos, si no que indique el mensaje erroneo. 


$archivo = $_FILES['archivo'] ?? [];
$nombre_nuevo = $_REQUEST['nombre'];
$errores = [];

echo "<pre>";
print_r($archivo);
echo "</pre>";

// Validar que se haya puesto un nombre y que hayan más de tres archivos
if (empty($nombre_nuevo)){
  $errores[] = "No se asignó ningún nombre para los archivos";
}
if (!(count($archivo['name']) >= 3)){
  $errores[] = "Ningun archivo o menos de tres archivos han sido enviados.";
}

// Validar que no hayan errores para así poder validar todos los archivos
if(empty($errores)){

  $no_permitidos = 0;

  for ($i=0; $i < count($archivo['name']); $i++) {     
    validarArchivos($i, $archivo, $no_permitidos);
  }

  // Validar que todos los archivos hayan sido permitidos
  if ($no_permitidos == 0){
    for ($i=0; $i < count($archivo['name']); $i++) { 
      guardarArchivos($i, $archivo, $nombre_nuevo);      
    }
    echo "<br> ¡Todos los archivos han sido subido con éxito!";
  }
  else{
    echo "<br>ALERTA: No se pueden almacenar los archivos porque contienen errores.";
  }

}
else {
  echo "<pre>";
  print_r($errores);
  echo "</pre>";
}


function validarArchivos($numero, $archivo, &$no_permitidos){
  $errores_archivo = [];
  $nombre_archivo = $archivo['name'][$numero];
  $tamanio_archivo = $archivo['size'][$numero];
  $tipo_archivo = $archivo['type'][$numero];

  $extension_archivo = obtenerExtension($numero, $archivo);
  
  $extensiones = array("jpg", "jpeg", "png");

  if (!in_array($extension_archivo, $extensiones)){
    $errores_archivo[] = "Extensión no permitida";
  }

  if ($tamanio_archivo > 2097152){
    $errores_archivo[] = "Tamaño mayor a 2MB";
  }

  // Validar que el archivo no haya tenido errores
  if (!empty($errores_archivo)){
    $no_permitidos ++;
    echo "<br> ARCHIVO ".($numero+1)." NO PERMITIDO ($nombre_archivo)<br>";
    echo "- ERRORES: <br>".implode("<br>", $errores_archivo)."<br>";
  }
}

function guardarArchivos($numero, $archivo, $nombre_nuevo){
  $temporal = $archivo['tmp_name'][$numero];
  $extension = obtenerExtension($numero, $archivo);

  move_uploaded_file($temporal, "enviados/$nombre_nuevo(".($numero+1).").$extension");
}

function obtenerExtension($numero, $archivo){
  $bandera = explode(".", $archivo['name'][$numero]);
  return strtolower(end($bandera));
}

// if(isset($_FILES['archivo'])){

//   
//   $temporal = $_FILES["archivo"]["tmp_name"];
//   $nombre_archivo = $_FILES["archivo"]["name"];
//   $tamanio_archivo = $_FILES["archivo"]["size"];
//   $tipo_archivo = $_FILES["archivo"]["type"];
//   $error_archivo = $_FILES["archivo"]["error"];

//   $bandera = explode(".", $nombre_archivo);
//   $archivo_extension = strtolower(end($bandera));
//   $extensiones = array("jpg", "jpeg", "png");

//   if(!in_array($archivo_extension,$extensiones)){
//     $errores[] = "Extensión no permitida";
//   }

//   if ($tamanio_archivo > 250000){
//     $errores[] = "Tamaño mayor a 2MB";
//   }

//   if (empty($nombre_new)){
//     $errores[] = "No se asignó ningún nombre al archivo";
//   }

//   if (empty($errores) && !empty($nombre_new)){
//     //Movemos el archivo almacenado en temporal y lo añadimos a la carpeta que queramos con el nombre que le asignamos y la extensión
//     //Podemos usar la funcion rand para que se genere un numero aleatorio y no se envien dos archivos con el mismo nombre y se sobreescriban (en caso de que tengan la misma exntensión pero sea un coonenido diferente)
//     move_uploaded_file($temporal, "enviados/".$nombre_new.rand(0, 11).".$archivo_extension");
//   }
//   else{
//     echo "<pre>";
//     print_r($errores);
//     echo "</pre>";
//   }

// }
// else{
//   echo "No envió archivo";
// }

/**
 * explode(separador, variable string); -> separa un string en un array, el separador es un caracter en el string que indica en que punto se va a cortar, por así decirlo.
 * implode(separador, variable array); -> convierte los elementos de un array en un string, separandolos por el caracter que indicó en el separador. 
 */

?>