<?php 
require_once("cabecalho.php");
require_once("logica-usuario.php");

verificaUsuario();

//require_once("menu-lista-contato.php");
?>


<h2>Lista de contatos</h2>
<table class="table table-striped table-bordered">
	
	<?php 
	$contatoDAO = new ContatoDAO($conexao);
	$contatos = $contatoDAO->listaContatos();?>
	
	<tr>
		<td><h5><b>Nome</b></h5></td>
		<td><h5><b>Telefone</b></h5></td>
		<td><h5><b>Celular</b></h5></td>
		<td><h5><b>E-mail</b></h5></td>
		<td><h5><b>Endereço</b></h5></td>
		<td><h5><b>Nascimento</b></h5></td>
		<td><h5><b>Idade</b></h5></td>
		<td><h5><b>Categoria</b></h5></td>
		
		
	</tr>

	<?php
	foreach ($contatos as $contato): ?>

	<tr>
		<td><?= $contato->getNome() ?></td>
		<td><?= $contato->getFixo() ?></td>
		<td><?= $contato->getCelular() ?></td>
		<td><?= $contato->getEmail() ?></td>
		<td><?= $contato->getEndereco() ?></td>
		<td><?= $contato->inverteData2() ?></td>
		<td><?= $contato->idade(); ?></td>
		<td><?= $contato->getCategoria()->getNome() ?></td>
		<td><a class="btn btn-primary" href="contato-altera-formulario.php?id=<?=$contato->getId()?>">Alterar</a></td>
		<form action="remove-contato.php" method="post">
			<input type="hidden" name="id" value="<?=$contato->getId()?>">
			<td><button class="btn btn-danger">Remover</button></td>
		</form>
	</tr>	
	<?php
	endforeach
	?>	
</table>
<?php require_once("rodape.php"); ?>

