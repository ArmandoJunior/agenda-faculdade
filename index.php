<?php 
require_once("cabecalho.php"); 
require_once("logica-usuario.php");
?>




	<h2>Bem Vindo, Armando!</h2>
	
	<?php 
		if(usuarioEstaLogado()){?>
			<p class="text-success">Você está logado como: <?=usuarioLogado() ?>
				<a href="logout.php">Deslogar</a>
			</p>

	<?php 
	}else {?>

	<h3>Login</h3>
            <form action="login.php" method="post">
            <table class="table">
                <tr>
                    <td>Login/Email</td>
                    <td><input class="form-control" type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Senha</td>
                    <td><input class="form-control" type="password" name="senha"></td>
                </tr>
                <tr>
                    <td><button type="submit" class="btn btn-primary">Login</button></td>
                </tr>
            </table>
            </form>

<?php 
}
require_once("rodape.php"); ?>