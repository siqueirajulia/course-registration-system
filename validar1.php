<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <header>
        <img src="img/logo.png" alt=""><br>
    </header>
    
    <?php

    require_once('conexao.php');

    $cartao=$_POST['cartao'];
    $validade=$_POST['validade'];
    $cvv=$_POST['cvv'];
    $titular=$_POST['titular'];
    $cpf=$_POST['cpf'];


    $bancoDados=new db();
    $link=$bancoDados->conecta_mysql();

    $sql="insert into pagamento(cartao,validade,cvv,titular,cpf) values ('$cartao','$validade', '$cvv','$titular','$cpf')";

    mysqli_query($link, $sql);
    ?>
    <br>
    <section>
        <h2>PAGAMENTO</h2>
        <br>
        <p>Pagamento realizado com Sucesso!</p>
        <br>
        <a href="inicio.php">VOLTAR INICIO!</a>
    </section>
</body>
</html>