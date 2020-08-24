<?php

abstract class PessoaJuridica extends Pessoa
{
    protected string $documento;

    public function calcular(Produto $p): float
    {
        return ($p->preco * $this->fator);
    }
}
