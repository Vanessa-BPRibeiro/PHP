<?php
session_start();
//Conexão com o banco de dados: 
include_once("conexao.php");

$cep=filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_NUMBER_INT);
$rua=filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
$bairro=filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$cidade=filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$uf=filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_STRING);
$ibge=filter_input(INPUT_POST, 'ibge', FILTER_SANITIZE_NUMBER_INT);


/* echo "<strong>CEP: </strong>".$cep."<br>";
echo "<strong>Rua: </strong>".$rua."<br>";
echo "<strong>Cidade: </strong>".$bairro."<br>";
echo "<strong>Bairro: </strong>".$cidade."<br>";
echo "<strong>Estado: </strong>".$uf."<br>";
echo "<strong>IBGE: </strong>".$ibge."<br><hr>"; */



// Editar no banco de dados - Criar a query correspondente do CRUD primeiro: EDITAR

$result_enderecos="UPDATE enderecos SET cep='$cep', rua='$rua', bairro='$bairro', cidade='$cidade', uf='$uf', ibge='$ibge' WHERE cep='$cep'";

//Agora precisa executar a query:

$resultado_enderecos = mysqli_query($conn, $result_enderecos);

if (mysqli_affected_rows($conn)) {
	$_SESSION['msg']="<h3 style='color: green';>Endereço alterado com sucesso!</h3>";
	header("Location: index.php");
	
} else {
	$_SESSION['msg']= "<h3 style='color: red';>Endereço não alterado!</h3><br>";
	header("Location: index.php");
	
}
