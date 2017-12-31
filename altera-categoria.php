<?php 
require_once("cabecalho.php");
require_once("logica-usuario.php");

verificaUsuario();

$categoria = new Categoria();
$categoria->setId($_POST['id']);
$categoria->setNome($_POST['nome']);
$categoriaDAO = new CategoriaDAO($conexao);

if($categoriaDAO->alteraCategoria($categoria)) { ?>
	<p class="text-success">A categoria <?= $categoria->getNome()?>, foi alterada com sucesso!!!</p>
<?php
}else { ?>
	<p class="text-danger">A categoria <?= $categoria->getNome()?>, não foi alterada.</p>
<?php
}

require_once("rodape.php"); ?>