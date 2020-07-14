<?php
/**
 * @param string $name
 * @param string $gener
 * @param int $age
 * @return String[]
 */
function validateAddUser(string $name, string $gender, int $age): array
{
    $resultValidate = [];

    // o nome do usuário deve ser não-nulo e com mais de 5 caracteres
    $tmpUsername = trim($name);
    $lenUsername = strlen($tmpUsername);
    if ($lenUsername <= 5) {
        $resultValidate['username'] = 'invalid username';
    }

    // o gênero do usuário deve ser ou m ou f
    $tmpUsergender = trim($gender);
    $tmpUsergender = $tmpUsergender[0];
    if ($tmpUsergender != 'm' and $tmpUsergender != 'f') {
        $resultValidate['usergender'] = 'invalid gender';
    }

    // a idade do usuário deve ser maior que 5 e menor que 99
    if ($age < 5 or $age > 99) {
        $resultValidate['userage'] = 'invalid age';
    }

    return $resultValidate;
}
