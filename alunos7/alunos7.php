<form action="processa_form.php" method="POST">
    <label>Nome</label><br>
    <input type="text" name="nome"/><br>
    <label>Sobrenome</label><br>
    <input type="text" name="sobrenome"/><br>
    <label>Matérias</label><br>
    <select name="materias[ ]" size="3" multiple >
        <option value="M">Matemática</option>
        <option value="P">Português</option>
        <option value="B">Biologia</option>
        <option value="F">Física</option>
        <option value="Q">Química</option>
        <option value="A">Artes</option>
        <option value="FI">Filosofia</option>
        <option value="R">Religião</option>
        <label>Bio</label><br>
        <textarea name="bio" rows="5" cols="50"></textarea><br>

        <label>E-mail</label><br>
        <input type="text" name="e-mail"/><br>
        <label>Senha</label><br>
        <input type="password" name="senha"/><br>

        <br><br>
        
    <input type="submit" value="Enviar dados"/><br>


</form>