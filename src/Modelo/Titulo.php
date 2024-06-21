<?php

namespace ScreenMatch\Modelo;

abstract class Titulo implements Avaliavel{

   use ComAvaliacao;

    public function __construct(
        public readonly string $nome, 
        public readonly int $anoDeLancamento, 
        public readonly Genero $genero,) {   
    }

    abstract public function duracaoEmMinutos():int;
}