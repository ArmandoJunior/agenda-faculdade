<?php

abstract class Pessoa
{
    protected $id;
	protected $nome;
	protected $fixo;
	protected $celular;
	protected $email;
	protected $endereco;
    protected $nascimento;

    public function idade() 
	{

		$nascData = implode("-",array_reverse(explode("/",$this->nascimento )));
		$date = new DateTime($nascData ); 
		$interval = $date->diff( new DateTime( date('Y-m-d') ) ); 

        return $interval->format( '%Y anos' );
    }
    
    public function inverteData($data) 
    {
        return implode("-",array_reverse(explode("/",$data )));  
	}

    public function inverteDataBD() 
    { 
        return implode("-",array_reverse(explode("/",$this->nascimento )));   
	}
	
    public function inverteData2() 
    { 
        return implode("/",array_reverse(explode("-",$this->nascimento )));  
	}
}