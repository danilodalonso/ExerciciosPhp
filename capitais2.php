<?php

$capitais2 = array(
    "São Paulo",
    "Rio de Janeiro",
    "Belo Horizonte",
    "Vitória",
    "Curitiba",
    "Rio Grande do Sul",
    "Rio Branco",
    "Manaus",
    "Palmas",
    "Boa Vista",
    "Porto Velho",
    "Brasília",
    "Natal",
    "Recife",
    "Salvador",
    "Fortaleza",
    "Macapá",
    "Belém",
    "Maceió",
    "São Luis",
    "João Pessoa",
    "Teresina",
    "Aracaju",
    "Goiãnia",
    "Cuiabá",
    "Campo Grande",


);

$cidade = "Natal";

if(in_array($cidade,$capitais2)){
    echo $cidade . " é uma capital.";
}else{
    echo $cidade . " não é uma capital.";
}


?>