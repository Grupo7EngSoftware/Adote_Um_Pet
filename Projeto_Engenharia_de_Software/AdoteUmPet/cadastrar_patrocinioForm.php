<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<?php require "sidebar.php"; ?>
<body>
  <form class="form-horizontal" method="POST" action="cadastrar_patrocinio.php">
  <fieldset>

  <!-- Form Name -->
  <legend>Cadastro de Patrocínio</legend>
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
    <label class="col-md-4 control-label" for="cnpj">CNPJ</label>
    <div class="col-md-5">
    <input name="cnpj" type="text" placeholder="Numero do CNPJ" class="form-control input-md">

    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="endereco">Endereco</label>
    <div class="col-md-8">
    <input name="endereco" type="text" placeholder="Endereço da empresa" class="form-control input-md">

    </div>
  </div>


  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="email">Email</label>
    <div class="col-md-8">
    <input name="email" type="text" placeholder="Endereço de email" class="form-control input-md" >

    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="logo">Logo</label>
    <div class="col-md-4">
      <input name="logo" type="file" placeholder="Imagem da empresa" class="form-control input-md" required="">
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="singlebutton">Finalizar</label>
    <div class="col-md-4">
      <input type="submit" value="Cadastrar"<br><br>
    </div>
  </div>
  
  
  </div>
  </fieldset>
  </form>
</body>
