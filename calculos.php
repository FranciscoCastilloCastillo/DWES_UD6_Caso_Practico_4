<?php

  //Comprobamos si están definidas todas las variables
  if(isset($_POST["nombre"]) && !empty($_POST["nombre"])
      && isset($_POST["apellidos"]) && !empty($_POST["apellidos"])
        && isset($_POST["curso"]) && !empty($_POST["curso"])
          && isset($_POST["ciclo"]) && !empty($_POST["ciclo"])
            && isset($_POST["prog"]) && (!empty($_POST["prog"]) || $_POST["prog"] >= 0)
              && isset($_POST["ed"]) && (!empty($_POST["ed"]) || $_POST["ed"] >= 0)
                && isset($_POST["lm"]) && (!empty($_POST["lm"]) || $_POST["lm"] >= 0)
                  && isset($_POST["bbdd"]) && (!empty($_POST["bbdd"]) || $_POST["bbdd"] >= 0)){

    //Obtenemos las variables
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $curso = $_POST["curso"];
    $ciclo = $_POST["ciclo"];
    $prog = $_POST["prog"];
    $ed = $_POST["ed"];
    $lm = $_POST["lm"];
    $bbdd = $_POST["bbdd"];

    if($prog >= 0 && $prog <= 10
        && $ed >= 0 && $ed <= 10
          && $lm >= 0 && $lm <= 10
              && $bbdd >= 0 && $bbdd <= 10){

      //Creamos un array para las Calificaciones
      $calificaciones = ["Programación" =>$prog,"Entorno de Desarrollo" =>$ed,
        "Lenguajes y Marcas" =>$lm, "Bases de Datos" =>$bbdd];

      //Datos de cabecera
      echo "<H1> Alumno: ".$nombre." ".$apellidos.". Curso: ".$curso." / ".$ciclo."</h1></br>";

      //Calculos con las notas
      $nota_media = 0;

      //Nota más alta
      $nota_alta = $calificaciones["Programación"];
      $calif_alta = "Programación";

      //Nota más baja
      $nota_baja = $calificaciones["Programación"];
      $calif_baja = "Programación";

      foreach ($calificaciones as $key => $value) {
        $nota_media+=$value;
        if($calificaciones[$key]>$nota_alta){
          $nota_alta = $calificaciones[$key];
          $calif_alta = $key;
        }
        if($calificaciones[$key]<$nota_baja){
          $nota_baja = $calificaciones[$key];
          $calif_baja = $key;
        }
      }

      echo "<H1> La nota media es: ".($nota_media/4)."</h1>";
      echo "<H1> La nota más baja es de: ".$calif_baja." con un ".$nota_baja."</h1>";
      echo "<H1> La nota más alta es de: ".$calif_alta." con un ".$nota_alta."</h1>";
    }
    else{
      echo "<h1>Alguna de las notas introducidas no tiene un valor válido. Debe ser entre 0 y 10</h1>";
    }
  }
  else{
    echo "<h1>En principio no debe entrar aquí porque en el formulario es required</h1>";
  }
?>
