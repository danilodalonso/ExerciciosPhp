<?php

$numero = 10;
$div10 = 10;
$div5 = 5;
$div2 = 2;




if($numero % $div10 == 0):
    echo "O número " . $numero . " é divisível por 10<br>";
    
elseif($numero % $div5 == 0):
    echo "O número " . $numero . " é divisível por 5<br>";

elseif($numero % $div2 ==0):
        echo "O número " . $numero . " é divisível por 2<br>";

else:
    echo "O número " . $numero . " não é divisível por 10, por 5 e nem por 2.<br>";

endif;

?>