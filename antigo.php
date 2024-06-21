<?php

require "src\Modelo\Filme.php";
require "src/funcoes.php";

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";

$anoDeLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador += 1){
    $notas[] = (float) $argv[$contador];
}




$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

echo "Nome do Filme: " .  $nomeFilme . "\n";
echo "Nota do Filme: " .  $notaFilme . "\n";
echo "Ano de Lançamento: $anoDeLancamento \n"; 

exibeMensagemLancamento($anoDeLancamento);
$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoDeLancamento);



$genero =  match ($nomeFilme) {
    "Top Gun - Maverick" => "Acao",
    "Thor: Ragnarok" => "SuperHeroi", 
    "Se beber nao case!" => "Comedia",
    default => "Gênero Desconhecido",

};


echo "O genero do filme e $genero\n";

$filme = criaFilme(
    nome: "Thor: Ragnarok",
    anoDeLancamento: 2021,
    nota: 7.8,
    genero: "SuperHeroi"
);

var_dump($filme->nome);
$posicaoDoisPontos = strpos($filme->nome,':');
var_dump($posicaoDoisPontos);
var_dump(substr($filme->nome, 0, $posicaoDoisPontos));

var_dump(json_decode('{"nome":"Thor: Ragnarok","ano":2021,"nota ":7.8,"genero":"SuperHeroi"}', true));

$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson);

