<!--CAMPO DE PESQUISAR USUARIO PELO CPF-->

<head>
  <?php require "sidebar.php"; ?>
</head>
<body>
  <div>
    <h1>Pesquisar Patrocínios</h1>
    <form method="POST" action="consultar_patrocinio.php">
        Pesquisar:<input type="text" name="pesquisar" placeholder="Digite o CNPJ">
        <input type="submit" value="ENVIAR">
    </form>
    <form action="tela_admin.php">
    <input type="submit" value="Voltar">
</form>
  </div>
  

</body>

