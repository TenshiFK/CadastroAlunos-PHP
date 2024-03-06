<?php
    session_start();
    require_once "../../validador_acesso.php";

    $matricula = $_POST['matricula'];

    // Lendo o arquivo e removendo a linha correspondente
    $arquivo = file('../../arquivo.txt');
    $linhas = array();
    foreach ($arquivo as $linha) {
        $dados = explode('#', $linha);
        if ($dados[1] == $matricula) {
            continue;
        }
        $linhas[] = $linha;
    }

    // Escrevendo o arquivo de volta sem a linha excluída
    file_put_contents('../../arquivo.txt', $linhas);

    // Redirecionando de volta para a página de consulta
    header('Location: consultar_aluno.php');
    exit;
?>