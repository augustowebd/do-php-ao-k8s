<?php

namespace CotacaoOnline\Business;

use CotacaoOnline\Entities\PessoaFisica;
use CotacaoOnline\Entities\Produto;

class CalcularPrecoProdutoPessoaFisica
{
    private const FATOR_ = 1.3;

    public function calcular(Produto $p, PessoaFisica $pf): float
    {
        return 0.0;
    }
}
