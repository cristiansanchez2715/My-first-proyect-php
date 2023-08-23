<?php
$horas =  readline("por favor ingrese el numero de horas ");
$minutos = readline("por favor ingrese el numero de minutos ");
$segundos = readline("por favor ingrese el numero de segundos ");

$total1 = $horas * 3600;
$total2 = $minutos * 60;
$totalSegundos = $total1 + $total2 + $segundos;

echo 
" 
<div>
<h1> El total de segundos es de "  . $totalSegundos . "  </h1>
</div>"
?>
