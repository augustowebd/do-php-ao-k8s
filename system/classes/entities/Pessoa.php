<?php

abstract class Pessoa
{
    protected string $name;
    protected string $dataNasc;

    abstract public function calcular(Produto $p): float;
}
