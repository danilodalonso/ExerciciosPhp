<?php

$email = $_POST["email"];
$senha_usuario = $_POST["senha"];
$status = $_POST["status"];

$servidor = "cursophp_db_1";
$usuario = "root";
$senha = "phprs";
$banco = "curso_php";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if($conn->connect_error){
    die("Erro ao tentar criar a conexão" . $conn->connect_error);
}

$sql = "INSERT INTO usuarios";
$sql.= " (email, senha, status) ";
$sql.= " VALUES ";
$sql.= "('".$email."',";
$sql.= "'".$senha_usuario."',";
$sql.= "".$status.")";


if($conn->query($sql) === TRUE){
    echo "Dados inseridos com sucesso!<br>";
}else{
    echo "Erro ao tentar inserir dados: " . $conn->error . "<br><br>";
    echo $sql."<br>";
}

$conn->close();


?>

<a href="usuarios.php">Voltar</a>