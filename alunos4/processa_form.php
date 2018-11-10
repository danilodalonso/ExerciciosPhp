<?php

echo "Os dados enviados foram: <br>";
echo "Nome: " . $_POST["nome"] . "<br>";
echo "Sobrenome: " . $_POST["sobrenome"] . "<br>";
echo "Período: <br>";
if($_POST["periodo"] == "M"){
    echo "Manhã<br>";
}elseif($_POST["periodo"] == "T"){
    echo "Tarde<br>";
}elseif($_POST["periodo"] == "N"){
    echo "Noite<br>";
}else{
    echo "Aluno não informou o período.<br>";
}


?>