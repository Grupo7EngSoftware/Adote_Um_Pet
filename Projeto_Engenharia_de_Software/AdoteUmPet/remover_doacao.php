<?php  
$server = "localhost";
$username = "root";
$password = "";
$db = "unityacess";

$conn = new mysqli($server, $username, $password, $db);


if(!$conn){
    die("Connection Failed". mysqli_connect_error());
}

$sql = "DELETE FROM doacao WHERE cpf='$_GET[cpf]'";
if(mysqli_query($conn, $sql)){
    echo "Doação removida com sucesso!";
}
else{
    echo "Não deletado";
}

?>
<form action="tela_admin.php">
    <input type="submit" value="Voltar">
</form>