<?php
$conn = new mysqli("localhost", "usuario", "senha", "banco_de_dados");

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $info = $_POST['info'];
    $sql = "UPDATE informacoes SET info='$info' WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Informação atualizada com sucesso!";
    } else {
        echo "Erro: " . $conn->error;
    }
    $conn->close();
    header("Location: index.php");
    exit;
}

// Carregar a informação atual para edição
$sql = "SELECT * FROM informacoes WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<form method="POST" action="">
    <input type="text" name="info" value="<?php echo $row['info']; ?>" required>
    <button type="submit">Atualizar</button>
</form>
