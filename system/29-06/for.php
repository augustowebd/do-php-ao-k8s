<?php
/*
   > for      : quando a lista de elementos for conhecida
   - while    : quando a condição de saída for desconhecida ou depender de um evento
   - foreach  : for de iteração com elementos conhencidos que vc deseje manipular a chave e valor
   - function : recursão

   array[
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
    'Nina'
];

echo 'for ( init ; test ; inc ) { body } <br />';
$limit = sizeof($users);

for ($i = 0; $i < $limit; $i++) {
    echo "key[$i] = value[", $users[$i], ']<br />';
}

echo '<hr />';

echo 'for ( ; test ; inc ) { body } <br />';
$i = 0;
$limit = sizeof($users);
for ( ; $i < $limit; $i++) {
    echo "key[$i] = value[", $users[$i], ']<br />';
}

echo '<hr />';

echo 'for ( ; ; inc ) { body } <br />';
$i = 0;
$limit = sizeof($users);
for ( ; ; $i++) {

    if ($i >= $limit) {
        break;
    }

    echo "key[$i] = value[", $users[$i], ']<br />';
}

echo '<hr />';

echo 'for ( ; ; ) { body } <br />';
$i = 0; // init
$limit = sizeof($users);

for ( ; ; ) {

    // test
    if ($i >= $limit) {
        break;
    }

    // body
    echo "key[$i] = value[", $users[$i], ']<br />';

    // incement
    $i++;
}
