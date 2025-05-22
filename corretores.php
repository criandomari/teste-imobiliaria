<?php
$corretores = [
  ['nome' => 'Ana Silva', 'foto' => 'imagens/corretor1.jfif', 'pontuacao' => 5],
];

foreach ($corretores as $c) {
  echo "<div class='corretor'>";
  echo "<img src='{$c['foto']}' alt='Foto de {$c['nome']}'>";
  echo "<p>{$c['nome']}</p>";
  echo "<p>Pontuação: {$c['pontuacao']}</p>";
  echo "</div>";
}
?>
