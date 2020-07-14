<?php

// isso é um comentário

# isso também é um comentário

/*
  isso é uma comentário
  que pode descrever a bíblia
 */

// gênero do usuário: char
$generoUsuario = "m";

// string é uma sequência de caracteres: string
$nomeUsuario = "José Augusto";

$registroUsuario = '[' . $nomeUsuario . ']:[' . $generoUsuario . ']';

# variável do tipo interior
$idadeUsuario = 40;

# variável do tipo float/double
$salarioUsuario = 10000.0;

/*
 variável do boolean:
  -  true ou false
  -  1    ou 0
  - "a"   ou ""
  -           null
*/

$usuarioAprovado = null;

if ($usuarioAprovado == true) {
    echo 'usuário aprovado';
} else {
    echo 'usuário reprovado';
}
