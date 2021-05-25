<?php
//iniciar sessão:
session_start();

?>
<!doctype html> 

<html lang = "pt-BR">

<head>

<title>Login Agenda</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> <!-- Bootstrap -->

<meta charset=utf-8>

<link rel="shortcut icon" href="favicon.ico" type="image/x-ico">

</head>

<body>


<?php

//verificar se a sessão existe
if (isset($_SESSION['msg'])) {
	echo $_SESSION['msg'];
	unset ($_SESSION['msg']);
}

?>


<form method="POST" action="valida_login_agenda.php">

<!--
<label>Usuário</label>
<input type="text" name="usuario" placeholder="Digite seu usuário"><br><br>
<label>Senha</label>
<input type="password" name="senha" placeholder="Digite sua senha"><br><br>

<input type="submit" name="btnLogin" value="Acessar">  -->
<div class="col-md-3 offset-md-3" >

<h2>Área restrita</h2><br>

  
  <div class="row mb-3" >
  
    <label for="inputUsuario"  class="col-sm-2 col-form-label">Usuário</label>
    <div class="col-sm-10">
	<input type="text" class="form-control" name="usuario" placeholder="Digite seu usuário">
   </div>
  </div>
  
  <div class="row mb-3">
    <label for="inputSenha" class="col-sm-2 col-form-label">Senha</label>
    <div class="col-sm-10">
	<input type="password" class="form-control" name="senha" placeholder="Digite sua senha">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">  
 <input type="submit" name="btnLogin" class="btn btn-primary" value="Entrar">
  </div>
  </div>
 </div>
</div>

</form>


</body>

</html>