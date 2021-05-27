<?php
//Iniciar sessão no inicio do documento:
session_start();
//incluir conexão:
include_once("conexao.php");
$cep = filter_input(INPUT_GET, 'cep', FILTER_SANITIZE_NUMBER_INT);
// Criar a query correspondente do CRUD primeiro: LISTAR
// $result_enderecos = "SELECT * FROM enderecos WHERE cep = '32185090' "; // endereco fixo
$result_enderecos = "SELECT * FROM enderecos WHERE cep = '$cep' "; // endereco qualquer
//Agora precisa executar a query:
$resultado_enderecos = mysqli_query($conn, $result_enderecos);
$row_enderecos = mysqli_fetch_assoc($resultado_enderecos)

?>

<!doctype html> 

<html lang = "pt-BR">

<head>

<title>Editar endereços</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> <!-- Bootstrap -->

<meta charset=utf-8>

<link rel="shortcut icon" href="favicon.ico" type="image/x-ico">

</head>

<body>
<div class="container">
<?php
//verificar se a sessão existe
if (isset($_SESSION['msg'])) {
	echo $_SESSION['msg'];
	unset ($_SESSION['msg']);
}
?>

<a href='busca_cep.html'>Buscar CEP</a><br>
<a href='index.php'>Listar</a><br>

<h2>Editar CEP</h2>
<form method="POST" action="processa_editar_cep.php">
        <label>Cep:
        <input name="cep" type="text" id="cep" value= "<?php echo  $row_enderecos['cep']; ?> "/></label><br />
        <label>Rua:
         <input name="rua" type="text" id="cep" value= "<?php echo  $row_enderecos['rua']; ?> "/></label><br />
        <label>Bairro:
         <input name="bairro" type="text" id="cep" value= "<?php echo  $row_enderecos['bairro']; ?> "/></label><br />
        <label>Cidade:
         <input name="cidade" type="text" id="cep" value= "<?php echo  $row_enderecos['cidade']; ?> "/></label><br />
        <label>Estado:
         <input name="uf" type="text" id="cep" value= "<?php echo  $row_enderecos['uf']; ?> "/></label><br />
       <label>IBGE:
         <input name="ibge" type="text" id="cep" value= "<?php echo  $row_enderecos['ibge']; ?> "/></label><br /> 
        
		<input  type="submit"  value="Salvar" /></label><br />

</div>
</body>

</html>