<?php

$cidades = array(

    array(
    "nome" => "São Paulo",
    "aniversário" => "25 de janeiro",
    "fundação" => "25 de janeiro de 1554",
    "gentílico" => "Paulistano",
    "prefeito" => "Bruno Covas"   
    ), 

    array(
    "nome" => "Curitiba",
    "aniversário" => "29 de março",
    "fundação" => "29 de março de 1693",
    "gentílico" => "Curitibano",
    "prefeito" => "Rafael Greca"   
    ),
    
    array(
        "nome" => "Belo Horizonte",
        "aniversário" => "12 de dezembro",
        "fundação" => "12 de dezembro de 1901",
        "gentílico" => "Belo-horizontino",
        "prefeito" => "Alexandre Kalil"
    ),
 ); 
 
 foreach($cidades as $cidade){
     echo "Nome: " . $cidade["nome"] . "<br>";
     echo "Aniversário: " . $cidade["aniversário"] . "<br>";
     echo "Fundação: " . $cidade["fundação"] . "<br>";
     echo "Gentílico: " . $cidade["gentílico"] . "<br>";
     echo "Prefeito: " . $cidade["prefeito"] . "<br>";
     echo "<hr>";
 }

?>