<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "unityacess";


$nome = filter_input(INPUT_GET, "nome");
$cnpj = filter_input(INPUT_GET, "cnpj");
$endereco = filter_input(INPUT_GET, "endereco");
$email = filter_input(INPUT_GET, "email");
$logo = filter_input(INPUT_GET, "logo");


$connect = new mysqli($server, $username, $password, $db);
if(!$connect){
    die("Connection Failed". mysqli_connect_error());
}
$sql = "UPDATE patrocinio SET nome='$nome', cnpj='$cnpj', endereco='$endereco', email='$email', logo='$logo' WHERE cnpj='$_GET[cnpj]'";
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
