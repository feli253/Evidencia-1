<?php

#solicitar dimensiones de terreno en metros l x a 
#terreno  >= 100m2 = adecuados para cultivos extensos: indicado para jardin o huerto

$largo = intval(readline("Digite el largo de su terreno en metros: "));
$ancho = intval(readline("Digite el ancho de su terreno en metros: "));
$total_terreno = $largo * $ancho;

$respuesta = ($total_terreno >= 1000) ? "adecuados para cultivos extensos": "indicado para jardin o huerto";
echo $respuesta;