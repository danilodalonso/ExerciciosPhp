<?php

$numInicial=1;
$numFinal=50;

$divisor=7;

$contador = $numInicial;

    echo "Entre " . $numInicial . " e " . $numFinal . " somente os números abaixo são divisíveis por " . $divisor . ":<br><br>";

while($contador <= $numFinal){
    $resto = $contador % $divisor;
    if($resto == 0){
        echo $contador . "<br>";
        
    }
    $contador += 1;
}



?>