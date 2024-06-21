<?php
$caminhoarquivo = __DIR__ . '/filme.json';
$pegaDados = file_get_contents($caminhoarquivo);
$poenoArray = json_decode($pegaDados, true);
var_dump($poenoArray);