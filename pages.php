<?php
    include ("config.php");
    

    switch(@$_REQUEST["page"]) {
        case "novo":
            include("novo-usuario.php");
        break;
        
        case "listar":
            include("listar-usuario.php");
        break;
     
        case "salvar":
            include("salvar-usuario.php");
        break;
        case "entrar":
            include("entrar.php");
        break;
        case "editar":
            include("editar-usuario.php");
        break;
        case "excluir":
            include("editar-usuario.php");
        break;

    }

?>