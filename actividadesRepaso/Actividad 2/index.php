<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actividad 2</title>
</head>
<body>
  <?php
    $contenido=[];
    $ar = fopen("fichero.csv","r") or die("No se pudo abrir el archivo");
    while (!feof($ar)) {
      $linea = fgets($ar);
      array_push($contenido, explode(";", $linea));
    }
    fclose($ar);

    foreach($contenido as $array => $valores) {
      echo "<label for='".$valores[0]."'>".ucfirst($valores[0]).": </label>";
      switch ($valores[1]) {
        case "text":
          echo "<input type='".$valores[1]."' name='".$valores[0]."'><br>";
          break;
        case "number":
          echo "<input type='".$valores[1]."' name='".$valores[0]."' min=0 max=99><br>";
          break;
        case "radio":
          $opciones = explode(",", $valores[2]);
          echo "<br>";
          foreach($opciones as $clave => $valor) {
            echo "<input type='".$valores[1]."' name='".$valores[0]."' value='".$valor."'> ".ucfirst($valor)."<br>";
          }
          break;
        case "checkbox":
          $opciones = explode(",", $valores[2]);
          echo "<br>";
          foreach($opciones as $clave => $valor) {
            echo "<input type='".$valores[1]."' name='".$valores[0]."' value='".$valor."'> ".ucfirst($valor)."<br>";
          }
          break;
        case "textarea":
          echo "<br>";
          echo "<".$valores[1]." name='".$valores[0]."' rows=5 cols=50></".$valores[1]."><br>";
          break;
        case "select":
          echo "<".$valores[1]." name='".$valores[0]."'>";
          $opciones = explode(",", $valores[2]);
          foreach($opciones as $clave => $valor) {
            echo "<option value='".$valor."'>".ucfirst($valor)."</option><br>";
          }
          echo "</".$valores[1].">";
      }
      echo "<br>";
    }
  ?>
</body>
</html>