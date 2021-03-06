<?php

require_once 'Curso.php';

$curso = new Curso('Collections com PHP');
$curso->adicionaAlteracao('Primeira aula criada');
$curso->adicionaAlteracao('Segunda aula modificada');
$curso->adicionaAlteracao('Terceira aula concluída');

$lista = $curso->recuperaAlteracoes();
$lista->shift();

foreach ($curso->recuperaAlteracoes() as $alteracao) {
    echo $alteracao . PHP_EOL;
}
