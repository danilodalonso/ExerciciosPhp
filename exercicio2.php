<?php

$numero = 15;
$div10 = 10;
$div5 = 5;
$div2 = 2;


switch($numero){
    case($numero % $div10 == 0):
        echo "O número " . $numero . " é divisível por 10<br>";
    
    case($numero % $div5 == 0):
        echo "O número " . $numero . " é divisível por 5<br>";
    
    case($numero % $div2 == 0):
        echo "O número " . $numero . " é divisivel por 2<br>";
        break;
    default:
        echo "O número " . $numero . " não é divisível por 10, nem por 5 e nem por 2.<br>";
        break;

}

?>