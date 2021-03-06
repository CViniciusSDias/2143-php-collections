<?php

require_once 'Curso.php';
require_once 'Aluno.php';

$curso = new Curso('Collections com PHP');
$curso->adicionaAlteracao('Primeira aula criada');
$curso->adicionaAlteracao('Segunda aula modificada');
$curso->adicionaAlteracao('Terceira aula concluída');

foreach ($curso->recuperaAlteracoes() as $alteracao) {
    echo $alteracao . PHP_EOL;
}

$curso->adicionaAlunoParaEspera(new Aluno('Patricia Freitas'));
$curso->adicionaAlunoParaEspera(new Aluno('Vinicius Dias'));
$curso->adicionaAlunoParaEspera(new Aluno('Ana Maria'));

echo '------------------------' . PHP_EOL;

foreach ($curso->recuperaAlunosEsperando() as $aluno) {
    echo $aluno->nome . PHP_EOL;
}

$curso->matriculaAluno(new Aluno('Patricia Freitas'));
$curso->matriculaAluno(new Aluno('Rogério'));
$curso->matriculaAluno(new Aluno('Patricia Freitas'));

echo '------------------------' . PHP_EOL;

foreach ($curso->recuperaAlunosMatriculados() as $aluno) {
    echo $aluno->nome . PHP_EOL;
}

$patriciaEstaMatriculada = $curso
    ->recuperaAlunosMatriculados()
    ->contains(new Aluno('Outro'));

var_dump($patriciaEstaMatriculada);