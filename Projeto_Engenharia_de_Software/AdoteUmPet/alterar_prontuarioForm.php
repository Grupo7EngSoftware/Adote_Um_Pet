<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<head>
    <?php require "sidebar.php"; ?>
    <meta charset="UTF-8">
    <title>Alterar</title>
    <link rel="styleshhet" href="estilo/estilo.css"/>
    <?php
        $nome = filter_input(INPUT_GET, "nome");
        $porte = filter_input(INPUT_GET, "porte");
        $descricao = filter_input(INPUT_GET, "descricao");
        $doença = filter_input(INPUT_GET, "doença");
        $vacinas = filter_input(INPUT_GET, "vacinas");
    ?>
</head>

<form class="form-horizontal" action="alterar_prontuario.php">
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
  <label class="col-md-4 control-label" for="porte">Porte</label>
  <div class="col-md-5">
  <input name="porte" type="text" placeholder="" class="form-control input-md"value="<?php echo $porte?>">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="descriao">Descrição</label>
  <div class="col-md-4">
  <input name="descricao" type="text" class="form-control input-md"value="<?php echo $descricao?>">

  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="doença">Doenças</label>
  <div class="col-md-8">
  <input name="doença" type="text" placeholder="" class="form-control input-md" value="<?php echo $doença?>">

  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="vacinas">Vacinas</label>
  <div class="col-md-4">
    <input name="vacinas" type="text" placeholder="" class="form-control input-md" required="" value="<?php echo $vacinas?>">

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
