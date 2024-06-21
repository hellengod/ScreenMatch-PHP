<?php
namespace ScreenMatch\Modelo;

class Serie extends Titulo{
    public function __construct(
        string $nome, 
        int $anoDeLancamento, 
        Genero $genero,
        public readonly int $temporada,
        public readonly int $episodiosPorTemporada,
        public readonly int $minutosPorEpisodios
        ) {   
            parent::__construct($nome, $anoDeLancamento, $genero);
    }

    #[\Override]
    public function duracaoEmMinutos(): int{
        return $this->temporada * $this->episodiosPorTemporada * $this->minutosPorEpisodios;
    }
}