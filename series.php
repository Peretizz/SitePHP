<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <title>Site de Filmes e Séries</title>
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
                <a class="nav-link" href="form_filme.php" style="color: #f7d1ba"> Cadastro Filmes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="form_serie.php" style="color: #f7d1ba"> Cadastro Séries</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <main class="w-75 mt-1 m-auto">
    <section class="mb-5">
      <h2 class="text-center mb-4" style="color: #f7d1ba">Séries</h2>
      <div class="row">
        <?php
        require_once "src/SeriesDAO.php";
        $series = SeriesDAO::listar();
        $seriecont = 0; 
        foreach ($series as $serie) {
        ?>
        <div class="col-3 mb-5 mx-5 px-5">
          <div class="card bg-dark text-white border border-secondary" style="width: 18rem; height: 43rem;">
            <img src="uploads/<?=$serie['imagem']?>" style="width: 285px; height: 430px; object-fit: cover;" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title"><?=$serie['titulo']?></h5>
              <p class="card-text texto-serie">
                <b>Ano: <?=$serie['ano']?> <br>
                  Direção: <?=$serie['diretor']?><br>
                  Elenco: <?=$serie['elenco']?> <br>
                  Temporadas: <?=$serie['temporadas']?> <br>
                  Episódios: <?=$serie['episodios']?> </b> <br>
              </p>
              <?php
              if ($serie['premios'] == "") {
                ?> <br> <?php
              }
              else{?>
              <div class="d-flex">
                <div class="mx-5"><b><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSerie<?=$seriecont?>">
                      Prêmios</button></b>
                </div>
              </div>              
              <div class="modal fade" id="modalSerie<?=$seriecont?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5 text-dark">Prêmios</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-dark">
                      <a><?=$serie['premios']?></a>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                  </div>
                </div>
              </div>
              <?php 
              }
              ?>
            </div>
          </div>
        </div>
        <?php
        }
        $seriecont++; 
        ?>
      </div>
    </section>
  </main>

  <footer class="text-center text-white" style="background-color: #1c5052">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">    
      <a>© 2025 Copyright | Por Nicolas Pereti e Frederico Fantin</a>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>
</body>

</html>
