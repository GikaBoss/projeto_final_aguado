<?php
$conn = new mysqli("localhost", "usuario", "senha", "banco_de_dados");

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $info = $_POST['info'];
    $sql = "INSERT INTO informacoes (info) VALUES ('$info')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Nova informação adicionada com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
header("Location: index.php");
exit;
?>
