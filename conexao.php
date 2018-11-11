<?php


$servidor = "cursophp_db_1";
$usuario = "root";
$senha = "phprs";

$conn = new mysqli($servidor, $usuario, $senha);

if($conn->connect_error){
    die("Erro ao tentar criar a conexão" . $conn->connect_error);
}
echo "Conexão efetuada com sucesso";