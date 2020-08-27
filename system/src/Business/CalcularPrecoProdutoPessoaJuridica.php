<?php

namespace CotacaoOnline\Business;

use CotacaoOnline\Entities\PessoaJuridica;
use CotacaoOnline\Entities\Produto;
use CotacaoOnline\Utils\CalculadoraPrecoProduto;

class CalcularPrecoProdutoPessoaJuridica
{
    private const FATOR_LTDA    = 1.7;
    private const FATOR_MEI     = 1.5;
    private const FATOR_SIMPLES = 1.3;

    # desconto de 10%
    private const FATOR_DESCONTO_SIMPLES = -0.1;

    private CalculadoraPrecoProduto $calculadora;

    public function __construct()
    {
        $this->calculadora = new CalculadoraPrecoProduto();
    }

    public function calcular(Produto $p, PessoaJuridica $pj): float
    {
        $partsClassName = explode('\\', get_class($pj));
        $className      = end($partsClassName);

        # padronização do nome do metodo calcular
        $strMethodNameLower     = strtolower($className);
        $strFirstUpper          = ucfirst($strMethodNameLower);
        $strMethodComputerPrice = 'calcular' . $strFirstUpper;

        return $this->$strMethodComputerPrice($p);
    }

    private function calcularLtda(Produto $p): float
    {
        return $this->calculadora->calcular($p, self::FATOR_LTDA);
    }

    private function calcularMei(Produto $p): float
    {
        return $this->calculadora->calcular($p, self::FATOR_MEI);
    }

    private function calcularSimples(Produto $p): float
    {
        return $this->calculadora->calcular($p, self::FATOR_SIMPLES, self::FATOR_DESCONTO_SIMPLES);
    }
}
