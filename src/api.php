<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
header('Access-Control-Allow-Credentials: true');

$data = array("message" => "Hello from PHP API");
echo json_encode($data);

// Conexão com o banco de dados (substitua com suas próprias credenciais)
$hostname = "localhost"; //Endereço do Banco, pode ser um link 
$bancodedados = "feiratecno"; //
$usuario = "root";
$senha = "";


$conn = new mysqli($hostname, $usuario, $senha, $bancodedados);

if ($conn->connect_error) {
    die("Conexão com o banco de dados falhou: " . $conn->connect_error);
}

// Manipulação da solicitação GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Execute uma consulta SQL para recuperar dados do banco de dados
    $sql = "SELECT * FROM usuarios";
    $result = $conn->query($sql);

    $data = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    echo json_encode($data);
}

// Manipulação da solicitação POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Receba os dados POST em formato JSON
    $data = json_decode(file_get_contents("php://input"));

    // Execute uma inserção de dados no banco de dados
    $nome = $data->nome; // Substitua 'nome' pelo nome do campo
    // Execute uma inserção no banco de dados

    $sql = "INSERT INTO sua_tabela (nome) VALUES ('$nome')"; // Substitua sua_tabela e nome
    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . $conn->error;
    }
}

$conn->close();
?>
