<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "unityacess";
$conn = new mysqli($server, $username, $password, $db);

if(!$conn){
    die("Connection Failed". mysqli_connect_error());
}

$pesquisar = $_POST["pesquisar"];
$sql = "SELECT * FROM prontuario WHERE id LIKE '".$pesquisar."'";
$result = mysqli_query($conn, $sql);
?>
<head>
  <link rel="shortcut icon" href="https://demo.learncodeweb.com/favicon.ico">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <?php require "sidebar.php"; ?>
</head>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">

	<div class="container">
		<h1><a href="https://learncodeweb.com/php/php-crud-in-bootstrap-4-with-search-functionality/"></a></h1>
		<div class="card">
			<div class="card-body">
		</div>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <table class="table table-striped table-bordered">
        <thead>
          <tr class="bg-primary text-white">
            <td>Id</>
            <td>Nome</>
						<td>Porte</td>
						<td>Descricao</td>
						<td>Doença</td>
						<td>Vacinas</td>
						<td>Ação</td>
					</tr>
				</thead>
				<tbody>
          <?php
              if ($result->num_rows > 0){
              while($dado = $result->fetch_array()){ ?>
					<tr>
                <td><?php echo $dado["id"] ?></td>
                <td><?php echo $dado["nome"] ?></td>
  							<td><?php echo $dado["porte"] ?></td>
  							<td><?php echo $dado["descricao"] ?></td>
  							<td><?php echo $dado["doença"] ?></td>
  							<td><?php echo $dado["vacinas"] ?></td>
                <td><a href="<?php echo "alterar_prontuarioForm.php?id=" . $dado["id"] . "&nome=" . $dado["nome"] . "&porte=" . $dado["porte"] . "&descricao=" . $dado["descricao"] . "&doença=" . $dado["doença"] . "&vacinas=" . $dado["vacinas"] ?>">Editar | </a>
                    <a href="remover_prontuario.php?id=<?php echo $dado["id"] ?>">Excluir</a></td>
            </tr>
            <?php } }
                else{
                    echo "Usuário não encontrado";
                }
            ?>

        </table>
    </body>
</hmlt>
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
