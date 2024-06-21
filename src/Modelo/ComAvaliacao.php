<?php
namespace ScreenMatch\Modelo;
use ScreenMatch\Exception\NotaInvalidaException;
trait ComAvaliacao{
    private array $notas = [];

    /**
    * @throws NotaInvalidaException Se a nota for negativa ou maior do que 10
    */
    function avalia(float $nota):void{

        if($nota < 0 || $nota > 10){
            throw new NotaInvalidaException();
        }else{
        $this->notas[]= $nota;
        }
    }

    function media():float{
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);
        return $somaNotas / $quantidadeNotas;
    }
}