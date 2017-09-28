<?php
  include_once("instance.php");

  $nomInci = isset($_GET["nom"]) ? $_GET["nom"] : '';
  $apesInci = isset($_GET["apes"]) ? $_GET["apes"] : '';
  $asuntoInci = isset($_GET["asunto"]) ? $_GET["asunto"] : '';
  $descripcionInci = isset($_GET["descripcion"]) ? $_GET["descripcion"] : '';
  $dbAccess->query("INSERT INTO Incidencias (NombreAutor,ApellidosAutor,Asunto,Descripcion) VALUES ('$nomInci','$apesInci','
    $asuntoInci','$descripcionInci')");
  header('location: index.php');
?>
