<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header id="header">

    <canvas id="matrix"></canvas>
    <img src="img/logo.png" alt="">
    <div class="nav">
    <nav>
        <a href="inicio.php">INICIO</a>
        <a href="#videos">VIDEOS</a>
        <a href="cadastro.php">CADASTRO</a>
    </nav> 
</div>
    </header>
<br><br>
    <div class= "conteudo">
    <h1>Missão</h1>
    
    <p>Democratizar o acesso à educação tecnológica, oferecendo cursos de programação acessíveis, interativos e de qualidade, que capacitem pessoas de diferentes perfis a desenvolverem novas habilidades digitais e se destacarem no mercado de trabalho.</p>
        
    <h1>Visão</h1>
    
    <p>Ser referência nacional em ensino online de programação, reconhecida por transformar o aprendizado tecnológico em uma experiência prática, envolvente e acessível a todos.</p>
    
   <h1> Valores  </h1>
    
    <p><strong>Acessibilidade: </strong>Tornar o conhecimento tecnológico disponível para todos, independentemente da condição social ou nível de experiência.
    
    <br><br><strong>Inovação:</strong> Utilizar metodologias e ferramentas modernas que tornem o aprendizado dinâmico e eficiente.
    
    <br><br><strong>Qualidade:</strong> Garantir conteúdo atualizado e produzido por profissionais experientes. 
    
    <br><br> <strong>Interatividade: </strong>Promover o engajamento por meio de trilhas gamificadas e comunidades colaborativas. 
    
    <br><br><strong>Inclusão:</strong> Valorizar a diversidade e incentivar a entrada de novos talentos na área de tecnologia. 
    
    <br><br> <strong>Comprometimento:</strong> Buscar constantemente a melhoria contínua da experiência do aluno.</p><br><br>
    </div>

<br><br><br>
    <h1>Linguagens</h1><br><br><br>
    <div class="carousel">
  <div class="carousel-track" id="track">
    <div class="imagens-linguagem">
      <img src="img/foto-php.png" alt="foto php">
      <img src="img/java-foto.jpeg" alt="foto java">
      <img src="img/github.png" alt="foto github">
      <img src="img/foto-sql.jpg" alt="foto sql">
      <img src="img/python.png" alt="foto python">
      <img src="img/js.jpg" alt="foto javascript">

      
      <img src="img/foto-php.png" alt="foto php">
      <img src="img/java-foto.jpeg" alt="foto java">
      <img src="img/github.png" alt="foto github">
      <img src="img/foto-sql.jpg" alt="foto sql">
      <img src="img/python.png" alt="foto python">
      <img src="img/js.jpg" alt="foto javascript">
    </div>
  </div>

    <script>
    const track = document.getElementById("track");
    track.addEventListener("animationiteration", () => {
      track.style.animation = "none";
      void track.offsetWidth; 
      track.style.animation = "scroll 15s linear infinite";
    });
    </script>
 </div>


<br><br><br><br>


  <h1 id="videos">Vídeos</h1>
<br><br>
<div class="video-grid">
    <div class="video-container">
        <iframe src="https://www.youtube.com/embed/Vmgt_SFVxgY" allowfullscreen></iframe>
            <p>PHP</p>
    </div>

    <div class="video-container">
        <iframe src="https://www.youtube.com/embed/zZj157ywgnU" allowfullscreen></iframe>
            <p>JAVA</p>
    </div>

    <div class="video-container">
        <iframe src="https://www.youtube.com/embed/ML9MkmfQCQQ" allowfullscreen></iframe>
            <p>KOTLIN</p>
    </div>

    <div class="video-container">
        <iframe src="https://www.youtube.com/embed/3YYi-c4E1aI" allowfullscreen></iframe>
            <p>SQL</p>
    </div>
</div>

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

    <p>🌐 Site: www.techcodeacademy.com.br/phpiniciante</p>

    <p>📧 E-mail: contato@techcodeacademy.com.br</p>

    <p>📱 WhatsApp: (11) 90000-1234</p>


</footer>

</body>
</html>