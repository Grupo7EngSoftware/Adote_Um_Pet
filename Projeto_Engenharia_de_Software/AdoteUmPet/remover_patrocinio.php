<?php  
$server = "localhost";
$username = "root";
$password = "";
$db = "unityacess";

$conn = new mysqli($server, $username, $password, $db);


if(!$conn){
    die("Connection Failed". mysqli_connect_error());
}


$sql = "DELETE FROM patrocinio WHERE cnpj='$_GET[cnpj]'";
if(mysqli_query($conn, $sql)){
    echo "Removido com sucesso";
}
else{
    echo "Não deletado";
}

?>

<form action="consultar_patrocinioForm.php">
    <input type="submit" value="Pesquisar novamente">
</form>