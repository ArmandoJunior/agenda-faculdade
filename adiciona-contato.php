<?php 
require_once("cabecalho.php");
require_once("logica-usuario.php");

verificaUsuario();

$categoria = new Categoria();
$contato = new Contato($_POST['nome'], $_POST['fixo'], $_POST['celular'], $_POST['email'], $_POST['endereco'], 
					   implode("-",array_reverse(explode("/",$_POST['nascimento']))), $categoria);

$contato->getCategoria()->setId($_POST['id_categoria']);

$contatoDAO = new contatoDAO($conexao);

if($contatoDAO->insereContato($contato)) { ?>
	<p class="text-success">O contato <?= $contato->getNome()?>, do email: <?= $contato->getEmail()?> foi incluido com sucesso!!!</p>
<?php
}else { ?>
	<p class="text-danger">O contato <?= $contato->getNome()?>, não foi incluido com sucesso!!!</p>
<?php
}

require_once("rodape.php"); ?>