<?php  
$server = "localhost";
$username = "root";
$password = "";
$db = "unityacess";

$nome = filter_input(INPUT_GET, "nome");
$cpf = filter_input(INPUT_GET, "cpf");
$endereco = filter_input(INPUT_GET, "endereco");
$data_nascimento = filter_input(INPUT_GET, "data_nascimento");
$email = filter_input(INPUT_GET, "email");
$doacao = filter_input(INPUT_GET, "doacao");

$connect = new mysqli($server, $username, $password, $db);
if(!$connect){
    die("Connection Failed". mysqli_connect_error());
}
$sql = "UPDATE doacao SET nome='$nome', cpf='$cpf', endereco='$endereco', data_nascimento='$data_nascimento', email='$email', doacao='$doacao' WHERE cpf='$_GET[cpf]'";
$result = mysqli_query($connect, $sql);
if(!$result){
    echo"houve um erro";
    die("Erro:" . mysqli_error($sql));
}
else{
    echo"Alterado com sucesso";
}
?>
<form action="tela_admin.php">
    <input type="submit" value="Voltar">
</form>