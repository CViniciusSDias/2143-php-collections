<?php

use Ds\Map;

require_once 'Video.php';

$video1 = new Video('Aprendendo mapas');
$video2 = new Video('Aprendendo conjuntos');
$video3 = new Video('Aprendendo mapas');

$videosAssistidos = new Map();
$videosAssistidos->put($video1, new DateTimeImmutable('2021-02-03'));
$videosAssistidos->put($video2, new DateTimeImmutable('2021-02-01'));
$videosAssistidos->put($video3, new DateTimeImmutable());

echo $videosAssistidos->get($video1)->format('d/m/Y') . PHP_EOL;

foreach ($videosAssistidos as $video => $data) {
    var_dump($video);
}

$primeiroVideoAssistido = $videosAssistidos->first();
$primeiroVideoAssistido->value;