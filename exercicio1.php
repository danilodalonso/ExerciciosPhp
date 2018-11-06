<?php

$n1 = 10;
$n2 = 5;

$soma = $n1 + $n2;
echo "O valor da soma é " . $soma . "<br><br>";
if($soma <= 20){
    $soma = $soma - 5;
    
}else{
    $soma = $soma + 8;

}
echo " O resultado final é " . $soma;
?>