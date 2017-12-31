<?php

class Usuario extends Pessoa
{
    private $login;
    private $senha;

    public function __construct($nome, $fixo, $celular, $email, $endereco, $nascimento, $login, $senha)
    {
        $this->nome         = $nome;
        $this->fixo         = $fixo;
        $this->celular      = $celular;
        $this->email        = $email;
        $this->endereco     = $endereco;
        $this->nascimento   = $nascimento;
        $this->login        = $login;
        $this->senha        = $senha;
    }

    


}