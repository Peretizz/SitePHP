<?php
require_once "ConexaoBD.php";
require_once "src/Util.php";

class SeriesDAO
{
    public static function inserir($dados)
    {
        $conexao = ConexaoBD::conectar();

        $titulo = $dados['titulo'];
        $diretor = $dados['diretor'];
        $ano = $dados['ano'];
        $elenco = $dados['elenco'];
        $premios = $dados['premios'];
        $imagem = Util::salvarArquivo();
        $temporadas = $dados['temporadas'];
        $episodios = $dados['episodios'];

        $sql = "INSERT INTO series
                (titulo, diretor, ano, elenco, premios, imagem, temporadas, episodios) 
                VALUES 
                (:titulo, :diretor, :ano, :elenco, :premios, :imagem, :temporadas, :episodios)";

        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':diretor', $diretor);
        $stmt->bindParam(':ano', $ano);
        $stmt->bindParam(':elenco', $elenco);
        $stmt->bindParam(':premios', $premios);
        $stmt->bindParam(':imagem', $imagem);
        $stmt->bindParam(':temporadas', $temporadas);
        $stmt->bindParam(':episodios', $episodios);

        $stmt->execute();
    }

    public static function listar()
    {
        $conexao = ConexaoBD::conectar();
        $sql = "SELECT * FROM series"; // Updated table name from 'filme' to 'series'
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        $series = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $series;
    }
}
