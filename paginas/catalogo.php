<div class="banner">
        <img src="imagens/banner.png" alt="Banner1">
    </a>
</div>

<h1 class="text-center">Catálogo Completo</h1>
<div class="row">
    <?php
        $conteudo = file_get_contents($url);
        $dados = json_decode($conteudo);

        foreach ($dados as $cartas) {
            $valor = "R$" . number_format($cartas->valor, 2, ",", ".");
            echo "<div class='col-12 col-md-2 mb-4'>
                <div class='card text-center'>
                    <img src='{$cartas->imagem}' class='w-100'>
                    {$cartas->nome}
                    <p class='card-preco'>$valor</p>  <!-- Preço em cor combinando -->
                    <p>
                        <a href='produto/{$cartas->id}' class='btn-detalhe'>
                            Detalhes da Carta
                        </a>    
                    </p>
                </div>
            </div>";
        }
    ?>
</div>
