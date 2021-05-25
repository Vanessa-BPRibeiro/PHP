<?php

//Conexão com o banco de dados: 

include_once("conexao.php");

$id=filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome=filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$telefone=filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
$tipo=filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
$email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

/*
echo "<strong>Nome: </strong>".$nome."<br>";
echo "<strong>Telefone: </strong>".$telefone."<br>";
echo "<strong>Tipo: </strong>".$tipo."<br>";
echo "<strong>Email: </strong>".$email."<br><br>";

echo "<hr>"; */

// Inserir no banco de dados - Criar a query correspondente do CRUD primeiro: INSERIR

$result_contatos="INSERT INTO contatos (nome, telefone, tipo, email) VALUES ('$nome', '$telefone', '$tipo', '$email')";

//Agora precisa executar a query:

$resultado_contatos = mysqli_query($conn, $result_contatos);

if ($resultado_contatos) {
	header("Location: index.php");
	echo "<h3 style='color: green';>Contato salvo com sucesso!</h3>";
	
	
} else {
	header("Location: index.php");
	echo "<h3 style='color: red';>Contato não salvo: Erro!</h3><br>";
	header("Location: index.php");
}

