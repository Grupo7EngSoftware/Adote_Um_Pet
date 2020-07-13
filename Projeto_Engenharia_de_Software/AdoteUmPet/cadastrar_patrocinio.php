<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "unityacess";

$nome = $_POST["nome"];
$cnpj = $_POST["cnpj"];
$endereco = $_POST["endereco"];
$email = $_POST["email"];
$logo = $_POST["logo"];

$connect = new mysqli($server, $username, $password, $db);

if(!$connect){
    die("Connection Failed". mysqli_connect_error());
}
$sql = "INSERT INTO patrocinio (nome, cnpj, endereco, email, logo)
        VALUES ('".$nome."', '".$cnpj."', '".$endereco."', '".$email."', '".$logo."')";
$result = mysqli_query($connect, $sql);

if(!$result){
    echo"houve um erro";
}
else{
    echo"Cadastrado foi realizado sucesso";
}

?>
<form action="tela_admin.php">
    <input type="submit" value="Voltar">
</form>
