<?php

class Conexao 
{
    public static function pegarConexao()
    {
        $conexao = new PDO('mysql:host=localhost;dbname=agendapoo','root','jr120777');
        return $conexao;
        
    }
}