<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Pagamento</title>
</head>
 <header>
    <img src="img/logo.png" alt="">
    </header>
<body>
 
   
    <br>
 
    <section>
        <h2>PAGAMENTO</h2>
        <br>
        <form action="validar1.php" method="post" id="usuarios" target="">
 
            <label>Nº do Cartão: </label><br>
                <input type="text" name="cartao" required><br><br>

                <label>Validade:</label><br>
                <input type="date" name="validade" required><br><br>

                <label>Cvv: </label><br>
                <input type="text" name="cvv" required><br><br>

                <label>Titular do cartão: </label><br>
                <input type="text" name="titular" required><br><br>

                <label>CPF: </label><br>
                <input type="text" name="cpf" required><br><br>
 
            <input type="submit" class="botao" name="cadastrar">
           
        </form>
 
    </section>
    <br>

<footer>
  <p>  📞 Contato e Inscrições

<p>🌐 Site: www.codeupacademy.com.br/phpiniciante</p>

<p>📧 E-mail: contato@codeupacademy.com.br</p>

<p>📱 WhatsApp: (11) 90000-1234</p>

</footer>
 
</body>
</html>
 
 