<?php
require 'autoload.php';
use ScreenMatch\Modelo\{Filme, Episodio, Serie, Genero};
use ScreenMatch\Calculos\{CalculadoraDeMaratona, ConversorNotaEstrela};

echo "Bem vindo(a) ao Screen Match";

$filme = new Filme(
    'Thor - Ragnarok',
    2021,
    Genero:: SuperHeroi,
    180,
);


$filme -> avalia(10);
$filme -> avalia(6);
$filme -> avalia(7.8);
$filme -> avalia(8.2);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoDeLancamento . "\n";

$serie = new Serie('Lost', 2007, Genero::Drama, 10, 20, 30);
$episodio = new Episodio($serie, 'Episodio piloto', 1);
echo $serie->anoDeLancamento . "\n";
$serie -> avalia(8);
echo $serie->media() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Para essa maratona, voce precisa de $duracao minuto\n";
$coversor = new ConversorNotaEstrela();
echo $coversor->converte($serie);