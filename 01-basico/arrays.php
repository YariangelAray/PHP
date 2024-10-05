<?php

// ARRAYS

// Indexado

// $estudiantes = array("Carlos", "José", "María", "Luis");
$estudiantes = ["Carlos", "José", "María", "Luis"];

echo"<pre>";
// var_dump($estudiantes);
print_r($estudiantes);
echo"</pre>";

echo $estudiantes[2];

echo "<hr>";

// Asociativo

$aprendiz = [
  "nombre" => "Yari",
  "apellido" => "Aray",
  "edad" => 17,
  "deuda" => 100000
];

echo "<pre>";
print_r($aprendiz);
echo "</pre>";

echo "<hr>";

// Multidimensional

$tutor=[
  'nombre' => 'Yari',
  'apellido' => 'Aray',
  'edad' => 17,
  'direccion' => [
    'ciudad' => 'Bucaramanga',
    'barrio' => 'Cristal Alto',
    'nomenclatura' => 'manzana A casa 4 piso 3'
  ],
  'habilidades' => [
    'git', 'html', 'css', 'js', 'php', 'python', 'sql'
  ]
];

echo "<pre>";
print_r($tutor);
echo "</pre>";

echo "<hr>";

// Imprimimos matrices

print_r($tutor['direccion']['nomenclatura']);
echo"<br>";
echo $tutor['direccion']['nomenclatura'];
echo"<br>";
print_r($tutor['habilidades'][4]);

echo "<hr>";

// Sobreescribimos un valor

$tutor['habilidades'][3] = 'JavaScript';

echo "<pre>";
print_r($tutor['habilidades']);
echo "</pre>";

// Agregar valor

// array_push($tutor['direccion']['departamento'],'Santander');
$tutor['direccion']['departamento'] = 'Santander';
$tutor['direccion'] += ['pais' => 'Colombia'];

echo "<hr>";

echo "<pre>";
print_r($tutor['direccion']);
echo "</pre>";

// Eliminar elementos

unset($tutor['habilidades'][4]);
// array_splice($tutor['habilidades'], 4, 1);

echo "<hr>";

echo "<pre>";
print_r($tutor['habilidades']);
echo "</pre>";

// Contar Elementos

echo "Habilidades: ", count($tutor['habilidades']);

?>