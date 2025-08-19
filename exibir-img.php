<?php
$diretorio = "uploads/";

// Lê todos os arquivos da pasta
$imagens = array_diff(scandir($diretorio), array('.', '..'));
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Imagens</title>
    <style>
    img {
        max-width: 200px;
        border: 1px solid #ccc;
        padding: 4px;
        border-radius: 4px;
    }
    </style>
</head>

<body>
    <h4>Imagem</h4>
    <?php
        $img = "img_6892105dcc4675.33458100.jpg";
    ?>
    <div>
        <img src="uploads/<?=$img ?>">
    </div>
</body>

</html>