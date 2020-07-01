<?php
    // diferente de zero
    if (true == sizeof($_POST)) {
        print_r($_POST);
    }
?>

<p> Form via post </p>
<form method="post" action="processa-form-post.php">
    nome: <input name="u_nome" />     <br />
    Idade: <input name="u_idade" />   <br />
    genero: <input name="u_genero" maxlength="1" /> <br />
    senha:  <input name="u_senha" type="password" /> <br />

    <button type="submit">Enviar</button>
</form>


<p>Form via get</p>
<form method="get" action="processa-form-get.php">
    nome: <input name="u_nome" />     <br />
    Idade: <input name="u_idade" />   <br />
    genero: <input name="u_genero" maxlength="1" /> <br />
    senha:  <input name="u_senha" type="password" /> <br />

    <button type="submit">Enviar</button>
</form>
