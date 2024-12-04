<?php
    require "banco.php";

    if (!isset($_GET['id']) || !isset($_GET['name']) || !isset($_GET['diameter']) || !isset($_GET['proximity']) || !isset($_GET['approach_data'])){
        echo "Erro, preencha todas os campos.";
        exit();
    }

    $id = $_GET['id'];
    $name = $_GET['name'];
    $diameter = $_GET['diameter'];
    $proximity = $_GET['proximity'];
    $approach_data = $_GET['approach_data'];

    $sql = "update asteroids set name = :name, diameter = :diameter, proximity = :proximity, approach_data = :approach_data where id = :id";
    $qry = $con->prepare($sql);
    $qry->bindParam(':id', $id, PDO::PARAM_STR);
    $qry->bindParam(':name', $name, PDO::PARAM_STR);
    $qry->bindParam(':diameter', $diameter, PDO::PARAM_STR);
    $qry->bindParam(':proximity', $proximity, PDO::PARAM_STR);
    $qry->bindParam(':approach_data', $approach_data, PDO::PARAM_STR);
    $qry->execute();
    $nr = $qry->rowCount();
    echo $nr;
?>
//https://localhost/nasa/php/asteroide_alterar.php?id=363&name=(2021%20WL4)&diameter=0.10&proximity=9510693.38&approach_data=2024-12-01