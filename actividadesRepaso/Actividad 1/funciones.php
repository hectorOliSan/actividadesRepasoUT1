<?php
  function busca_clave_array($array, $clave) {
    if (gettype($array) == "array") {
      foreach($array as $dato1 => $dato2) {
        if($dato1 == $clave) return true;
      }
    }
    return false;
  }

  function busca_valor_array($array, $valor) {
    if (gettype($array) == "array") {
      foreach($array as $dato1 => $dato2) {
        if($dato2 == $valor) return true;
      }
    }
    return false;
  }

  function busca_texto_fichero($nombreFichero, $arrayTextos) {
    $ocurrencias = array();
    foreach($arrayTextos as $clave => $valor) {
      $ocurrencias[$valor] = 0;
    }
    $contenido = array();
    if(file_exists($nombreFichero)) {
      $ar = fopen($nombreFichero,"r") or die("No se pudo abrir el archivo");
      while (!feof($ar)) {
        $linea = fgets($ar);
        array_push($contenido, explode(" ", $linea));
      }
      fclose($ar);
    }
    foreach($contenido as $clave => $valor) {
      foreach($valor as $clave2 => $valor2) {
        if(busca_clave_array($ocurrencias, trim($valor2))) {
          $ocurrencias[strtolower(trim($valor2))] += 1;
        }
      }
    }
    return $ocurrencias;
  }
?>