<?php

// suporte à regra-negócio
require_once '../functions/validateAddUser.php';

$hasFormSent = (bool) count($_POST);

# @TODO: migrar para uma tabela no banco de dados
$genderListAccepted = [
    'f' => 'Feminino',
    'm' => 'Masculino',
    'o' => 'Outro',
];

if ($hasFormSent) {
    $username   = $_POST['username'] ?? null;
    $usergender = $_POST['usergender'] ?? null;
    $userage    = (int) ($_POST['userage'] ?? 0);

    $errMessageValidate  = validateAddUser($username, $usergender, $userage);
    $counterErrorMessage = count($errMessageValidate);
    $isValidForm         = !($counterErrorMessage > 0);

    if (0 == $counterErrorMessage) {
        echo 'cadastrar no banco de dados';
    } else {
        // view
        require '../forms/addUserForm.html';
    }
} else {
    // view
    require '../forms/addUserForm.html';
}
