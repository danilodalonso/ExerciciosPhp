<?php

$numero = 10;
$div1 = 10;
$div2 = 5;
$div3 = 2;

$divisivel = false;

if(($numero % $div1)==0){
    echo "$numero é divisível por $div1<br>";
    $divisivel = true;
}

if(($numero % $div2)==0){
    echo "$numero é divisível por $div2<br>";
    $divisivel = true;
}

if(($numero % $div3)==0){
    echo "$numero é divisível por $div3<br>";
    $divisivel = true;
}

if(!$divisivel)
    echo "$numero não é divisível por nenhum dos números citados(10, 5 ou 2).";

?>