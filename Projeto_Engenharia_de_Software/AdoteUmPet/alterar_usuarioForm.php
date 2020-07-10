<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<head>
    <meta charset="UTF-8">
    <title>Alterar</title>
    <link rel="styleshhet" href="estilo/estilo.css"/>
    <?php
        $nome = filter_input(INPUT_GET, "nome");
        $cpf = filter_input(INPUT_GET,"cpf");
        $endereco = filter_input(INPUT_GET,"endereco");
        $data_nascimento = filter_input(INPUT_GET,"data_nascimento");
        $email = filter_input(INPUT_GET,"email");
        $senha = filter_input(INPUT_GET,"senha");
    ?>
</head>

<form class="form-horizontal" action="alterar_usuario.php">
<fieldset>

<!-- Form Name -->
<legend>Editar</legend>
<div style="background-color: #4ED4E8"></div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Nome</label>
  <div class="col-md-5">
  <input name="nome" type="text" placeholder="Entre com o Nome" class="form-control input-md" required=""value="<?php echo $nome?>">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cpf">CPF</label>
  <div class="col-md-5">
  <input name="cpf" type="text" placeholder="Numero do CPF" class="form-control input-md"value="<?php echo $cpf?>">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="datanascimento">Data de Nascimento</label>
  <div class="col-md-4">
  <input name="data_nascimento" type="date" class="form-control input-md"value="<?php echo $data_nascimento?>">

  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="endereco">Endereco</label>
  <div class="col-md-8">
  <input name="endereco" type="text" placeholder="Rua Numero Complemento" class="form-control input-md" value="<?php echo $endereco?>">

  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="senha">Email</label>
  <div class="col-md-4">
    <input name="email" type="email" placeholder="Entre com o email" class="form-control input-md" required="" value="<?php echo $email?>">

  </div>
</div>
<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="senha">Senha</label>
  <div class="col-md-4">
    <input name="senha" type="password" placeholder="Entre com a Senha" class="form-control input-md" required="">

  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Gravar</label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Gravar</button>
  </div>
</div>

</fieldset>
</form>
