<?php
require("../database/db.php");

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    try {
        $usuario = $_POST['user'];
        $senha = $_POST['password'];

        $stmt = $pdo -> prepare("INSERT INTO usuarios (usuario, senha) VALUES (:usuario, :senha)");
        
        $stmt -> bindParam(':usuario', $usuario, PDO::PARAM_STR);
        $stmt -> bindParam(':senha', $senha, PDO::PARAM_STR);

        $stmt -> execute();
        
        header("location:login_form.php?r=1");

        die();
    }
    catch (PDOException $e) { echo "Erro ao inserir registro: " . $e->getMessage(); }
}