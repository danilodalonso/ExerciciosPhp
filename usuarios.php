<?php


$servidor = "cursophp_db_1";
$usuario = "root";
$senha = "phprs";
$banco = "curso_php";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if($conn->connect_error){
    die("Erro ao tentar criar a conexão" . $conn->connect_error);
}

$sql = "SELECT * FROM `usuarios`";
$result = $conn->query($sql);


if($result->num_rows>0){
    echo "Número de registros retornados " . $result->num_rows . "<br><br>";

    while($row = $result->fetch_assoc() ){
        echo "id: " . $row["id"] . "<br>";
        echo "e-mail: " . $row["e-mail"] . "<br>";
        echo "senha: " . $row["senha"] . "<br>";
        echo "<hr>";
    }
}else{
    echo "Ele não retornou nenhum registro";

    
}


$conn -> close();



?>