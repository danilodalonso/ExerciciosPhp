<?php

$numero = 10;
$div10 = 10;
$div5 = 5;
$div2 = 2;
$opcao = 1

switch($opcao){
    case(1):
    $numero % $div10 == 0; 
    echo "O número " . $numero . " é divisível por 10";
    
    case(2):
    $numero % $div5 == 0;
    echo "O número " . $numero . " é divisível por 5";

    case(3):
    $numero % $div2 == 0;
    echo "O número " . $numero . " é divisivel por 2";

    default:
        echo "O número " . $numero . " não é divisível por 10, por 5 nem por 2.";
        break;

}

?>