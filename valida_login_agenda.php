<?php

//iniciar sessão:
session_start();

//incluir conexao com banco de dados
include_once("conexao.php");

//buscar botão:
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);

IF ($btnLogin) {
	$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	//echo "$usuario - $senha";
}
	if (!empty($usuario) AND (!empty($senha))) {
		//Gerar senha criptografada:
		
	//echo password_hash($senha, PASSWORD_DEFAULT); 
	}

			// Pesquisar o usuario no banco de dados
		$result_usuario = "SELECT id, nome, email, senha FROM usuario WHERE usuario='$usuario' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if ($resultado_usuario) {
			$row_usuario= mysqli_fetch_assoc($resultado_usuario);
			if(password_verify($senha, $row_usuario['senha'])) {
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['email'] = $row_usuario['email'];
			header("Location: cadastro_contatos.php");
				
			} else {
				$_SESSION['msg']= "Login e senha incorreto!";
             header("Location: login_agenda.php");
			}		
		}
