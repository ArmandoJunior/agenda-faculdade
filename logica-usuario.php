<?php 
session_start();

	function verificaUsuario() {
		if(!isset($_SESSION["usuario_logado"])) {
			$_SESSION["danger"] = "Você não tem acesso a esta funcionalidade.";
			header("Location: index.php");
		die;
		}
	}

	function usuarioEstaLogado() {
		return isset($_SESSION['usuario_logado']);
	}

	function usuarioLogado() {
		return $_SESSION['usuario_logado'];
	}

	function logaUsuario($email) {
		$_SESSION['usuario_logado'] = $email;
	}

	function logout() {
		session_destroy();
		session_start();
		//unset($_SESSION['usuario_logado']);
	}