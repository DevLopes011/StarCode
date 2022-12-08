<h1>Editar usuário</h1>
<?php
    $sql = "SELECT * FROM cad_star WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">

    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
         
    </div>
    <div class="mb-3">
        <label>Cargo</label>
        <input type="text" name="cargo" value="<?php print $row->cargo; ?>" class="form-control"> 
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="text" name="email" value="<?php print $row->email; ?>" class="form-control"> 
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="text" name="senha" value="<?php print $row->senha; ?>" class="form-control"> 
    </div>
    <div class="mb-3">
        <button type="submit" name="editar" class="btn btn-primary">Editar</button>
    </div>


</form>
