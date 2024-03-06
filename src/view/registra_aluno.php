<?php
// registra_chamado.php
session_start();
require_once "../../validador_acesso.php";
require_once "../view/Classes.php";

$matriculaExistente = false;
$arquivo = file('../../arquivo.txt');
foreach ($arquivo as $linha) {
    $dados = explode('#', $linha);
    if ($dados[1] == $_POST['matricula']) {
        $matriculaExistente = true;
        break;
    }
}

if ($matriculaExistente) {
    // Redireciona de volta com uma mensagem de erro
    header('Location: adicionar_aluno.php?erro=matricula_existente');
    exit;
} else {
    // Cria uma instância de Aluno
    $aluno = new Aluno($_POST['nome'], $_POST['matricula'], $_POST['curso']);

    // Cria uma instância de CadastroAlunos
    $cadastroAlunos = new CadastroAlunos();

    // Adiciona o aluno ao cadastro
    $cadastroAlunos->cadastrarAluno($aluno);

    // Salva os alunos no arquivo
    $arquivo = fopen('../../arquivo.txt', 'a');
    fwrite($arquivo, $aluno->getNome() . '#' . $aluno->getMatricula() . '#' . $aluno->getCurso() . PHP_EOL);
    fclose($arquivo);

    // Redireciona para home.php após o processamento do formulário
    header('Location: home.php');
    exit;
}
?>