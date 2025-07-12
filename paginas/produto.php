<?php
$conteudo = file_get_contents($url);
$dados = json_decode($conteudo);

$cartas = $dados->$produto;

$valor = "R$" . number_format($cartas->valor, 2, ",", ".");
?>

<div class="carta-container">
    <div class="carta-imagem">
        <!-- Exibindo a imagem da carta -->
        <img src="<?= $cartas->imagem ?>" alt="<?= $cartas->nome ?>" class="img-carta">
    </div>

    <div class="carta-info">
        <!-- Exibindo o nome da carta e outras informações -->
        <h1><?= $cartas->nome ?></h1>
        <p><strong>Tipo:</strong> <?= $cartas->tipo ?></p>
        <p><strong>Descrição:</strong> <?= nl2br($cartas->descricao) ?></p> <!-- nl2br para quebras de linha na descrição -->
        <div class="card-preco"><?= $valor ?></div>
        <a href="index.php" class="btn-voltar">Voltar ao Catálogo</a>
    </div>
</div>