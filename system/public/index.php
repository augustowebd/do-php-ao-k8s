<?php

error_reporting(E_ALL);

/* importar composer para gerenciar os pacotes */
require_once '../vendor/autoload.php';

/* instrui o composer, importador acima, para carregar as classes abaixo */
use CotacaoOnline\Business\CalcularPrecoProdutoPessoaJuridica;
use CotacaoOnline\Entities\LTDA;
use CotacaoOnline\Entities\Produto;

/**
 * próximas aulas
 *  - segregar as classes em pacotes     - (31/08) - ok
 *  - adicionar autoloader de classe     - (31/08) - ok
 *  - persistir em banco de dados (CRUD) - (01/09)
 *      - form de cadastro
 *      - form de pesquisa
 *      - form de alteração
 *      - grid de exclusão
 *  - criar tela de login (session)      - (08/09)
 *  - teste de código (phpunit)          -
 *  - laravel                            -
 * */

$produto = new Produto();
$produto->nome = 'Amil 500';
$produto->operadora = 'Amil';
$produto->abrangencia = 'Nacional';
$produto->acomodacao = 'Apartamento';
$produto->tipoFaturamento = 'Coparticipação';
$produto->cobertura = 'Ambulatorial';
$produto->preco = 100.0;

$ltda = new LTDA();

$calculadora = new CalcularPrecoProdutoPessoaJuridica();

try {
    echo $calculadora->calcular($produto, $ltda);
} catch (TypeError $e) {
    echo ' o tipo informando não tem desconto ';
}
