<?php 
require_once("cabecalho.php");

$contato = new Contato("", "", "", "", "", "", new Categoria());
$contato->setId($_GET["id"]);
$categoriaDAO = new CategoriaDAO($conexao);
$contatoDAO = new ContatoDAO($conexao);

$contato = $contatoDAO->buscaContato($contato);

$categorias = $categoriaDAO->listaCategorias();

?>

<h2>Alterar Contato</h2>
<form action="altera-contato.php" method="post">
	<input type="hidden" name="id" value="<?=$contato->getId() ?>">
	<table class="table table-striped table-bordered">
		<?php require_once("contato-formulario-base.php") ?>

		<tr>
			<td><button class="btn btn-primary" type="submit">Alterar</button></td>
			<td></td>
		</tr>
	</table>
</form>











<?php 
require_once("rodape.php")
?>