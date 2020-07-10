<head>
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="/css/form-usuario.css">
<?php require "sidebar.php"; ?>
</head>
<body>
  <div class="form-usuario">

  <form class="form-horizontal" method="POST" action="cadastrar_animal.php">
  <fieldset>

  <!-- Form Name -->
  <legend>Cadastrar Animal</legend>
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
    <label class="col-md-4 control-label" for="cpf">Porte</label>
    <div class="col-md-5">
    <input name="porte" type="text" placeholder="Porte do animal" class="form-control input-md">

    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="datanascimento">Descrição</label>
    <div class="col-md-4">
    <input name="descricao" type="text" class="form-control input-md">

    </div>
  </div>


  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="endereco">Foto</label>
    <div class="col-md-8">
    <input name="foto" type="file" placeholder="Rua Numero Complemento" class="form-control input-md" >

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
</div>
</body>
