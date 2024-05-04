<?php
require("../../../database/db.php");

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    try {
        $nome = $_POST['name'];
        $quantidade = $_POST['quantity'];
        $preco = $_POST['price'];

        $stmt = $pdo -> prepare("INSERT INTO produtos (nome, quantidade, preco) VALUES (:nome, :quantidade, :preco)");
        
        $stmt -> bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt -> bindParam(':quantidade', $quantidade, PDO::PARAM_STR);
        $stmt -> bindParam(':preco', $preco, PDO::PARAM_STR);

        $stmt -> execute();
        
        header("location:../forms/read_form.php?s=1");


        die();
    }
    catch (PDOException $e) { echo "Erro ao inserir registro: " . $e->getMessage(); }
}