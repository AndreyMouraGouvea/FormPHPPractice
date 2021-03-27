<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respostas</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <section id="corpo">

    <?php

        ini_set('default_charset', 'utf-8');
        $aval = $_POST["avaliacao"];
        $gosto = $_POST["secao"];
        $outra = $_POST["outra"];
        $coment = $_POST["comentarios"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $fone = $_POST["fone"];
        // $novidade = $_POST["novidades"];

        echo ('<h1>Seus dados inseridos no formulário foram: </h1>');
        echo ('Avaliação do Site: '.$aval.'<br>');
        echo ('Seu Gosto: '.$gosto.'<br>');
        echo ('Informação Adicional: '.$outra.'<br>');
        echo ('Comentários: '.$coment.'<br>');
        echo ('Seu nome: '.$nome.'<br>');
        echo ('Seu e-mail: '.$email.'<br>');
        echo ('Seu telefone: '.$fone.'<br>');
        // echo ('Você aceita receber novidades: '.$novidade.'<br>');
        echo ('<h1>Você confirma?</h1>');
        echo ('<input type="submit" value="Confirmar">');
    ?>

    </section>

</body>
</html>
