

<form method="post">
    
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control"> 
    </div>
    <div class="mb-3">
        <label>Cargo</label>
        <input type="text" name="cargo" class="form-control"> 
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="text" name="email" class="form-control"> 
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="text" name="senha" class="form-control"> 
    </div>
    <div class="mb-3">
        <button type="submit" name="cadastro" class="btn btn-primary">Enviar</button>
    </div>
    </form>

    <?php 

include ("config.php");
if(isset($_POST["cadastro"])){
    $nome = $_POST["nome"];
    $cargo = $_POST["cargo"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "INSERT INTO cad_star (nome,cargo,email,senha) VALUES ('{$nome}','{$cargo}','{$email}','{$senha}')";

    $res = $conn->query($sql);
}
?>