<?php 
require_once("cabecalho.php");

$id = $_GET["id"];
$categoriaDAO = new CategoriaDAO($conexao);
$categoria = $categoriaDAO->buscaCategoria($id);
?>


<h2>Alterar Categoria</h2>

	<form action="altera-categoria.php" method="post">
	<input type="hidden" name="id" value="<?=$categoria['id'] ?>">	
	<table class="table table-striped table-bordered">	
		<tr>
			<td>Nome</td>
			<td><input class="form-control" type="text" name="nome" value="<?=$categoria['nome'] ?>" /></td>
		</tr>

		<tr>
			<td><button class="btn btn-primary" type="submit">Alterar</button></td>
			<td></td>
		</tr>
	</table>
	</form>
<?php 
require_once("rodape.php")
 ?>