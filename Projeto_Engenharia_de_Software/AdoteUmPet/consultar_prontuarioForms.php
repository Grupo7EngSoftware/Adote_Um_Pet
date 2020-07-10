<!--CAMPO DE PESQUISAR USUARIO PELO CPF-->

<head>
  <?php require "sidebar.php"; ?>
</head>
<body>
  <div>
    <h1>Pesquisar Prontuarios</h1>
    <form method="POST" action="consultar_prontuario.php">
        Pesquisar:<input type="text" name="pesquisar" placeholder="Digite o ID">
        <input type="submit" value="ENVIAR">
    </form>
  </div>
</body>
