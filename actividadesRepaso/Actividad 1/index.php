<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actividad 1</title>
</head>
<body>
  <?php
    include "funciones.php";

    $array = array("Nombre" => "Héctor", "Apellidos" => "Olivares");

    if(busca_clave_array($array, "Nombre")) echo "<h3>busca_clave_array() == True</h3>";
    else echo "<h3>busca_clave_array() == False</h3>";

    if(busca_valor_array($array, "Héctor")) echo "<h3>busca_valor_array() == True</h3>";
    else echo "<h3>busca_valor_array() == False</h3>";

    $arrayTextos = array("hola", "a", "cielo", "puerta", "aguacate");
    $ocurrencias = busca_texto_fichero("fichero.txt", $arrayTextos);
    echo "<h3>";
    print_r($ocurrencias);
    echo "</h3>";
  ?>
</body>
</html>