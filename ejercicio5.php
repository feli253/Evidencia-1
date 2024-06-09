<?php

$edad = readline("Ingrese su edad: ");


$licencia = ($edad >= 18) ? (readline("¿Tienes licencia de conducir?: ") == "si" ? "Puedes conducir" : "Debes obtener una licencia de conducir primero") : "No puedes conducir";


echo $licencia;
?>