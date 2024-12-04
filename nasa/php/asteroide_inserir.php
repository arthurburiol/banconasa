<?php
    require "banco.php";

    if (!isset($_GET['name']) || !isset($_GET['diameter']) || !isset($_GET['proximity']) || !isset($_GET['approach_date'])){
        echo "Erro, os campos são obrigatórios.";
        exit();
    }

    $name = $_GET['name'];
    $diameter = $_GET['diameter'];
    $proximity = $_GET['proximity'];
    $approach_date = $_GET['approach_date'];
    $sql = "insert into asteroids (name, diameter, proximity, approach_date) values (:name, :diameter, :proximity, :approach_date)";
    $qry = $con->prepare($sql);
    $qry->bindParam(':name', $name, PDO::PARAM_STR);
    $qry->bindParam(':diameter', $diameter, PDO::PARAM_STR);
    $qry->bindParam(':proximity', $proximity, PDO::PARAM_STR);
    $qry->bindParam(':approach_date', $approach_date, PDO::PARAM_STR);
    $qry->execute();
    $nr = $qry->rowCount();
    echo $nr;
?>
//https://localhost/nasa/php/asteroide_inserir.php?name=2014&diameter=0.10&proximity=9510693.38&approach_date=2024-12-01