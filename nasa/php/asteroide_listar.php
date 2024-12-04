<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type");

    require "banco.php";

    try {
        $sql = "SELECT * FROM asteroids ORDER BY id";
        $qry = $con->prepare($sql);
        $qry->execute();

        $registros = $qry->fetchAll(PDO::FETCH_OBJ);

        if ($registros) {
            echo json_encode($registros);
        } else {
            echo json_encode([]);
        }
    } catch (PDOException $e) {
        echo json_encode(["error" => "Erro ao acessar o banco de dados: " . $e->getMessage()]);
    }
?>