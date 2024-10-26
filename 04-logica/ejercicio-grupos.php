<?php
/**Los alumnos de un curso se han dividio en dos grupos, A y B, de a cuerdo con el sexo y el nombre. El grupo A esta formado por las mujeres con nombre anterior a la M; y los hombres con nombres posterior a la N. 
 * Y el grupo B por el resto. Escribir un programa que pregunte al usuario su nombre y sexo y muestre por pantalla el grupo al que pertenece.
 */

  $nombre = strtolower("fanuela");
  $genero = strtolower("M");

  function determinarGrupo($nombre, $genero){

    if (($nombre[0] <= "m" and $genero == "f" ) 
    || ($nombre[0] >= "n" and $genero == "m")){
      return "Grupo A";
    }
    else{
      return "Grupo B";
    }


  }

  echo determinarGrupo($nombre, $genero);


 ?>