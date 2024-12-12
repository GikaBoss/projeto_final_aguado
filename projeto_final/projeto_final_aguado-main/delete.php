<?php
$conn = new mysqli("localhost", "usuario", "senha", "banco_de_dados");

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$id = $_GET['id'];
$sql = "DELETE FROM informacoes WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Informação deletada com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
header("Location: index.php");
exit;
?>
