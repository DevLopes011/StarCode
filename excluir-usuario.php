<?php

    if (isset($_POST['excluir'])){
        $apaga = exclui();
    }
    function exclui () {
        include "config.php";
        $sql = "DELETE FROM cad_star WHERE id=".$_REQUEST["id"];
        $res = $conn->query($sql);

        if ($res==true){
            print "<script>alert('Usuário excluido com successo!');</script>";
        }else{
            print "<script>location.href='?page=listar';</script>";
        }
    }

?>