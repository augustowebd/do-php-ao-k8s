<?php
/*
   - for      : quando a lista de elementos for conhecida
   > while    : quando a condição de saída for desconhecida ou depender de um evento
   - foreach  : for de iteração com elementos conhencidos que vc deseje manipular a chave e valor
   - function : recursão

   array [
       key => value,
       key => value,
       key => value,
   ];
*/
$users = [
    'jose',
    'maria',
    'joão',
    'Megaron',
    'Nina',
];

echo 'while ($i < $limit) { body } <br />';

$i = 0;
$limit = count($users);

while ($i < $limit) {
    echo "key[$i] = value[", $users[ $i++ ], ']<br />';
}

echo '<hr />';
echo 'while (true) { body } <br />';

// init
$i = 0;
$limit = count($users);

while (true) {

    // test
    if ($i >= $limit) {
        break;
    }

    // event
    echo "key[$i] = value[", $users[ $i ], ']<br />';

    // inc
    $i++;
}
