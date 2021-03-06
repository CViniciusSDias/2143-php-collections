<?php

require_once 'Curso.php';

$curso = new Curso('Collections com PHP');
$curso->adicionaAlteracao('Primeira aula criada');
$curso->adicionaAlteracao('Segunda aula modificada');
$curso->adicionaAlteracao('Terceira aula concluída');

foreach ($curso->recuperaAlteracoes() as $alteracao) {
    echo $alteracao . PHP_EOL;
}

$curso->adicionaAlunoParaEspera('Patricia Freitas');
$curso->adicionaAlunoParaEspera('Vinicius Dias');
$curso->adicionaAlunoParaEspera('Ana Maria');

foreach ($curso->recuperaAlunosEsperando() as $aluno) {
    echo $aluno . PHP_EOL;
}
