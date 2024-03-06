<?php
    if (isset($_POST['nome'], $_POST['matricula'], $_POST['curso'])) {
        $nome = $_POST['nome'];
        $matricula = $_POST['matricula'];
        $curso = $_POST['curso'];

        // Ler o arquivo e buscar a linha do aluno
        $arquivo = file('../../arquivo.txt');
        $linhasAtualizadas = [];
        foreach ($arquivo as $linha) {
            $dados = explode('#', $linha);
            if ($dados[1] == $matricula) {
                // Atualizar os dados do aluno
                $linha = implode('#', [$nome, $matricula, $curso]) . PHP_EOL;
            }
            $linhasAtualizadas[] = $linha;
        }

        // Reescrever o arquivo com os dados atualizados
        file_put_contents('../../arquivo.txt', $linhasAtualizadas);

        // Redirecionar ou mostrar uma mensagem de sucesso
        header('Location: consultar_aluno.php');
    }
?>