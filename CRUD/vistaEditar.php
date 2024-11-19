<?php

require('conexion.php');

$db = new Conexion();
$conexion = $db->getConexion();

$sqlCiudades = "SELECT * FROM ciudades";
$banderaCiudades = $conexion->prepare($sqlCiudades);
$banderaCiudades->execute();
$ciudades = $banderaCiudades->fetchAll();

$sqlGeneros = "SELECT * FROM generos";
$banderaGeneros = $conexion->prepare($sqlGeneros);
$banderaGeneros->execute();
$generos = $banderaGeneros->fetchAll();


$sqlLenguajes = "SELECT * FROM lenguajes";
$banderaLenguajes = $conexion->prepare($sqlLenguajes);
$banderaLenguajes->execute();
$lenguajes = $banderaLenguajes->fetchAll();

$idUsuario = $_GET['id'];

$sqlUsuario = "SELECT * FROM usuarios WHERE id_usuario=$idUsuario";
$stm = $conexion->prepare($sqlUsuario);
$stm->execute();
$usuario = $stm->fetchAll();

$sqlUsuarioLeng = "SELECT * FROM lenguaje_usuario WHERE id_usuario=$idUsuario";
$stm = $conexion->prepare($sqlUsuarioLeng);
$stm->execute();
$usuarioLeng = $stm->fetchAll();

echo "<pre>";
print_r($usuarioLeng);
echo "</pre>";

?>

<form action="controlador.php" method="post">

    <fieldset>

        <legend><h2>FORMULARIO</h2></legend>

        <label for="nombre"> Nombre:
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" value="<?=$usuario[0]['nombres']?>">
        </label>
        <br><br>

        <label for="apellido"> Apellido:
            <input type="text" id="apellido" name="apellido" placeholder="Apellido" value="<?=$usuario[0]['apellidos']?>">
        </label>
        <br><br>

        <label for="correo"> Correo electrónico:
            <input type="text" id="correo" name="correo" placeholder="Correo" value="<?=$usuario[0]['correo']?>">
        </label>
        <br><br>

        <label for="fechaNac"> Fecha nacimiento:
            <input type="date" name="fechaNac" id="fechaNac" value="<?=$usuario[0]['fecha_nacimiento']?>">
        </label>
        <br><br>

        <div>
            <label for="id_ciudad">Ciudad: </label>
            <select name="ciudad" id="id_ciudad">
                <?php foreach ($ciudades as $key => $value)
            {?>
                <option id="<?=$value['id_ciudad']?>" value="<?=$value['id_ciudad']?>"
                <?php if ($value['id_ciudad'] == $usuario[0]['id_ciudad']){ ?>
                selected
                <?php } ?>
                >
                    <?=$value['ciudad']?>
                </option>
                <?php
            }?>
            </select>
        </div>

        <br>

        <div>
            <label>Genero: </label><br>
            <?php
            foreach ($generos as $key => $value){
            ?>
            <label for="gen_<?=$value['id_genero']?>">            
                <input id="gen_<?=$value['id_genero']?>" type="radio" name="genero" value="<?=$value['id_genero']?>"
                <?php if ($value['id_genero'] == $usuario[0]['id_genero']){ ?>
                checked
                <?php } ?>
                >
                <?=$value['genero']?>
            </label>
            <br>
            <?php
            }
            ?>
        </div>

        <br>

        <div>
            <label>Lenguajes de Programación: </label><br>
            <?php
            foreach ($lenguajes as $key => $value){
                ?>
            <label for="len_<?=$value['id_lenguaje']?>">            
                <input id="len_<?=$value['id_lenguaje']?>" type="checkbox" name="lenguaje[]" value="<?=$value['id_lenguaje']?>"
                <?php if (in_array($value['id_ciudad'], )){ ?>
                selected
                <?php } ?>
                >
                <?=$value['lenguaje']?>
            </label>
            <br>
            <?php
            }
            ?>
        </div>

        <br>        
        <input type="submit" value="Enviar">
    
    </fieldset>

</form>