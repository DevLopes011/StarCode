<h1>Editar usuário</h1>
<?php
    $sql = "SELECT * FROM cad_star WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();

    
    if (isset($_POST['cadastro'])) {
        $result = edita();
    } 
    function edita(){
        include "config.php";
        
        $nome = $_POST["nome"];
        $cargo = $_POST["cargo"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
    
        $sql = "UPDATE cad_star SET
            nome='{$nome}',
            cargo='{$cargo}',
            email='{$email}',
            email='{$senha}'
            WHERE id=".$_REQUEST["id"];
    
        $res = $conn->query($sql);
    
        if ($res==true){
            print "<script>alert('Usuário editado com sucesso!');</script>";
        }else{
            print "<script>location.href='?page=listar';</script>";
        }
    }

#    if (isset($_POST['excluir'])){
#        $apaga = excui();
#    }
#    function excui () {
#        include "config.php";
#        $sql = "DELETE FROM cad_star WHERE id=".$_REQUEST["id"];
#        $res = $conn->query($sql);
#
#        if ($res==true){
#            print "<script>alert('Usuário excluido com successo!');</script>";
#        }else{
#            print "<script>location.href='?page=listar';</script>";
#        }
#    }

?>

<form actio="?page=salvar" method="post">
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
        <button type="submit" name="cadastro" class="btn btn-primary">Editar</button>
    </div>

</form>
