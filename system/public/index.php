<?php

error_reporting(E_ALL);

require_once '../classes/entities/Produto.php';

require_once '../classes/entities/Pessoa.php';
require_once '../classes/entities/PessoaJuridica.php';
require_once '../classes/entities/PessoaFisica.php';
require_once '../classes/entities/Simples.php';
require_once '../classes/entities/MEI.php';
require_once '../classes/entities/LTDA.php';

$produto = new Produto();
$produto->nome = 'Amil 500';
$produto->operadora = 'Amil';
$produto->abrangencia = 'Nacional';
$produto->acomodacao = 'Apartamento';
$produto->tipoFaturamento = 'Coparticipação';
$produto->cobertura = 'Ambulatorial';
$produto->preco = 100.0;

$simples = new Simples();
$mei = new MEI();
$ltda = new LTDA();
$fisica = new PessoaFisica();

function CalcularPrecoProdutoPessoaJuridica(Produto $p, PessoaJuridica $pj)
{
    printf(
        'O preço do produto [%s] para pessoa do tipo %s é de R$ %f' . PHP_EOL
        , $p->nome
        , get_class($pj)
        , $pj->calcular($p)
    );
}

CalcularPrecoProdutoPessoaJuridica($produto, $simples);
CalcularPrecoProdutoPessoaJuridica($produto, $mei);
CalcularPrecoProdutoPessoaJuridica($produto, $ltda);


// $cachorro = new Cachorro(10, "macho");
// $cachorro->nome = 'Floquinho';

// $gato = new Gato(3, "femea");


// function mamiferoEmitirSom(Mamifero $f)
// {
//     $f->emitirSom();
// }

// mamiferoEmitirSom($cachorro);




// // próxima aula criar família de classes de profissão.
// $cliente = new Pessoa();
// $cliente->setNome('Jose Augusto de Jesus');
// $cliente->setProfissao("PROGRAMADOR");

// // 1: Encapsulamento
// // 2: Herança
// // 3: Polimorfismo
// $produto = new Produto();
// $produto->nome = 'Amil 500';
// $produto->operadora = 'Amil';
// $produto->abrangencia = 'Nacional';
// $produto->acomodacao = 'Apartamento';
// $produto->tipoFaturamento = 'Coparticipação';
// $produto->cobertura = 'Ambulatorial';

// $precoPlano = $produto->calcularPreco($cliente);

// echo 'O valor do plano para suas características é de R$ ', $precoPlano;

// /*
//     - => private
//     # => protected
//     + => public
//       => (default)
// */
