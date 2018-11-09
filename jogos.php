<?php

$times = array (
    "América Mineiro",
    "Atlético Mineiro",
    "Atlético Paranaense",
    "Bahia",
    "Botafogo",
    "Ceará",
    "Chapecoense",
    "Corinthians",
    "Cruzeiro",
    "Flamengo",
    "Fluminense",
    "Grêmio",
    "Internacional",
    "Palmeiras",
    "Paraná",
    "Santos",
    "São Paulo",
    "Sport",
    "Vasco da Gama",
    "Vitória",

);

$adversarios = array (
    "América Mineiro",
    "Atlético Mineiro",
    "Atlético Paranaense",
    "Bahia",
    "Botafogo",
    "Ceará",
    "Chapecoense",
    "Corinthians",
    "Cruzeiro",
    "Flamengo",
    "Fluminense",
    "Grêmio",
    "Internacional",
    "Palmeiras",
    "Paraná",
    "Santos",
    "São Paulo",
    "Sport",
    "Vasco da Gama",
    "Vitória",

);

foreach($times as $time){

    foreach($adversarios as $adversario){
    echo $time . " X " . $adversario;
    echo "<br>";
}
}
?>