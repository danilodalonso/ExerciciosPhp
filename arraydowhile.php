<?php

$alunos = array(
    "Isaias",
    "Ezequiel",
    "Jonas",
    "Jeremias",

);

$contador = 0;
$quantidadeItens = count($alunos);

do{
    if($quantidadeItens < 1){
        break;
    }
    echo $alunos [$contador]. "<br>";
    $contador++;

}while ($contador < $quantidadeItens);


?>