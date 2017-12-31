<?php 

class CategoriaDAO {

	private $conexao;

	function __construct($conexao) {
		$this->conexao = $conexao;
	}

	function listaCategorias(){
	$categorias = array(); 
	$resultado = mysqli_query($this->conexao, "SELECT * FROM categoria");

	while($categoria_array = mysqli_fetch_assoc($resultado)){
		$categoria = new Categoria();

		$categoria->setId($categoria_array['id']);
		$categoria->setNome($categoria_array['nome']);
		
		array_push($categorias, $categoria);
	}

	return $categorias; //retorno o array de categorias
}

function buscaCategoria($id) {
	$query = "SELECT * FROM categoria WHERE id = {$id}";
	$resultado = mysqli_query($this->conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function insereCategoria(Categoria $categoria) {

	$categoria->setNome(mysqli_real_escape_string($this->conexao, $categoria->getNome()));
	
	$query = "INSERT INTO categoria (nome) VALUES ('{$categoria->getNome()}')";

	return mysqli_query($this->conexao, $query);
}

function removeCategoria($id) {
	$query = "DELETE FROM categoria WHERE id = {$id}";
	return mysqli_query($this->conexao, $query);
}

function alteraCategoria($categoria) {

	$categoria->setNome(mysqli_real_escape_string($this->conexao, $categoria->getNome()));
	
	$query = "UPDATE categoria SET nome = '{$categoria->getNome()}' WHERE id = {$categoria->getId()}";
	return mysqli_query($this->conexao, $query);
}


 }
