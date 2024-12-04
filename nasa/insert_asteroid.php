<?php
$host = 'localhost';
$dbname = 'asteroids_db';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'] ?? null;
        $diameter = $_POST['diameter'] ?? null;
        $proximity = $_POST['proximity'] ?? null;
        $approach_date = $_POST['approach_date'] ?? null;

        if ($name && $diameter && $proximity && $approach_date) {
            $stmt = $pdo->prepare("
                INSERT INTO asteroids (name, diameter, proximity, approach_data) 
                VALUES (:name, :diameter, :proximity, :approach_date)
            ");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':diameter', $diameter);
            $stmt->bindParam(':proximity', $proximity);
            $stmt->bindParam(':approach_date', $approach_date);

            if ($stmt->execute()) {
                echo "Asteroide armazenado com sucesso.";
            } else {
                echo "Erro ao armazenar o asteroide.";
            }
        } else {
            echo "Dados incompletos.";
        }
    } else {
        echo "Método inválido.";
    }
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>
