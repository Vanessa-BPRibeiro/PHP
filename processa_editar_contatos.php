<?php
session_start();
//Conexão com o banco de dados: 
include_once("conexao.php");

$id=filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome=filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$telefone=filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$tipo=filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
$email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);


// Editar no banco de dados - Criar a query correspondente do CRUD primeiro: EDITAR

$result_contatos="UPDATE contatos SET  nome='$nome', telefone='$telefone', tipo='$tipo', email='$email' WHERE id='$id' ";

//Agora precisa executar a query:

$resultado_contatos = mysqli_query($conn, $result_contatos);

if (mysqli_affected_rows($conn)) {
	$_SESSION['msg']="<h3 style='color: green';>Contato alterado com sucesso!</h3>";
	header("Location: index.php");
	
	
} else {
	$_SESSION['msg']= "<h3 style='color: red';>Contato não alterado: Erro!</h3><br>";
	header("Location: index.php");
	;
	
}

