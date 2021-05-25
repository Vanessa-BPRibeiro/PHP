<?php
session_start();
//Conexão com o banco de dados: 
include_once("conexao.php");

$id=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT); // GET porque estará recebendo os dados

// Deletar do banco de dados - Criar a query correspondente do CRUD primeiro: DELETAR

$result_contatos="DELETE FROM contatos WHERE id = '$id' ";

//Agora precisa executar a query:

$resultado_contatos = mysqli_query($conn, $result_contatos);


if (mysqli_affected_rows($conn)) {
	$_SESSION['msg']="<h3 style='color: green';>Contato apagado.</h3>";
	header("Location: index.php");
	
} else {
	$_SESSION['msg']= "<h3 style='color: red';>Contato não pode ser apagado!</h3><br>";
	header("Location: index.php");
	
}
