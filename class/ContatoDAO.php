<?php 
class ContatoDAO {

	private $conexao;	

	function __construct($conexao) {
		$this->conexao = $conexao;
	}

	// INSERT
	function insereContato(Contato $contato) {
		
		$contato->setNome(mysqli_real_escape_string($this->conexao, $contato->getNome()));
		$contato->setFixo(mysqli_real_escape_string($this->conexao, $contato->getFixo()));
		$contato->setCelular(mysqli_real_escape_string($this->conexao, $contato->getCelular()));
		$contato->setEmail(mysqli_real_escape_string($this->conexao, $contato->getEmail()));
		$contato->setEndereco(mysqli_real_escape_string($this->conexao, $contato->getEndereco()));
		$contato->setNascimento(mysqli_real_escape_string($this->conexao, $contato->getNascimento()));
		

		$query = "INSERT INTO contato (nome, telefoneFixo, telefoneCelular, email, endereco, nascData, id_categoria) 
				  VALUES ('{$contato->getNome()}', 
				  		  '{$contato->getFixo()}', 
				  		  '{$contato->getCelular()}', 
				  		  '{$contato->getEmail()}', 
				  		  '{$contato->getEndereco()}', 
				  		  '{$contato->inverteData($contato->getNascimento())}', 
				  		   {$contato->getCategoria()->getId()})";

		//echo $query;
		return mysqli_query($this->conexao, $query);
	}

	//SELECT
	function listaContatos(){
		$contatos = array(); //crio um array para receber todos os contatos...
		$resultado = mysqli_query($this->conexao, "SELECT co.*, ca.nome as nome_categoria FROM contato co 
											 JOIN categoria ca ON ca.id = co.id_categoria"); //busco todos os contatos e guardo na variavel resultado...

		//enquanto houver um contato dentro da variavel resultado, eu guardo ele no array
		while($contato_array = mysqli_fetch_assoc($resultado)){
			$categoria = new Categoria();
			$contato = new Contato( $contato_array['nome'],
									$contato_array['telefoneFixo'],
									$contato_array['telefoneCelular'],
									$contato_array['email'],
									$contato_array['endereco'],
									$contato_array['nascData'],
									$categoria
									);

			$contato->setId($contato_array['id']);
			$contato->getCategoria()->setNome($contato_array['nome_categoria']);
			
			//$contato->setNascimento(implode("/",array_reverse(explode("-",##### ))));

			array_push($contatos, $contato);
		}

		return $contatos; //retorno o array de contatos
	}

	//UPDATE
	function alteraContato(Contato $contato) {

		$contato->setNome(mysqli_real_escape_string($this->conexao, $contato->getNome()));
		$contato->setFixo(mysqli_real_escape_string($this->conexao, $contato->getFixo()));
		$contato->setCelular(mysqli_real_escape_string($this->conexao, $contato->getCelular()));
		$contato->setEmail(mysqli_real_escape_string($this->conexao, $contato->getEmail()));
		$contato->setEndereco(mysqli_real_escape_string($this->conexao, $contato->getEndereco()));
		$contato->setNascimento(mysqli_real_escape_string($this->conexao, $contato->getNascimento()));

		//exit($contato);

		$query = "UPDATE contato SET 
					nome = 				'{$contato->getNome()}', 
					telefoneFixo = 		'{$contato->getFixo()}', 
					telefoneCelular = 	'{$contato->getCelular()}', 
					email = 			'{$contato->getEmail()}', 
					endereco = 			'{$contato->getEndereco()}', 
					nascData = 			'{$contato->inverteDataBD()}', 
					id_categoria = 		 {$contato->getCategoria()->getId()} 
				  WHERE 
				  	id = 				 {$contato->getId()}";

		//echo $query;
		return mysqli_query($this->conexao, $query);
	}

	//SELECT WHERE busca
	function buscaContato(Contato $contato) {
		$query = "SELECT * FROM contato WHERE id = {$contato->getId()}";
		$resultado = mysqli_query($this->conexao, $query);
		$contato_buscado = mysqli_fetch_assoc($resultado);
		
		$contato->setId($contato_buscado['id']);
		$contato->setNome($contato_buscado['nome']);
		$contato->setFixo($contato_buscado['telefoneFixo']);
		$contato->setCelular($contato_buscado['telefoneCelular']);
		$contato->setEmail($contato_buscado['email']);
		$contato->setEndereco($contato_buscado['endereco']); 
		$contato->setNascimento($contato_buscado['nascData']);
		$contato->getCategoria()->setId($contato_buscado['id_categoria']);
		
		return $contato;
	}

	//DELETE 
	function removeContato($id) {
		$query = "DELETE FROM contato WHERE id = {$id}";
		return mysqli_query($this->conexao, $query);
	}

	}
