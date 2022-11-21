<h1>Editar usuário</h1>
<?php
    $sql = "SELECT * FROM cad_star WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();

?>
<form method="post">
    
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
        <?php print $row->nome; ?> 
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