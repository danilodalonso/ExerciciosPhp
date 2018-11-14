<?php

$idUsuario = $_GET["id"];

if($idUsuario > 0){

    $servidor = "cursophp_db_1";
    $usuario = "root";
    $senha = "phprs";
    $banco = "curso_php";

    $conn = new mysqli($servidor, $usuario, $senha, $banco);

if($conn->connect_error){
    die("Erro ao tentar criar a conexão" . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios WHERE id = ".$idUsuario;

$result = $conn->query($sql);
if($result->num_rows > 0){

    $row = $result->fetch_assoc();
    $id = $row["id"];
    $email = $row["email"];
    $senha_usuario = $row["senha"];
    $status = $row["status"];
}
}

?>

<!DOCTYPE html>
<html>

    <head>
        <title>Formulário de usuário</title>
    </head>
    <body>
        <form action="gravar_tarefa.php" method="POST">
            <label>E-mail</label><br/>
            <input type="text" name="email" value="<?=$email?>"/><br/>

            <label>Senha</label><br/>
            <input type="password" name="senha" value="<?=$senha_usuario?>"/><br/>

            <label>Status</label><br/>
            <select name="status">
                <option value ="0" <?=$row["status"]==0?"SELECTED":"";?> >Desativado</option>
                <option value ="1" <?=$row["status"]==1?"SELECTED":"";?>>Ativado</option>

            </select>

            <br><br>

            <input type="submit" value="Gravar Dados"/><br>
        </form>


    </body>


</html>