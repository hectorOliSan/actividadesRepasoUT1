# actividadesRepasoUT1

## Actividad 1
Implementa en un fichero .php las siguientes funciones:

- "busca_clave_array($array, $clave)" - Devuelve verdadero en caso de que la clave pasada por parámetro exista en el array. Falso en caso contrario.
- "busca_valor_array($array, $valor)" - Devuelve verdadero en caso de que el valor pasado por parámetro exista en el array. Falso en caso contrario.
- "busca_texto_fichero($nombreFichero, $arrayTextos) -  El array "$arrayTextos" contiene una string en cada posición. La función deberá buscar el número de ocurrencias de cada string en el fichero y devolver un array donde cada posición contenga los pares <string> => <numerodeocurrencias> 
Crea otro fichero .php que incluya al anterior y que te permita probar todas las funciones implementadas.

## Actividad 2
Crea un PHP (index.php) que permita construir formularios HTML "a medida", en función del contenido de un fichero CSV donde cada línea contendrá los datos de cada uno de los campos. Su formato será el siguiente:

NOMBREDELCAMPO;TIPO;OPCION1,OPCION2,OPCION3

En caso de que el campo no tenga opciones, el tercer campo tendrá el carácter "-"

Un ejemplo del fichero podría ser el siguiente:

- nombre;text;-
- apellido;text;-
- sexo;radio;hombre,mujer
- hobbies;checkbox;deporte,música,cine,lectura
- estudios;textarea;-

## Actividad 3
Tienes 3 arrays donde almacenas el nombre, posición, dorsal, altura y peso de los jugadores de 3 equipos de fútbol. Cada uno de esos arrays tienen el mismo nombre y están definidos en un PHP diferente: equipo1.php, equipo2.php y equipo3.php

Crea un PHP (index.php) que contenga un formulario HTML que permita escoger el equipo cuyos datos se mostrarán por pantalla. En función del equipo que se seleccione, carga el PHP correspondiente y muéstralo por pantalla.

## Actividad 4
Implementa una calculadora en PHP de forma que se solicite al usuario mediante un formulario el primer operador, el segundo operador y el operando ("+","-","/" o "*"). Mediante un botón se realizará la operación correspondiente y se mostrará al usuario el resultado. 
