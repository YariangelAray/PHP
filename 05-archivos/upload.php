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

$errores = [];

$archivo = $_FILES['archivo'] ?? [];

function guardarArchivos(){
  
}


if(isset($_FILES['archivo'])){

  $nombre_new = $_REQUEST['nombre'];
  $temporal = $_FILES["archivo"]["tmp_name"];
  $nombre_archivo = $_FILES["archivo"]["name"];
  $tamanio_archivo = $_FILES["archivo"]["size"];
  $tipo_archivo = $_FILES["archivo"]["type"];
  $error_archivo = $_FILES["archivo"]["error"];

  $bandera = explode(".", $nombre_archivo);
  $archivo_extension = strtolower(end($bandera));
  $extensiones = array("jpg", "jpeg", "png");

  if(!in_array($archivo_extension,$extensiones)){
    $errores[] = "Extensión no permitida";
  }

  if ($tamanio_archivo > 250000){
    $errores[] = "Tamaño mayor a 2MB";
  }

  if (empty($nombre_new)){
    $errores[] = "No se asignó ningún nombre al archivo";
  }

  if (empty($errores) && !empty($nombre_new)){
    //Movemos el archivo almacenado en temporal y lo añadimos a la carpeta que queramos con el nombre que le asignamos y la extensión
    //Podemos usar la funcion rand para que se genere un numero aleatorio y no se envien dos archivos con el mismo nombre y se sobreescriban (en caso de que tengan la misma exntensión pero sea un coonenido diferente)
    move_uploaded_file($temporal, "enviados/".$nombre_new.rand(0, 11).".$archivo_extension");
  }
  else{
    echo "<pre>";
    print_r($errores);
    echo "</pre>";
  }

}
else{
  echo "No envió archivo";
}

/**
 * explode(separador, variable string); -> separa un string en un array, el separador es un caracter en el string que indica en que punto se va a cortar, por así decirlo.
 * implde(separador, variable array); -> convierte los elementos de un array en un string, separandolos por el caracter que indicó en el separador. 
 */

?>