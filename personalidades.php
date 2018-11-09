<?php

$personalidades = array(
    "Dom Pedro I",
    "Marco Polo",
    "Joana D'Arc",
    "Napoleão",
    "Alexandre",
    "Albert Einstein",
    "Leonardo Da Vinci",
    "Picasso",
    "Salvador Dali",
    "Lampião",
    "Cristóvao Colombo",
    "Galileu Galilei",
    "Martinho Lutero",
    "William Shakespeare",
    "Nikola Tesla",
    "Graham Bell",
    "Beethoven",
    "Michelangelo",
    "Bach",
    "Vasco da Gama"
);

echo " Primeira lista:<br><br>";
foreach($personalidades as $personalidade){
    echo $personalidade . "<br>";
}

asort ($personalidades);
echo "<br><br> Lista em ordem crescente:<br><br>";
foreach($personalidades as $personalidade){
    echo $personalidade . "<br>";
}

arsort ($personalidades);
echo "<br><br> Lista em ordem decrescente:<br><br>";
foreach($personalidades as $personalidade){
    echo $personalidade . "<br>";
}

shuffle ($personalidades);
echo "<br><br> Lista sorteada:<br><br>";
foreach($personalidades as $personalidade){
    echo $personalidade . "<br>";
}



?>