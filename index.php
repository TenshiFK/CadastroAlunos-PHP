<?php

?>

<html>
    <head>
        <meta charset="UTF-8">
        <!--Meta UTF-->
        <title>Cadastro Alunos</title>
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <style> 
            .card-login{
                padding: 60px 0 0 0;
                width: 350px;
                margin: 0 auto;
            }
            .btn-hover:hover {
            background-color: #070F4B !important;
            }
        </style>

    </head>
    
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark" style='background-color:#070F2B;'>
            <div class="container-fluid">
            <a href="#" class="navbar-brand" style='display:flex; justify-content:center; align-items:center; gap:8px; font-size:25px; color:beige;'>
                <img src="LogoCadastro.png" width="50" height="50" class="d-inline-block align-top" alt="Logo.png">
                Cadastro Alunos
            </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="card-login">
                    <div class="card">
                        <div class="card-header">
                            Login
                        </div>
                        <div class="card-body">
                            <form action="valida_login.php" method="post">
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <input name="senha" type="password" class="form-control" placeholder="Senha">
                                </div>
                                <!--PHP, que checa se o login está correto, caso não esteja, mande um erro;-->
                                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro') {?>
                                <div class="text-danger">
                                    Usuário ou senha Inválido(s).
                                </div> 
                                    <?php } ?> <!--FECHA A TAG PHP, colocando o erro somente quando for verdade-->
                                <button class="btn btn-lg btn-block btn-hover" type="submit" style='background-color:#070F2B; color:beige;'>
                                    Entrar!
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>