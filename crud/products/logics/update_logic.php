<?php
require("../../../database/db.php");

try {
    $id = filter_input(INPUT_POST,'id');
    $nome = filter_input(INPUT_POST,'name');
    $quantidade = filter_input(INPUT_POST,'quantity');
    $preco = filter_input(INPUT_POST,'price');

    $stmt = $pdo -> prepare("UPDATE produtos SET nome = :nome, quantidade = :quantidade, preco = :preco WHERE id = :id");
    
    $stmt -> bindParam(':id', $id, PDO::PARAM_INT);
    $stmt -> bindParam(':nome', $nome);
    $stmt -> bindParam(':quantidade', $quantidade);
    $stmt -> bindParam(':preco', $preco);
    
    $stmt -> execute();

    header("location:../forms/read_form.php?u=1");
}

catch (PDOException $e) { echo "Erro ao atualizar registro: " . $e->getMessage(); } 