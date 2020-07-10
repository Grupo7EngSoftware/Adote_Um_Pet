<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
  <form class="form-horizontal" method="POST" action="cadastrar_doacao.php">
  <fieldset>

  <!-- Form Name -->
  <legend>Cadastro de doação</legend>
  <div style="background-color: #4ED4E8"></div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="nome">Nome</label>
    <div class="col-md-5">
    <input name="nome" type="text" placeholder="Entre com o Nome" class="form-control input-md" required="">

    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="cpf">CPF</label>
    <div class="col-md-5">
    <input name="cpf" type="text" placeholder="Numero do CPF" class="form-control input-md">

    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="datanascimento">Data de Nascimento</label>
    <div class="col-md-4">
    <input name="data_nascimento" type="date" class="form-control input-md">

    </div>
  </div>


  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="endereco">Endereco</label>
    <div class="col-md-8">
    <input name="endereco" type="text" placeholder="Rua Numero Complemento" class="form-control input-md" >

    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="senha">Email</label>
    <div class="col-md-4">
      <input name="email" type="email" placeholder="Entre com o email" class="form-control input-md" required="">

    </div>
  </div>
  <!-- Password input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="senha">Doação</label>
    <div class="col-md-4">
      <input name="doacao" type="text" placeholder="O que você quer doar?" class="form-control input-md" required="">

    </div>
  </div>


  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="singlebutton">Finalizar</label>
    <div class="col-md-4">
      <input type="submit" value="Cadastrar"<br><br>
    </div>
  </div>
  </fieldset>
  </form>
</body>
