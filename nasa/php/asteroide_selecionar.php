<?php
    require "banco.php";

    if (!isset($_GET['id'])){
        echo "Erro, id é obrigatório";
        exit();
    }

    $idcidade = $_GET['id'];
    $sql = "select * from asteroids where id = :id";
    $qry = $con->prepare($sql);
    $qry->bindParam(':id', $id, PDO::PARAM_STR);
    $qry->execute();
    $registros = $qry->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($registros);
?>
//https://localhost/nasa/php/asteroide_selecionar.php?id=