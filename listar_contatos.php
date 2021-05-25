<?php
//Iniciar sessão no inicio do documento:
session_start();
//incluir conexão:
include_once("conexao.php");
?>


<!doctype html> 

<html lang = "pt-BR">

<head>

<title>Listar contatos</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> <!-- Bootstrap -->

<meta charset=utf-8>

</head>

<body>
<div class="container">
<a href='agenda.php'>Salvar contatos</a><br>

<h1>Agenda de contatos</h1>

<?php
//verificar se a sessão existe
if (isset($_SESSION['msg'])) {
	echo $_SESSION['msg'];
	unset ($_SESSION['msg']);
}
/*
// Criar paginação:
// Receber o número da página:
$pagina_atual = filter_input(INPUT_GET, 'pagina' , FILTER_SANITIZE_NUMBER_INT);
$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
//Configurar a quantidade de itens por página:
$qnt_result_pg = 3;
// Calcular o inicio da visualização:
$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
*/

// Criar a query correspondente do CRUD primeiro: LISTAR
$result_contatos = "SELECT  * FROM contatos ";


//Agora precisa executar a query:

$resultado_contatos = mysqli_query($conn, $result_contatos);

//Criar um while para percorrer o array de dados:
while ($row_contatos = mysqli_fetch_assoc($resultado_contatos)) {
	echo "<strong>ID: </strong>".$row_contatos['id']."<br>";
	echo "<strong>Nome: </strong>".$row_contatos['nome']."<br>";
	echo "<strong>Telefone: </strong>".$row_contatos['telefone']."<br>";
	echo "<strong>Tipo: </strong>".$row_contatos['tipo']."<br>";
	echo "<strong>Email: </strong>".$row_contatos['email']."<br>";
	echo "<a href='editar_contatos.php?id=" . $row_contatos['id'] . "'>Editar</a><br>"; // não esquecer do ?id=" . $row_contatos['id'] ao fim do link
	echo "<a href='deletar_contatos.php?id=" . $row_contatos['id'] . "'>Apagar</a><br><hr>"; // não esquecer ?id=" . $row_contatos['id'] ao fim do link
}

// Somar a quantidade de registros no banco de dados:
$result_cont = "SELECT COUNT(id) AS num_result FROM contatos";
$resultado_cont = mysqli_query($conn, $result_cont);
$row_cont = mysqli_fetch_assoc($resultado_cont);
echo "<strong>Número de registros:</strong> ". $row_cont['num_result']."<br><br>";
?>

</div>
</body>

</html>