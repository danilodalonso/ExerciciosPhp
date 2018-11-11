<?php

echo "Os dados enviados foram: <br>";
echo "Nome: " . $_POST["nome"] . "<br>";
echo "Sobrenome: " . $_POST["sobrenome"] . "<br>";
echo "Matérias: <br>";
foreach($_POST["materias"] as $materias){
    echo $materias . ",";
}
print("<pre>");
var_dump($_POST);

?>