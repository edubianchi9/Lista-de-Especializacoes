<?php

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profissionais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Plataforma de Agendamento</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="?page=novo">Novo Cadastro</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="?page=listar" >Listar Profissionais</a>
  </li>
</ul>

<div class="container">
  <div class="row">
    <div class="col mt-5">
      <?php
      include("config.php");
        switch(@$_REQUEST["page"]){
          case "novo":
        include("professional-create.php");
        break;
        case "listar":
          include("professional-list.php");
          break;
          case "salvar":
            include("salvar-professional.php");
            break;
          case "editar":
            include("editar-professional.php");
            break;
          default;
          print"<h1>Seja Bem Vindo!</h1>";
      }
    ?>
    </div>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>