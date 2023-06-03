<?php
// Conectar ao banco de dados (substitua os valores conforme necessário)
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obter os dados do formulário de cadastro
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$senha = $_POST["senha"];

// Inserir os dados no banco de dados
$sql = "INSERT INTO usuarios (nome, cpf, senha) VALUES ('$nome', '$cpf', '$senha')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro no cadastro: " . $conn->error;
}

$conn->close();
?>
