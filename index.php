<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Imóvel Guide</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header>
    <h1>Imóvel Guide</h1>
    <nav id="menu">
      <button id="hamburguer">☰</button>
    </nav>
  </header>

  <main>
    <section id="corretores">
      <h2>Corretores</h2>
      <?php include 'corretores.php'; ?>
    </section>

    <section id="formulario">
      <h2>Fale com um corretor</h2>
      <form action="formulario.php" method="post">
        <input type="text" name="cpf" placeholder="Digite seu CPF" required>
        <input type="text" name="telefone" placeholder="Telefone" required>
        <textarea name="mensagem" placeholder="Digite sua mensagem" required></textarea>
        <button type="submit">Enviar</button>
      </form>
    </section>

    <section id="calculadora">
      <h2>Regra de 3</h2>
      <input type="number" id="v1" placeholder="Valor 1">
      <input type="number" id="v2" placeholder="Valor 2">
      <input type="number" id="v3" placeholder="Valor 3">
      <button onclick="calcular()">Calcular</button>
      <p>Resultado: <span id="resultado">0</span></p>
    </section>

    <section id="galeria">
      <h2>Galeria de Imóveis</h2>
      <div class="imovel">
        <img src="imagens/casa1.jfif" alt="Casa" onclick="abrirModal(this)">
        <a href="imagens/casa1.jpg" download>Download</a>
      </div>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Imóvel Guide. Todos os direitos reservados.</p>
  </footer>

  <script src="script.js"></script>
  <script src="calculadora.js"></script>
</body>
</html>
