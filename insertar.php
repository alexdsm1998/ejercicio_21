<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado de equipos por conferencia</title>
  </head>
  <body>
    <?php

    include "db.php";
    //objeto de la conexion
    $nba=new db();

    $resultadoInsert=$nba->insertarequipo($_POST["Nombre"],$_POST["Ciudad"],$_POST["Conferencia"],$_POST["Division"]);

    if ($resultadoInsert==true) {
      $resultado=$nba->devolverEquipo($_POST["Nombre"]);
      $fila=$resultado->fetch_assoc();

      echo "Nombre".$fila['Nombre']."<br>";
      echo "Ciudad".$fila['Ciudad']."<br>";
      echo "<Conferencia>".$fila['Conferencia']."<br>";
      echo "<Division>".$fila['Division']."<br>";
    }else {
      echo "Error";
    }
      ?>
  </body>
</html>
