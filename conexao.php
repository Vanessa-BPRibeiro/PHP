<?php
$servidor="localhost";
$usuario="root";
$senha="";
$dbname="agenda";

//Criar conexão:

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);


/*
if ($conn) {
	echo "<h3 style='color: green';>Banco de dados $dbname conectado com sucesso!</h3><hr>";
} else {
	echo "<h3 style='color: red';>Erro de conexão</h3>";
}

*/