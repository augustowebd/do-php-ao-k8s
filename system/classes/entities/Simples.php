<?php

class Simples extends PessoaJuridica
{
    protected float $fator = 1.3;
    protected float $desconto = -0.1;

    // @overloading
    public function calcular(Produto $p): float
    {
        return parent::calcular($p) * $this->desconto;
    }
}
