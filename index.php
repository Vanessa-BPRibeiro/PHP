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
<a href='login_agenda.php'>Cadastrar contatos</a><br>

<h1>Agenda de contatos</h1>

<?php
//verificar se a sessão existe
if (isset($_SESSION['msg'])) {
	echo $_SESSION['msg'];
	unset ($_SESSION['msg']);
}

// Criar a query correspondente do CRUD primeiro: LISTAR
$result_contatos = "SELECT  * FROM contatos ";


//Agora precisa executar a query:

$resultado_contatos = mysqli_query($conn, $result_contatos);


?>


<table class="table table-sm table-bordered ">
  <thead>
    <tr class="table-danger">
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Tipo</th>
	  <th scope="col">Email</th>
	  <th scope="col">Ação</th>
	  <th scope="col"></th>
    </tr>
  </thead>

<?php
//Criar um while para percorrer o array de dados:
while ($row_contatos = mysqli_fetch_assoc($resultado_contatos)) {

echo "<tbody>
    <tr>
<th scope='row' class='table-primary'>". $row_contatos['id'] ."</th>
<td class='table-secondary'>". $row_contatos['nome']."</td>
<td class='table-secondary'>".$row_contatos['telefone']."</td>
<td class='table-secondary'>". $row_contatos['tipo']."</td>
<td class='table-secondary'>".$row_contatos['email']."</td>
<td class='table-secondary'><a href='editar_contatos.php?id=" . $row_contatos['id'] . "'>Editar</a></td>
<td class='table-secondary'><a href='deletar_contatos.php?id=" . $row_contatos['id'] . "'>Apagar</a></td>
</tr> ";

}

// Somar a quantidade de registros no banco de dados:
$result_cont = "SELECT COUNT(id) AS num_result FROM contatos";
$resultado_cont = mysqli_query($conn, $result_cont);
$row_cont = mysqli_fetch_assoc($resultado_cont);
echo "<strong>Número de registros:</strong> ". $row_cont['num_result']."<br><br>";
?>

</tbody>
</table>

</div>
</body>

</html>


