<?php 

class Contato extends Pessoa 
{
	private $categoria;

	public function __construct($nome, $fixo, $celular, $email, $endereco, $nascimento, Categoria $categoria) {
		$this->nome = $nome;
		$this->fixo = $fixo;
		$this->celular = $celular;
		$this->email = $email;
		$this->endereco = $endereco;
		$this->nascimento = $nascimento;
		$this->categoria = $categoria;
	}

	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}

	public function getNome() {
		return $this->nome;
	}
	public function setNome($nome) {
		return $this->nome = $nome;
	}

	public function getFixo() {
		return $this->fixo;
	}
	public function setFixo($fixo) {
		return $this->fixo = $fixo;
	}
 
	public function getCelular() {
		return $this->celular;
	}
	public function setCelular($celular) {
		return $this->celular = $celular;
	}

	public function getEmail() {
		return $this->email;
	}
	public function setEmail($email) {
		return $this->email = $email;
	}

	public function getEndereco() {
		return $this->endereco;
	}
	public function setEndereco($endereco) {
		return $this->endereco = $endereco;
	}

	public function getNascimento() {
		return $this->nascimento;
	}
	public function setNascimento($nascimento) {
		return $this->nascimento = $nascimento;
	}

	public function getCategoria() {
		return $this->categoria;
	}
	public function setCategoria(Categoria $categoria) {
		return $this->categoria = $categoria;
	}

}

 ?>