<?php

#solicitar x articulos y precio unitario de estos. Calcular descuento
# 10 o + = descuento 10%
# mostrar total a pagar

$cantidad = readline("cantidad de articulos: ");

$total = ($cantidad <= 10)? "Precio de articulo x cantidad ": "Precio de articulo -10% x cantidad ";

echo $total;