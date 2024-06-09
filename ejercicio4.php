<?php
#metodo de siembra 
#  determinar si la estacion es  adecuada (siembra directa o almácigo)
#invierno (abril a noviembre)= almacigo =! siembra directa

$estacion = readline("Ingrese estacion del año enl aque piensa sembrar: ");

$Metodo_de_siembra = ($estacion == "Invierno") || ($estacion == "invierno")? "se recomienda la siembra de almácigo": "se recomienda la siembra de directa";

echo $Metodo_de_siembra;