<?php 
require_once("cabecalho.php");
require_once("logica-usuario.php");

$id = $_POST['id'];
$categoriaDAO = new CategoriaDAO($conexao);

$categoriaDAO->removeCategoria($id);
$_SESSION['success'] = "Categoria removida com sucesso!";
header("Location: categoria-lista.php");
die();
?>