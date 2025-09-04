<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <title>Cadastrar Série</title>
</head>

<body class="bg-dark">
    <header>
        <div class="bg-opacity-50 rounded-5 mb-5 py-5 w-75 m-auto d-flex justify-content-around"
            style="background-color: #1c5052">
            <p class="fs-1 fw-bold text-center" style="color: #f7d1ba">
                Pererico Nicotin
            </p>
            <nav class="navbar navbar-expand-lg rounded-5 navbar border-bottom border-body" data-bs-theme="dark"
                style="background-color: #1c5052">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php" style="color: #f7d1ba">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="filmes.php" style="color: #f7d1ba">Filmes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="series.php" style="color: #f7d1ba">Séries</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="form_filme.php" style="color: #f7d1ba"> Cadastro Filmes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="form_serie.php" style="color: #f7d1ba"> Cadastro Séries</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main class="w-75 mt-1 m-auto">
        <div class="card bg-dark text-white border border-secondary p-4">
            <h2 class="text-center mb-4" style="color: #f7d1ba">Cadastro de Séries</h2>
            <form action="cadastro-serie.php" class="row g-3" method="POST" enctype="multipart/form-data">
                <div class="col-md-6">
                    <label for="nome" class="form-label">Título</label>
                    <input type="text" class="form-control" name="titulo" placeholder="Digite o Título da Série" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Diretor</label>
                    <input type="text" name="diretor" class="form-control" placeholder="Digite o nome do(a) Diretor"
                        required>
                </div>
                <div class="col-md-6">
                    <label for="nome" class="form-label">Ano</label>
                    <input type="number" class="form-control" name="ano" placeholder="Digite o Ano de Lançamento" required>
                </div>
                <div class="col-md-6">
                    <label for="nome" class="form-label">Elenco</label>
                    <input type="text" class="form-control" name="elenco" placeholder="Digite o Elenco da Série" required>
                </div>
                <div class="col-md-6">
                    <label for="nome" class="form-label">Prêmios</label>
                    <input type="text" class="form-control" name="premios" placeholder="Digite os Prêmios da Série">
                </div>
                <div class="col-md-6">
                    <label for="idcategoria" class="form-label">Categoria</label>
                    <select name="idcategoria" class="form-select" required>
                        <?php
                        require_once "src/CategoriaDAO.php";
                        $categoria = CategoriaDAO::listarCategoria();
                        for ($i = 0; $i < count($categoria); $i++) {
                            ?>
                            <option value="<?= $categoria[$i]["idcategoria"] ?>"><?= $categoria[$i]["nomecategoria"] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="idclassificacao" class="form-label">Classificação</label>
                    <select name="idclassificacao" class="form-select" required>
                        <?php
                        require_once "src/ClassificacaoDAO.php";
                        $classificacao = ClassificacaoDAO::listarClassificacao();
                        for ($j = 0; $j < count($classificacao); $j++) {
                            ?>
                            <option value="<?= $classificacao[$j]["idclassificacao"] ?>"><?= $classificacao[$j]["nomeclassificacao"] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="nome" class="form-label">Temporadas</label>
                    <input type="number" class="form-control" name="temporadas"
                        placeholder="Digite o número de Temporadas da Série" required>
                </div>
                <div class="col-md-6">
                    <label for="nome" class="form-label">Episódios</label>
                    <input type="number" class="form-control" name="episodios"
                        placeholder="Digite o número de Episódios da Série" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Foto</label>
                    <input type="file" name="imagem" class="form-control" required>
                </div>

                <div class="row justify-content-center mt-3">
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <footer class="text-center text-white mt-5" style="background-color: #1c5052">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">    
            <a>© 2025 Copyright | Por Nicolas Pereti e Frederico Fantin</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>
