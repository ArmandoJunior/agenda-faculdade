<?php 
require_once("cabecalho.php");
require_once("logica-usuario.php");

verificaUsuario();
mostraAlerta("success");

?>

<table class="table table-striped table-bordered">

	<?php 
	$categoriaDAO = new CategoriaDAO($conexao);
	$categorias = $categoriaDAO->listaCategorias();

	foreach ($categorias as $categoria): ?>
	
	<tr>
		<td><?= $categoria->getId() ?></td>
		<td><?= $categoria->getNome() ?> ..............................................................................</td>
		<td><a class="btn btn-primary" href="categoria-altera-formulario.php?id=<?=$categoria->getId()?>">Alterar</a></td>
		<form action="remove-categoria.php" method="post">
			<input type="hidden" name="id" value="<?=$categoria->getId()?>">
			<td><button class="btn btn-danger">Remover</button></td>
		</form>
	</tr>	
	
	<?php
	endforeach
	?>

</table>
<?php require_once("rodape.php"); ?>
