<!DOCTYPE html>
<html>

    <head>
        <title>Formulário de usuário</title>
    </head>
    <body>
        <form action="gravar_tarefa.php" method="POST">
            <label>E-mail</label><br/>
            <input type="text" name="e-mail"/><br/>

            <label>Senha</label><br/>
            <input type="password" name="senha"/><br/>

            <label>Status</label><br/>
            <select name="status">
                <option value ="0">Desativado</option>
                <option value ="1">Ativado</option>

            </select>

            <br><br>

            <input type="submit" value="Gravar Dados"/><br>
        </form>


    </body>


</html>