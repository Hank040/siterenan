<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duelista Central</title>

    <base href="https://duelistacentral.infinityfreeapp.com">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="shortcut icon" href="imagens/icone.png">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="imagens/logo.png" alt="Duelista Central">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="catalogo">Catálogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quem-somos">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        <?php

            
            $url = "http://duelistacentral.infinityfreeapp.com";

            if (isset($_GET["param"])) {
                $param = explode("/",$_GET["param"]);
            }

            $page = $param[0] ?? "home";
            $produto = $param[1] ?? NULL;

            $page = "paginas/{$page}.php";

            if (file_exists($page))
                include $page;
            else
                include "paginas/404.php";
            
        ?>

    </main>

    <footer class="footer">

        <p class="text-center">
            ©2025 Desenvolvido por Renan S. Oliveira
        </p>

    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/fslightbox.js"></script>

</body>

</html>