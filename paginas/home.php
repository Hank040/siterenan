<div class="banner">
        <img src="imagens/banner.png" alt="Banner1">
    </a>
</div>
<h1 class="text-center">Últimos Lançamentos</h1>
<div class="row">
    <?php
        $conteudo = file_get_contents($url);
        $dados = json_decode($conteudo);
        $contador = 0;

        foreach ($dados as $cartas) {
            if ($contador >= 12) break;

            $valor = "R$" . number_format($cartas->valor, 2, ",", ".");
            
            echo "<div class='col-12 col-md-2 mb-4'>
                <div class='card'>
                    <img src='{$cartas->imagem}' class='w-100'>
                    {$cartas->nome}
                    <p class='card-preco'>$valor</p>
                    <p>
                        <a href='produto/{$cartas->id}' class='btn-detalhe'>
                            Detalhes da Carta
                        </a>    
                    </p>
                </div>
            </div>";

            $contador++;
        }
    ?>
</div>

