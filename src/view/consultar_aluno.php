<?php
require_once "../../validador_acesso.php";
require_once "../view/Classes.php";

  $cadastroAlunos = new CadastroAlunos();

  // Lê os alunos do arquivo
  $cadastroAlunos->lerAlunosDoArquivo('../../arquivo.txt');

  // Agora, $cadastroAlunos->listarAlunos() retornará os alunos lidos do arquivo
  $alunos = $cadastroAlunos->listarAlunos();

?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>Cadastro Alunos - Consultar</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 60px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark" style='background-color:#070F2B;'>
    <div class="container-fluid" style="justify-content:space-between;">
      <a href="#" class="navbar-brand" style='display:flex; justify-content:center; align-items:center; gap:8px; font-size:25px; color:beige;'>
          <img src="../../LogoCadastro.png" width="50" height="50" class="d-inline-block align-top" alt="Logo.png">
          Cadastro Alunos
      </a>

        <span class="navbar-text">
          <a class="nav-link" href="../../logoff.php" style="color:beige;">SAIR</a>
        </span>

    </div>
  </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

              <?php foreach($alunos as $aluno) { ?>
                  <div class="card mb-3 bg-light">
                      <div class="card-body">
                          <h5 class="card-title"><?= $aluno->getNome() ?></h5>
                          <h6 class="card-subtitle mb-2 text-muted"><?= $aluno->getMatricula() ?></h6>
                          <p class="card-text"><?= $aluno->getCurso() ?></p>
                          
                          <form action="excluir_aluno.php" method="post">
                              <input type="hidden" name="matricula" value="<?= $aluno->getMatricula() ?>">
                              <button type="submit" class="btn btn-danger">Excluir</button>
                          </form>

                          <form action="editar_aluno.php" method="get">
                              <input type="hidden" name="matricula" value="<?= $aluno->getMatricula() ?>">
                              <button type="submit" class="btn btn-warning">Editar</button>
                          </form>
                      </div>
                  </div>
              <?php } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-info btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>