<?php 
require_once("cabecalho.php");
require_once("logica-usuario.php");

verificaUsuario();

$categoria = new Categoria();
$categoria->setId(1);
$categoriaDAO = new CategoriaDAO($conexao);
$contato = new Contato("", "", "", "", "", "", $categoria);

$categorias = $categoriaDAO->listaCategorias();

?>

<h2>Formulário de Cadastro</h2>
<form action="adiciona-contato.php" method="post">
<table class="table table-striped table-bordered">

	<?php include("contato-formulario-base.php"); ?>

		<tr>
			<td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
			<td></td>
		</tr>
	
	

</table>
</form>








<?php 
require_once("rodape.php")
?>