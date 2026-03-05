<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CodeUp</title>

</head>

<header id="header">
    <canvas id="matrix"></canvas>

    <img src="img/logo.png" alt="">

    <nav class="nav">
        <a href="#">INÍCIO</a>
        <a href="cadastro.php">CADASTRO</a>
        <a href="quemsomos.php">SOBRE</a>
    </nav>
</header>
<br><br>
<body>
    <div class = "container">
        <div class="texto">
    <h1>Curso de Programação para Iniciantes!<h1>
    <p><strong>Instituição</strong>: CodeUp Academy </p>
    <p><strong>Carga horária</strong>: 100 horas (online)</p>
    <p><strong>Modalidade</strong>: Online (aulas ao vivo + gravações disponíveis)</p>
    <p><strong>Nível</strong>: Iniciante a Avançado</p>
    <p><strong>Início das aulas</strong>: 15 de fevereiro de 2026</p>
    <p><strong>Instrutor</strong>: Prof. Julia Siqueira e Prof. Ronald Cardoso, Desenvolvedores Full Stack com mais de 10 anos de experiência!</p><br>
 <a href="index.php" class="botao"> <strong>INSCRIÇÃO </strong> </a></div>

    <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/vvThhk2btO8?si=kM--rFhhu8wpwHLw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
</div>

<br>
<section class="oferta">
    <h2>🔥 Últimas vagas com desconto!</h2>
    <p>⏳ Promoção acaba em:</p>

    <div id="contador1" class="contador">
        00:00:00
    </div>

    <a href="index.php" class="btn-oferta">Garantir desconto</a>
</section>

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
  track.style.animation = "scroll 20s linear infinite";
});
</script>
<br><br><br><br>



<div class= "conteudo">

<h1>📘Conteúdo Programático</h1>
<br><br>
<h1>Módulo 1 – Fundamentos da Programação (15h)</h1><br>
<h2>Conteúdos:</h2>
<p>-O que é programar: hardware, software e linguagens.</p>
<p>-Tipos de linguagem (baixo e alto nível).</p>
<p>-Algoritmos e fluxogramas.</p>
<p>-Tipos de dados e variáveis.</p>
<p>-Operadores aritméticos e lógicos.</p>
<p>-Estruturas condicionais (if, else, switch).</p>
<p>-Estruturas de repetição (for, while).</p>
<p>-Exercícios de lógica (pseudocódigo e diagramas de fluxo).</p>
<br><br>



<h1>Módulo 2 – Introdução à Linguagem de Programação (Python/JavaScript) (20h)</h1><br>
<h2>Conteúdos:</h2>
<p>-Instalação e configuração do ambiente.</p>
<p>-Sintaxe básica.</p>
<p>-Entrada e saída de dados.</p>
<p>-Estruturas condicionais e loops.</p>
<p>-Funções e escopo de variáveis.</p>
<p>-Listas, dicionários e arrays.</p>
<p>-Manipulação de strings.</p>
<p>-Introdução a módulos e bibliotecas padrão.</p>
<p>-Mini-projeto: calculadora interativa.</p>

<br><br>
<h1>Módulo 3 – Estruturas de Dados e Algoritmos (15h)</h1><br>
<h2>Conteúdos:</h2>
<p>-Vetores e matrizes.</p>
<p>-Pilhas e filas (conceito e implementação simples).</p>
<p>-Ordenação e busca (bubble sort, busca linear e binária).</p>
<p>-Recursividade.</p>
<p>-Exercícios práticos com foco em eficiência.</p>
<br><br>

<section class="oferta">
    <h2> Comece a programar hoje!</h2>
    <p>⏳ Oferta termina em:</p>

    <div id="contador2" class="contador">
        00:00:00
    </div>

    <a href="index.php" class="btn-oferta">Garantir desconto</a>
</section>
<br>

<br><br>
<h1>Módulo 4 – Programação Orientada a Objetos (POO) (15h)</h1><br>
<h2>Conteúdos:</h2>
<p>-Paradigmas de programação.</p>
<p>-Classes e objetos.</p>
<p>-Atributos e métodos.</p>
<p>-Encapsulamento, herança e polimorfismo.</p>
<p>-Instanciação e reuso de código.</p>
<p>-Exercício prático: sistema simples de cadastro.</p>

<br><br>
<h1>Módulo 5 – Desenvolvimento Web Básico (20h)</h1><br>
<h2>Conteúdos:</h2>
<p>-Introdução ao HTML e CSS.</p>
<p>-Fundamentos do JavaScript (para interatividade).</p>
<p>-Conexão entre front-end e lógica de programação.</p>
<p>-Manipulação do DOM.</p>
<p>-Introdução a APIs e requisições HTTP.</p>
<p>-Mini-projeto: aplicação web simples (ex: lista de tarefas).</p>
<br><br>

<h1>Módulo 6 – Boas Práticas e Ferramentas de Desenvolvimento (10h)</h1><br>
<h2>Conteúdos:</h2>
<p>-Controle de versão com Git e GitHub.</p>
<p>-Documentação e comentários de código.</p>
<p>-Depuração e tratamento de erros.</p>
<p>-Testes básicos de código.</p>
<p>-Ética e segurança na programação.</p>
<p>-Preparação para portfólio (GitHub Pages, Replit, etc.).</p>
<br><br>

<h1>Módulo 7 – Projeto Final Integrador (5h)</h1>
<br>
<h2>Proposta de Projeto:</h2>
<p>-Desenvolvimento de uma aplicação simples (ex: sistema de notas, agenda, controle de tarefas).</p>
<p>-Apresentação do projeto e entrega do código documentado.</p>
   
<br><br>
<h1>📊 Avaliação</h1><br>
<h2>-Exercícios práticos por módulo (40%)</h2>
<h2>-Mini-projetos intermediários (30%)</h2>
<h2>-Projeto final (30%)</h2>
<br><br>

<h1>🎓 Pré-requisitos</h1><br>
<p>-Conhecimentos básicos de informática e internet.</p>
<p>-Curiosidade e disposição para resolver problemas.</p>
<br><br>

<br><br>
<a href="index.php" class="botao2"> <strong>QUERO ME INSCREVER!</strong> </a>
<br> <br>

<br><br>
</div>

<script>
function iniciarContador(id, horas) {
    let final = new Date().getTime() + horas * 60 * 60 * 1000;

    let timer = setInterval(function() {
        let agora = new Date().getTime();
        let distancia = final - agora;

        let h = Math.floor(distancia / (1000 * 60 * 60));
        let m = Math.floor((distancia % (1000 * 60 * 60)) / (1000 * 60));
        let s = Math.floor((distancia % (1000 * 60)) / 1000);

        h = (h < 10) ? "0" + h : h;
        m = (m < 10) ? "0" + m : m;
        s = (s < 10) ? "0" + s : s;

        document.getElementById(id).innerHTML = h + ":" + m + ":" + s;

        if (distancia < 0) {
            clearInterval(timer);
            document.getElementById(id).innerHTML = "00:00:00";
        }
    }, 1000);
}
iniciarContador("contador1", 12); 
iniciarContador("contador2", 12);  
</script>

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
</body>

<footer>
<p>📞 Contato e Inscrições</p>

<p>🌐 Site: www.techcodeacademy.com.br/phpiniciante</p>

<p>📧 E-mail: contato@techcodeacademy.com.br</p>

<p>📱 WhatsApp: (11) 90000-1234</p>

</footer>
</html>