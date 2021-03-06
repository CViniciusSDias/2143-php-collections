<?php

$cursos = [
    'Introdução ao PHP',
    'DDD com PHP',
    'Coleções em PHP'
];

$cursosOo = [
    'Orientação a Objetos',
    'Object Calisthenics com PHP'
];

$novoArray = array_merge($cursos, $cursosOo);

array_unshift($novoArray, 'Instalando PHP');

var_dump($novoArray);
