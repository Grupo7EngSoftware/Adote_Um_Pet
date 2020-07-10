<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "unityacess";

$nome = filter_input(INPUT_POST, "nome");
$porte = filter_input(INPUT_POST, "porte");
$descricao = filter_input(INPUT_POST, "descricao");
$doença = filter_input(INPUT_POST, "doença");
$vacinas = filter_input(INPUT_POST, "vacinas");


$connect = new mysqli($server, $username, $password, $db);

if(!$connect){
    die("Connection Failed". mysqli_connect_error());
}
$sql = "INSERT INTO prontuario (nome, porte, descricao, doença, vacinas)
        VALUES ('".$nome."', '".$porte."', '".$descricao."', '".$doença."', '".$vacinas."')";
$result = mysqli_query($connect, $sql);

if(!$result){
    echo"houve um erro";
}
else{
    echo"Prontuario cadastrado com sucesso";
}

?>
<form action="tela_admin.php">
    <input type="submit" value="Voltar">
</form>
