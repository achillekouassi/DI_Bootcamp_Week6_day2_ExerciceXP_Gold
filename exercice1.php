<?php

  function fact($nombre){ 
    $f = 0; 
    for ($i = 0; $i <= $nombre; $i++){ 
      $f = $f * $i; 
    } 
    return $f; 
  } 
  $nombre = $_GET["nombre"] ?? "";
  $f = fact($nombre); 
  echo "La factorielle de $nombre est $f"; 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <form method="get">
        <label for="">Entrer un nombre</label>
        <input type="number" name="nombre">
        <input type="submit" >
    </form>
    </body>
</html>