<?php

namespace CotacaoOnline\Utils;

use CotacaoOnline\Entities\Produto;

class CalculadoraPrecoProduto
{
    public function calcular(
        Produto $p,
        float $fator,
        float $desconto = 0.0
    ): float {
        $valor = $p->preco * $fator;

        return $valor + $valor * $desconto;
    }
}
