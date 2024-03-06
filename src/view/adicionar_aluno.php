<?php
// abrir_chamado.php
require_once "../../validador_acesso.php";
?>

<!-- O conteúdo do arquivo abrir_chamado.php permanece o mesmo, mas você pode querer otimizar o código CSS e HTML. -->
<html>
  <head>
    <meta charset="utf-8" />
    <title>Cadastro Alunos - Adicionar</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-abrir-chamado {
        padding: 60px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }

      .btn-hover:hover {
        background-color: #070F4B !important;
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

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Cadastro de Aluno
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form method="post" action="registra_aluno.php">
                    <div class="form-group">
                      <label>Nome</label>
                      <input name="nome" type="text" class="form-control" placeholder="Nome">
                    </div>

                    <div class="form-group">
                      <label>Matrícula</label>
                      <input name="matricula" type="text" class="form-control" placeholder="Matrícula">
                    </div>
                    <?php if (isset($_GET['erro']) && $_GET['erro'] == 'matricula_existente'): ?>
                        <div class="text-danger">
                            Matrícula Já Adicionada.
                        </div>
                    <?php endif; ?>
                    
                    <div class="form-group">
                      <label>Curso</label>
                      <select name="curso" class="form-control">
                        <option>Administração</option>
                        <option>Arq e Urbanismo</option>
                        <option>Biomedicina</option>
                        <option>Ciências Contábeis</option>
                        <option>Direito</option>
                        <option>Enfermagem</option>
                        <option>Eng. Agronômica</option>
                        <option>Eng. Civil</option>
                        <option>Eng. de Software</option>
                        <option>Eng. Elétrica</option>
                        <option>Eng. Mecânica</option>
                        <option>Farmácia</option>
                        <option>Fisioterapia</option>
                        <option>Medicina</option>
                        <option>Med. Veterinária</option>
                        <option>Nutrição</option>
                        <option>Odontologia</option>
                        <option>Psicologia</option>
                        <option>Publicidade e Propaganda</option>
                      </select>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                        <a class="btn btn-lg btn-info btn-block" href="home.php">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-block btn-hover" type="submit" style='background-color:#070F2B; color:beige;'>Adicionar Aluno</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>