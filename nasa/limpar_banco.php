<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "asteroids_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$sql = "TRUNCATE TABLE asteroids";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["success" => true, "message" => "Tabela limpa com sucesso!"]);
} else {
    echo json_encode(["success" => false, "message" => "Erro ao limpar tabela: " . $conn->error]);
}

$conn->close();
?>
