<?php
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            include ("config.php");
                if(isset($_POST["cadastro"])){
                    $nome = $_POST["nome"];
                    $cargo = $_POST["cargo"];
                    $email = $_POST["email"];
                    $senha =md5($_POST["senha"]);
                
                    $sql = "INSERT INTO cad_star (nome,cargo,email,senha) VALUES ('{$nome}','{$cargo}','{$email}','{$senha}')";
                
                    $res = $conn->query($sql);
                    if ($res==true){
                        print "<script>alert('Usuário criado com sucesso');</script>";
                    }else{
                        print "<script>location.href='?page=listar';</script>";
                    }  
                }
            break;

        case 'editar':
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
            
            break;
        
        case 'excluir':
                $sql = "DELETE FROM cad_star WHERE id=".$_REQUEST["id"];
                $res = $conn->query($sql);
        
                if ($res==true){
                    print "<script>alert('Usuário excluido com successo!');</script>";
                }else{
                    print "<script>location.href='?page=listar';</script>";
                }
                break;
     }


?>