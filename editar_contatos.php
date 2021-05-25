<?php
//Iniciar sessão no inicio do documento:
session_start();

//incluir conexão:
include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
// Criar a query correspondente do CRUD primeiro: LISTAR

//$result_contatos = "SELECT * FROM contatos WHERE id = '5' "; // endereco fixo
$result_contatos = "SELECT * FROM contatos WHERE id = '$id' "; // endereco qualquer

//Agora precisa executar a query:
$resultado_contatos = mysqli_query($conn, $result_contatos);
$row_contatos = mysqli_fetch_assoc($resultado_contatos);

?>

<!doctype html> 

<html lang = "pt-BR">

<head>

<title>Editar endereços</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> <!-- Bootstrap -->

<meta charset=utf-8>


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

<a href='login_agenda.php'>Cadastrar contatos</a><br>
<a href='index.php'>Listar contatos</a><br>

<h2>Editar contato</h2>

<!--
<form method="POST" action="processa_editar_contatos.php">
        <input type="hidden" name="id" value= "<?php echo  $row_contatos['id'];?>"/><br>
        <label>Nome:
        <input name="nome" type="text" id="nome" value= "<?php echo  $row_contatos['nome']; ?> "/>
		</label><br>
        <label>Telefone:
         <input name="telefone" type="text" id="telefone" value= "<?php echo  $row_contatos['telefone']; ?> "/>
		 </label><br>
        <label>Tipo:
         <input name="tipo" type="text" id="tipo" value= "<?php echo  $row_contatos['tipo']; ?> "/>
		 </label><br>
        <label>Email:
         <input name="email" type="text" id="email" value= "<?php echo $row_contatos['email']; ?> "/>
		 </label><br>
                
		<input  type="submit"  value="Salvar" /></label><br />

</div>

</form> -->

  <form method="POST" action="processa_editar_contatos.php">
    <div class="form-group row">
	<input name="id" type="hidden" class="form-control" id="id" value="<?php echo  $row_contatos['id'];?>" /></label><br />
	
    <label for="inputNome" class="col-sm-2 col-form-label">Nome</label>
    <div class="col-sm-10">
    <input name="nome" type="text" class="form-control" id="nome" value= "<?php echo  $row_contatos['nome']; ?>" />
    </div>
    </div>
  
  <div class="form-group row">
    <label for="inputTelefone" class="col-sm-2 col-form-label">Telefone</label>
    <div class="col-sm-10">
      <input name="telefone" type="text" class="form-control" id="telefone" value= "<?php echo  $row_contatos['telefone']; ?>">Celular</input>
    </div>
  </div>
  
<fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Tipo</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" name='tipo' type="radio" id="tipo" value="Celular" checked>
          <label class="form-check-label" for="gridRadios1">
            Celular
          </label>
        </div>
       <div class="form-check">
          <input class="form-check-input" name='tipo' type="radio" id="tipo" value="Residencial">
          <label class="form-check-label" for="gridRadios2">
            Residencial
          </label>
        </div>
		 </fieldset>
  
 <div class="form-group row">
    <label for="inputEnail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input name="email" type="text" class="form-control" id="email" value= "<?php echo $row_contatos['email']; ?>" />
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
  </div>
		
      </form>
	  </div>

</body>

</html>