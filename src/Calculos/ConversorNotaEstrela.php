<?php

namespace ScreenMatch\Calculos;

use ScreenMatch\Modelo\Avaliavel;
use DivisionByZeroError;
class ConversorNotaEstrela{
    public function converte(Avaliavel $avaliavel):float{

        try{
            $nota = $avaliavel->media();
            return  round($nota) / 2;
        }
        catch(DivisionByZeroError $erro){
            echo $erro->getMessage();
            return 0;
        }
    }
}