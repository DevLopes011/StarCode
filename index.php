<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Code</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"  href="index.php">Star Code</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=entrar">Entrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar usuários</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Cadastro usuários</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col mt-5">
    <?php
        include ("config.php");
        switch(@$_REQUEST["page"])  {
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
    
        }
?>

    </div>
  </div>
</div>



    
</body>
</html>