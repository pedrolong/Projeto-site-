<?php
// Conectar ao banco de dados (substitua os valores conforme necessário)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "diegodb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obter os dados do formulário de login
$cpf = $_POST["cpf"];
$senha = $_POST["senha"];

// Verificar as credenciais no banco de dados
$sql = "SELECT * FROM usuarios WHERE cpf='$cpf' AND senha='$senha'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Login bem-sucedido
    echo "Login realizado com sucesso!";
} else {
    // Credenciais inválidas
    echo "Credenciais inválidas!";
}

$conn->close();
?>
