<?php
    require "banco.php";

    if (!isset($_GET['id'])){
        echo "Erro, id é obrigatório";
        exit();
    }

    $id = $_GET['id'];
    $sql = "delete from asteroids where id= :id";
    $qry = $con->prepare($sql);
    $qry->bindParam(':id', $id, PDO::PARAM_STR);
    $qry->execute();
    $nr = $qry->rowCount();
    echo $nr;
?>


//https://localhost/nasa/php/asteroide_excluir.php?id=