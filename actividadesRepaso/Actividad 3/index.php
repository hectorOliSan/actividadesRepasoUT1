<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actividad 3</title>
  <style>
    body {
      font-size: 14px;
      font-family: monospace;
    }
  </style>
</head>
<body>
  <form action="" method="POST">
    <select name="equipo">
      <option value="equipo1">Equipo 1</option>
      <option value="equipo2">Equipo 2</option>
      <option value="equipo3">Equipo 3</option>
    </select>
    <input type=submit value="Enviar">
  </form>
  <br>
  <?php
    if(count($_POST)) {
      include $_POST['equipo'].".php";
      foreach($equipo as $clave => $valor) {
        print_r(json_encode($valor, JSON_UNESCAPED_UNICODE));
        echo "<br>";
      }
    }
  ?>
</body>
</html>