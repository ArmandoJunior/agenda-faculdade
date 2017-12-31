<?php 
require_once("cabecalho.php");
require_once("logica-usuario.php");

verificaUsuario();

$categoria = new Categoria();
$categoria->setNome($_POST['nome']);
$categoriaDAO = new CategoriaDAO($conexao);

if($categoriaDAO->insereCategoria($categoria)) { ?>
	<p class="text-success">A categoria <?= $categoria->getNome()?> foi incluida com sucesso!!!</p>
<?php
}else { ?>
	<p class="text-danger">A categoria <?= $categoria->getNome()?> não foi incluida com sucesso!!!</p>
<?php
}

require_once("rodape.php"); ?>