<?php

$query = $_GET["q"];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Usuários</title>
    </head>
    <style>
        table{
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width:100%;
        }
        th,td{
            border: 1px solid black;
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even){
            background-color:silver;
        }

    </style>    
    
    
    <body>

        <form action="usuarios.php" method="GET">
            <input type="text" name="q"/>
            <input type="submit" value="Pesquisar"/>
        
        </form>

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
            if($query != ""){
                $sql.= "WHERE email LIKE '%".$query."%'";
            }
            


            $result = $conn->query($sql);


            if($result->num_rows>0){
                echo "Número de registros retornados " . $result->num_rows . "<br><br>";
                echo "<a href='form_usuario.php'>Incluir usuário</a><br><br>";
                echo "<table>";
                echo "<tr><th>ID</th><th>E-mail</th><th>Senha</th><th>Status</th></tr>";

                while($row = $result->fetch_assoc() ){

                    echo "<tr>";
                    
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["senha"] . "</td>";
                    echo "<td>" . $row["status"] . "</td>";
                    echo "<td>";
                    echo "<a href ='apagar_usuario.php?id= ".$row["id"]."'> Apagar</a>";
                    echo "&nbsp; | &nbsp;";
                    echo "<a href ='form_usuario.php?id= ".$row["id"]."'> Editar</a>";
                    echo "</td>";
                    echo "</tr>";
                }

                echo "</table>";
            }else{
                echo "Ele não retornou nenhum registro";

                
            }


            $conn -> close();



        ?>
    </body>
</html>        