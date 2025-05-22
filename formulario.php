<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $cpf = $_POST['cpf'];
  $telefone = $_POST['telefone'];
  $mensagem = $_POST['mensagem'];

  // Só para teste: mostrar na tela
  echo "<h2>Mensagem Recebida</h2>";
  echo "<p><strong>CPF:</strong> $cpf</p>";
  echo "<p><strong>Telefone:</strong> $telefone</p>";
  echo "<p><strong>Mensagem:</strong> $mensagem</p>";
}
?>
