<?php

class PessoaFisica extends Pessoa
{
    public function calcular(Produto $p): float
    {
        return $p->preco * 2.0;
    }
}
