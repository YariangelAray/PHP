<?php


$nombre = "";
$apellido = "";
$edad = "";
$telefono = "";
$gustos = $_REQUEST['gustos'] ?? [];
$errores = [];


if(isset($_REQUEST['nombre']) && empty($_REQUEST['nombre'])){
  array_push($errores, "El campo nombre es requerido");
}
if(isset($_REQUEST['apellido']) && empty($_REQUEST['apellido'])){
  array_push($errores, "El campo apellido es requerido");
}
if(isset($_REQUEST['edad']) && empty($_REQUEST['edad'])){
  array_push($errores, "El campo edad es requerido");
}
if(isset($_REQUEST['telefono']) && empty($_REQUEST['telefono'])){
  array_push($errores, "El campo telefono es requerido");
}
if (count($gustos) < 2 || empty($gustos)){
  array_push($errores, "El campo de gustos es requerido, mínimo con dos campos.");
}




if (count($errores) > 0){
  echo "<h2>ERRORES</h2>";
  echo "<ul>";
  for ($i = 0; $i < count($errores); $i++){
    echo "<li>";
    print_r($errores[$i]);
    echo "</li>";
  }
  echo "</ul>";
}
else{
  echo "Su nombre es: ".$_REQUEST['nombre']."<br>";
  echo "Su apellido es: ".$_REQUEST['apellido']."<br>";
  echo "Su edad es: ".$_REQUEST['edad']."<br>";
  echo "Su telefono es: ".$_REQUEST['telefono']."<br>";
  echo "Sus gustos son: ".implode(", ", $gustos); //Hace que los campos esten separados por como se le indica ", "
}
?>
