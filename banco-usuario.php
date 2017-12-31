<?php 
include("conecta.php");

function listaUsuarios($conexao) {
	$usuarios = array();
	$query = "SELECT * FROM usuario";
	$resultado = mysqli_query($conexao, $query);

	while ($usuario = mysqli_fetch_assoc($resultado)) {
		array_push($usuarios, $usuario);
	}

	return $usuarios;
}

function buscaUsuario($conexao, $email, $senha) {
	$senhaMd5 = md5($senha);
	$email = mysqli_real_escape_string($conexao, $email);
	//echo($senhaMd5);
	$query = "SELECT * FROM usuario WHERE login = '{$email}' OR email = '{$email}' AND senha = '{$senhaMd5}'";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado); 
	return $usuario;
}

function insereUsuario($conexao, $nome, $fixo, $celular, $email, $endereco, $nascimento, $login, $senha) {
	$query = "INSERT INTO usuario (nome, fixo, celular, email, endereco, nascimento, login, senha) 
			  VALUES ('{$nome}', '{$fixo}', '{$celular}', '{$email}', '{$endereco}', '{$nascimento}', '{$login}' '{$senha}')";
	return mysqli_query($conexao, $query);
}

function removeUsuario($conexao, $id) {
	$query = "DELETE FROM usuario WHERE id = {$id}";
	return mysqli_query($conexao, $query);
}

function alteraUsuario($conexao, $id) {
	$query´= "UPDATE FROM usuario WHERE id = {$id}";
	return mysqli_query($conexao, $query);
}