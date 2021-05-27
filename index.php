<?php
//Iniciar sessão no inicio do documento:
session_start();
//incluir conexão:
include_once("conexao.php");
?>


<!doctype html> 

<html lang = "pt-BR">

<head>

<title>Listar endereços</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> <!-- Bootstrap -->

<meta charset=utf-8>

<link rel="shortcut icon" href="favicon.ico" type="image/x-ico">

</head>

<body>
<div class="container">
<a href='busca_cep.html'>Buscar CEP</a><hr>

<h3>Listar Endereços</h3>

<?php
//verificar se a sessão existe
if (isset($_SESSION['msg'])) {
	echo $_SESSION['msg'];
	unset ($_SESSION['msg']);
}

// Criar paginação:
// Receber o número da página:
$pagina_atual = filter_input(INPUT_GET, 'pagina' , FILTER_SANITIZE_NUMBER_INT);
$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
//Configurar a quantidade de itens por página:
$qnt_result_pg = 5;
// Calcular o inicio da visualização:
$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
// Criar a query correspondente do CRUD primeiro: LISTAR
$result_enderecos = "SELECT  * FROM enderecos LIMIT $inicio, $qnt_result_pg ";


//Agora precisa executar a query:

$resultado_enderecos = mysqli_query($conn, $result_enderecos);

?>

<table class="table table-sm table-bordered ">
  <thead>
    <tr class="table-danger">
      <th scope="col">CEP</th>
      <th scope="col">Rua</th>
      <th scope="col">Cidade</th>
      <th scope="col">Bairro</th>
	  <th scope="col">Estado</th>
	  <th scope="col">IBGE</th>
	  <th scope="col">Ação</th>
	  <th scope="col"></th>
    </tr>
  </thead>

<?php



//Criar um while para percorrer o array de dados:
while ($row_enderecos = mysqli_fetch_assoc($resultado_enderecos)) {
	
echo 
"<tbody>
 <tr>
<th scope='row' class='table-primary'>". $row_enderecos['cep'] ."</th>
<td class='table-secondary'>". $row_enderecos['rua']."</td>
<td class='table-secondary'>".$row_enderecos['cidade']."</td>
<td class='table-secondary'>". $row_enderecos['bairro']."</td>
<td class='table-secondary'>".$row_enderecos['uf']."</td>
<td class='table-secondary'>".$row_enderecos['ibge']."</td>
<td class='table-secondary'><a href='editar_cep.php?cep=". $row_enderecos['cep']. "'>Editar</a></td>
<td class='table-secondary'><a href='deletar_cep.php?cep=". $row_enderecos['cep']. "'>Apagar</a></td>
</tr>";
}
	
	
// Paginação 
// Somar a quantidade de registros no banco de dados:
echo "<br>";
$result_pg = "SELECT COUNT(cep) AS num_result FROM enderecos";
$resultado_pg = mysqli_query($conn, $result_pg);
$row_pg = mysqli_fetch_assoc($resultado_pg);
echo "<strong>Número de registros:</strong> ". $row_pg['num_result']."<br><br>";

// Quantidade de páginas: a função ceil() serve para arredondar o número. Ex: 7,3 passa a ser 7.
$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg );

// Limitar quantidade de links antes e depois: 1 2 3 4 ...
$max_links = 2;
//Primeira pagina
echo "<a href='index.php?pagina=1'>Primeira página</a> ";

//links para as paginas antes da pagina atual
for ($pag_anterior = $pagina - $max_links; $pag_anterior <= $pagina - 1; $pag_anterior++) {
	if ($pag_anterior >= 1) {
		echo "<a href='index.php?pagina=$pag_anterior'> ".$pag_anterior."</a> ";
	}
}
//Pagina atual:
echo $pagina ." ";

//links para as paginas depois da pagina atual
for ($pag_depois = $pagina + 1; $pag_depois <= $pagina + $max_links; $pag_depois++) {
	
	if ($pag_depois <= $quantidade_pg) {
		echo "<a href='index.php?pagina=$pag_depois'> ".$pag_depois."</a> ";
	}	
}
// Ultima pagina
echo "<a href='index.php?pagina=$quantidade_pg'> Última página</a>";
echo "<br>";

?>

</div>
</body>

</html>