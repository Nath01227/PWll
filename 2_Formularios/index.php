<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="get"></form>
    <fieldset>
        <legend>Informações do Personagem</legend>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Nome do Personagem" disable>

        <br>
        <br>

        <label for="nome">Poder</label>
        <input type="text" name="poder" id="poder" placeholder="Poder do Personagem" disable>

        <br>
        <br>

        <input type="submit" value="Enviar">

    </fieldset>

<?php

    if (isset($_GET['Nome'])){
        if (empty($_GET['Nome']))
            echo 'Nome obrigatório';
    }else{
        echo $_GET['Nome'];
    }
    
    if (isset($_GET['Poder'])){
        if(empty($_GET['Poder']))
            echo 'Poder obrigatório';
    }else{
        echo $_GET['Poder'];
    }
    echo $_GET['Poder'];

?>
</body>
</html>