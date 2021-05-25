<html>
    <head>
    <title>Agenda de contatos</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> <!-- Bootstrap -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
	<div class="container">
<a href='index.php'>Listar</a><br>


<h2>Salvar contatos</h2>
    <!-- Inicio do formulario 
      <form method="POST" action="processa_agenda.php">
	    
       	<input name="id" type="hidden"  id="id" value="" /></label><br />
       	<label>Nome: </label>
	    <input name="nome" type="text" size="25" id="nome"/><br>
		<label>Telefone: </label>
        <input name="telefone" type="text" size="23" id="telefone"  /><br>
		<input type='radio' name='tipo' id="tipo" value='Celular'>Celular<br>
		<input type='radio' name='tipo' id="tipo" value='Residencial'>Residencial<br>
        <label>Email: </label>
        <input name="email" type="text"  size="25" id="email"  /><br>
		
		<input  type="submit"  value="Cadastrar" /><br>  -->
		
  <form method="POST" action="processa_agenda.php">
    <div class="form-group row">
	<input name="id" type="hidden" class="form-control" id="id" value="" /></label><br />
	
    <label for="inputNome" class="col-sm-2 col-form-label">Nome</label>
    <div class="col-sm-10">
    <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome">
    </div>
    </div>
  
  <div class="form-group row">
    <label for="inputTelefone" class="col-sm-2 col-form-label">Telefone</label>
    <div class="col-sm-10">
      <input name="telefone" type="text" class="form-control" id="telefone" placeholder="Telefone com DDD">
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
      <input name="email" type="text" class="form-control" id="email" placeholder="Email">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
  </div>
		
      </form>
	  </div>
    </body>

    </html>