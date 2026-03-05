<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Cadastro</title>
</head>
<header id="header">

    <canvas id="matrix"></canvas>
    <img src="img/logo.png" alt="">
    <nav class="nav">
        <a href="inicio.php">INICIO</a>
    </nav>
    
</header>
<body>
   
    <br>
 
    <section>
        <h2>CADASTRO DO ALUNO</h2>
        <br>
        <form action="validar.php" method="post" id="usuarios" target="">
 
            <label>Nome: </label><br>
                <input type="text" name="Nome" required><br><br>

                <label>Email: </label><br>
                <input type="text" name="Email" required><br><br>

                <label>Telefone: </label><br>
                <input type="text" name="Telefone" required><br><br>

                <label>Endereço: </label><br>
                <input type="text" name="Endereco" required><br><br>

                <label>Cidade: </label><br>
                <input type="text" name="Cidade" required><br><br>

                <label>Estado: </label><br>
                <input type="text" name="Estado" required><br><br>

                <label>CEP: </label><br>
                <input type="text" name="CEP" required><br><br>
 
            <input type="submit" class="botao" name="cadastrar">
           
        </form>
 
    </section>
    <br>

    
<script>
    const header = document.getElementById('header');
    const canvas = document.getElementById('matrix');
    const ctx = canvas.getContext('2d');
    function resizeMatrix() {
        canvas.width = header.clientWidth;
        canvas.height = header.clientHeight;
    }

    resizeMatrix();

    const letters = '01';
    const fontSize = 16;
    let columns;
    let drops;

    function setupMatrix() {
        columns = canvas.width / fontSize;
        drops = Array(Math.floor(columns)).fill(1);
    }

    setupMatrix();

    function draw() {
        ctx.fillStyle = 'rgba(0, 0, 0, 0.05)';
        ctx.fillRect(0, 0, canvas.width, canvas.height);

        ctx.fillStyle = '#ff6600'; // cor alaranjada, igual do seu fundo
        ctx.font = fontSize + 'px monospace';

        for (let i = 0; i < drops.length; i++) {
            const text = letters[Math.floor(Math.random() * letters.length)];
            ctx.fillText(text, i * fontSize, drops[i] * fontSize);

            if (drops[i] * fontSize > canvas.height && Math.random() > 0.95) {
                drops[i] = 0;
            }

            drops[i]++;
        }
    }

    setInterval(draw, 40);

    window.addEventListener("resize", () => {
        resizeMatrix();
        setupMatrix();
    });
</script>
<footer>
  <p>  📞 Contato e Inscrições

<p>🌐 Site: www.codeupacademy.com.br/phpiniciante</p>

<p>📧 E-mail: contato@codeupacademy.com.br</p>

<p>📱 WhatsApp: (11) 90000-1234</p>

</footer>
 
</body>
</html>
 
 