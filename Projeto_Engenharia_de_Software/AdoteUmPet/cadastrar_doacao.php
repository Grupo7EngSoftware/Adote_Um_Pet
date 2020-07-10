<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "unityacess";

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$endereco = $_POST["endereco"];
$data_nascimento = $_POST["data_nascimento"];
$email = $_POST["email"];
$doacao = $_POST["doacao"];

$connect = new mysqli($server, $username, $password, $db);

if(!$connect){
    die("Connection Failed". mysqli_connect_error());
}
$sql = "INSERT INTO doacao (nome, cpf, endereco, data_nascimento, email, doacao)
        VALUES ('".$nome."', '".$cpf."', '".$endereco."', '".$data_nascimento."', '".$email."', '".$doacao."')";
$result = mysqli_query($connect, $sql);

if(!$result){
    echo"houve um erro";
}
else{
    echo"Doação foi cadastrada!";
}

?>
<form action="listar_doacao.php">
    <input type="submit" value="Voltar">
</form>
