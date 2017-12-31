<?php 

spl_autoload_register(function($nomeDaClase) {
	require_once("class/".$nomeDaClase.".php");
});

error_reporting(E_ALL ^ E_NOTICE);
require_once("mostra-alerta.php");

require_once("conecta.php");
 ?>

<html>
<head>
	<meta charset="utf-8">
	<title>Minha Agenda</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/agenda.css">
</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">Minha Agenda</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href="contato-formulario.php">Adiciona Contato</a></li>
					<li><a href="contato-lista.php">Contatos</a></li>
					<li><a href="categoria-formulario.php">Adiciona Categoria</a></li>
					<li><a href="categoria-lista.php">Categorias</a></li>
					<li><a href="sobre.php">Sobre Mim</a></li>
					<li><a href="contato.php">Contato</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="principal">
			
<?php 
mostraAlerta("success");
mostraAlerta("danger");
 ?>