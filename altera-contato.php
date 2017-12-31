<?php 
require_once("cabecalho.php");
require_once("logica-usuario.php");

verificaUsuario();

$categoria = new Categoria();
$contato = new Contato( $_POST['nome'],
						$_POST['fixo'],
						$_POST['celular'],
						$_POST['email'],
						$_POST['endereco'],
						$_POST['nascimento'],
						$categoria
						);

$contato->setId($_POST['id']);
$contato->getCategoria()->setId($_POST['id_categoria']);

$contatoDAO = new contatoDAO($conexao);

if($contatoDAO->alteraContato($contato)) { ?>
	<p class="text-success">O contato <?= $contato->getNome()?>, do email: <?= $contato->getEmail()?> foi alterado com sucesso!!!</p>
<?php
}else { ?>
	<p class="text-danger">O contato <?= $contato->getNome()?>, não foi alterado.</p>
<?php
}

require_once("rodape.php"); ?>