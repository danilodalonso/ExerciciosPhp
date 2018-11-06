<?php
    $numInicial=1;
    $numFinal=20;

    $divisor=2;

    $contador = $numInicial;
         
        echo "Entre " . $numInicial . " e " . $numFinal . " somente os números abaixo são pares:<br><br>";

        while($contador <= $numFinal){
            $resto = $contador % $divisor;
            if($resto == 0){
            echo $contador . "<br>";
        }
            $contador += 1;
        }
    
   


?>