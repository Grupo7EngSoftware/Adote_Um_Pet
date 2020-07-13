<!--CAMPO DE PESQUISAR USUARIO PELO CPF-->

<head>
  <?php require "sidebar.php"; ?>
</head>
<body>
  <div>
    <h1>Pesquisar Doação</h1>
    <form method="POST" action="consultar_doacao.php">
        Pesquisar:<input type="text" name="pesquisar" placeholder="Digite o CPF">
        <input type="submit" value="ENVIAR">
    </form>
  </div>
</body>
