<?php

namespace Alura\Leilao\Service;

use Alura\Leilao\Model\Leilao;

class Avaliador
{
    private float $maiorValor;

    public function avalia(Leilao $leilao): void
    {
        $lances = $leilao->getLances();
        $utlimoLance = $lances[count($lances) -1];
        $this->maiorValor = $utlimoLance->getValor();
    }
    
    public function getMaiorValor(): float
    {
        return $this->maiorValor;
    }
}
