<?php
include 'conexao.php';

// Captura os dados do POST
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];
// Query com placeholders
$sql = "INSERT INTO contatos (nome, email, telefone, mensagem) VALUES (?, ?, ?, ?)";

// Prepara a query
$stmt = $conn->prepare($sql);

// Liga os parâmetros (4 strings: "ssss",)
$stmt->bind_param("ssss", $nome, $email, $telefone, $mensagem);

// Executa
if ($stmt->execute()) {
    echo "<strong>Dados inseridos com sucesso!</strong>";
} else {
    echo "Erro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

<p><a href="contato.php">Voltar</a></p>