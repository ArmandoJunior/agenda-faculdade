<?php 
require_once("cabecalho.php");
require_once("logica-usuario.php");

$id = $_POST['id'];
$contatoDAO = new ContatoDAO($conexao);
$contatoDAO->removeContato($id);
$_SESSION['success'] = "Contato removido com sucesso!";
header("Location: contato-lista.php");
die();
?>