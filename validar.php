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

    $nome=$_POST['Nome'];
    $email=$_POST['Email'];
    $telefone=$_POST['Telefone'];
    $endereco=$_POST['Endereco'];
    $cidade=$_POST['Cidade'];
    $estado=$_POST['Estado'];
    $cep=$_POST['CEP'];

    $bancoDados=new db();
    $link=$bancoDados->conecta_mysql();

    $sql="insert into alunos(Nome,Email,Telefone,Endereco,Cidade,Estado,CEP) values ('$nome','$email', '$telefone','$endereco','$cidade','$estado','$cep')";

    mysqli_query($link, $sql);
    ?>
    <br>
    <section>
        <h2>CADASTRO</h2>
        <br>
        <p>Cadastro realizado com Sucesso!</p>
        <br>
        <a href="pagamento.php">FINALIZAR PAGAMENTO</a>
    </section>
</body>
</html>