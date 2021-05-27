<?php
session_start();
//Conexão com o banco de dados: 
include_once("conexao.php");

$cep=filter_input(INPUT_GET, 'cep', FILTER_SANITIZE_NUMBER_INT); // GET porque estará recebendo os dados

// Deletar do banco de dados - Criar a query correspondente do CRUD primeiro: DELETAR

$result_enderecos="DELETE FROM enderecos WHERE cep = '$cep' ";

//Agora precisa executar a query:

$resultado_enderecos = mysqli_query($conn, $result_enderecos);


if (mysqli_affected_rows($conn)) {
	$_SESSION['msg']="<h3 style='color: green';>Endereço apagado.</h3>";
	header("Location: index.php");
	
} else {
	$_SESSION['msg']= "<h3 style='color: red';>Endereço não pode ser apagado!</h3><br>";
	header("Location: index.php");
	
}