<!doctype html>
<?php
//Busca no banco de dados e lista todos os usuarios cadastrados
$servername = "localhost";
$username = "root";
$password = "";
$db = "unityacess";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


$sql = "SELECT * FROM animais";
$result = mysqli_query($conn, $sql);

?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="https://demo.learncodeweb.com/favicon.ico">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <?php require "sidebar.php"; ?>
</head>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">
<body>
	<div class="container">
		<h1><a href="https://learncodeweb.com/php/php-crud-in-bootstrap-4-with-search-functionality/"></a></h1>
		<div class="card">
			<div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>Lista de animais</strong> <a href="cadastrar_animalForms.php?" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i> Adicionar animal</a></div>
			<div class="card-body">
		</div>

		<div>
			<table class="table table-striped table-bordered">
				<thead>
					<tr class="bg-primary text-white">
						<td>ID</>
						<td>Nome</td>
						<td>Porte</td>
						<td>Descrição</td>
						<td>Foto</td>
						<td>Ação</td>
					</tr>
				</thead>
				<tbody>
					<?php while($dado = $result->fetch_array()){ ?>
					<tr>
              <td><?php echo $dado["id"] ?></td>
              <td><?php echo $dado["nome"] ?></td>
							<td><?php echo $dado["porte"] ?></td>
							<td><?php echo $dado["descricao"] ?></td>
              <td><img src="<?php echo "./ImagensAnimal/".$dado["foto"]?>"width="260" height="200"/></td>
							<td><a href="<?php echo "alterar_animalForms.php?id=" . $dado["id"] . "&nome=" . $dado["nome"] . "&porte=" . $dado["porte"] . "&descricao=" . $dado["descricao"] ?>">Editar | </a>
									<a href="remover_animal.php?id=<?php echo $dado["id"] ?>">Excluir</a></td>
					</tr>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div> <!--/.col-sm-12-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/jquery.caret/0.1/jquery.caret.js"></script>
<script src="https://www.solodev.com/_/assets/phone/jquery.mobilePhoneNumber.js"></script>
	<script
  src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
  crossorigin="anonymous"></script>
    <script>
	</script>
	<form action="tela_admin.php">
	    <input type="submit" value="Voltar">
	</form>
</body>
</html>
