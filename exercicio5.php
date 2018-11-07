<?php

$numero = 5;
$contador = 1;

echo "A tabuada do número " . $numero . " é:<br><br>";

while($contador <= 10){
    $tabuada = $numero * $contador;
    echo $numero . " X " . $contador . " = " . $tabuada . "<br>";
    $contador +=1;
}

?>
