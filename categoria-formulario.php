<?php 
require_once("cabecalho.php");
require_once("logica-usuario.php");

verificaUsuario();

?>


<h2>Formulário de Cadastro de Categoria</h2>
<form action="adiciona-categoria.php" method="post">
<table class="table table-striped table-bordered">
	
	<?php include("categoria-formulario-base.php") ?>

		<tr>
			<td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
			<td></td>
		</tr>
</table>
</form>





<?php 
require_once("rodape.php")
 ?>