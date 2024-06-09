<?php

#total x compra
#3 o + = -20%
# -3 = -10%

$camisas = readline("Digite numero de camisas: ");

$Total = ($camisas <= 3)? "tiene un descuento de 10%" : "tiene un descuento del 20%";

echo $Total;
