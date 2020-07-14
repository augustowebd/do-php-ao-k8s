<?php
/*
   - for      : quando a lista de elementos for conhecida
   - while    : quando a condição de saída for desconhecida ou depender de um evento
   > foreach  : for de iteração com elementos conhencidos que vc deseje manipular a chave e valor
   - function : recursão

   array [
       key => value,
       key => value,
       key => value,
   ];
*/
$users = [
    0   => 'jose',
    1   => 'maria',
    2   => 'joão',
    3   => 'Megaron',
    4   => 'Nina',
];

echo 'foreach ($array as $key => $value) {} <br />';

foreach ($users as $key => $value) {
    echo "o usuário na popsição $key - tem o nome de: $value <br />";
}

echo '<hr />';
echo 'foreach ($array as $value) {} <br />';

foreach ($users as $value) {
    echo "nome de: $value <br />";
}
