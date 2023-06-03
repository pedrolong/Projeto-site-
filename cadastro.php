<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "diegodb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Recebe os dados do formulário de cadastro
$nome = $_POST['nome'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$tipoUsuario = $_POST['tipo-usuario'];

// Insere os dados no banco de dados
$sql = "INSERT INTO usuarios (nome, email, cidade, cpf, senha, tipo_usuario) VALUES ('$nome', '$email', '$cidade', '$cpf', '$senha', '$tipoUsuario')";
if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro no cadastro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
