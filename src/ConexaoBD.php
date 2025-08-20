<?php
class ConexaoBD{
    public static function conectar():PDO{
        $conexao = new PDO("pgsql:host=localhost;dbname=projeto","postgres","Nick14/11");
        return $conexao;
    }
}