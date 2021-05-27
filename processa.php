<?php

//Conexão com o banco de dados: 

include_once("conexao.php");

$cep=filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_NUMBER_INT);
$rua=filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
$bairro=filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$cidade=filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$uf=filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_STRING);
$ibge=filter_input(INPUT_POST, 'ibge', FILTER_SANITIZE_NUMBER_INT);


echo "<strong>CEP: </strong>".$cep."<br>";
echo "<strong>Rua: </strong>".$rua."<br>";
echo "<strong>Cidade: </strong>".$bairro."<br>";
echo "<strong>Bairro: </strong>".$cidade."<br>";
echo "<strong>Estado: </strong>".$uf."<br>";
echo "<strong>IBGE: </strong>".$ibge."<br><hr>";



// Inserir no banco de dados - Criar a query correspondente do CRUD primeiro: INSERIR

$result_enderecos="INSERT INTO enderecos (cep, rua, bairro, cidade, uf, ibge) VALUES ('$cep', '$rua', '$bairro', '$cidade', '$uf', '$ibge')";

//Agora precisa executar a query:

$resultado_enderecos = mysqli_query($conn, $result_enderecos);

if ($resultado_enderecos) {
	$_SESSION['msg']= "<h3 style='color: green';>Endereço cadastrado com sucesso!</h3>";
	header("Location: index.php");
	
} else {
	$_SESSION['msg']= "<h3 style='color: red';>Endereço não cadastrado!</h3><br>";
	header("Location: index.php");
	
}
echo "<a href=busca_cep.html>Buscar CEP</a><br>";
