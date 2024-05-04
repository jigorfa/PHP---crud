<?php
require("../../../database/db.php");

try {
    $id = filter_input(INPUT_POST,'id');
    $usuario = filter_input(INPUT_POST,'user');
    $senha = filter_input(INPUT_POST,'password');

    $stmt = $pdo -> prepare("UPDATE usuarios SET usuario = :usuario, senha = :senha WHERE id = :id");
    
    $stmt -> bindParam(':id', $id, PDO::PARAM_INT);
    $stmt -> bindParam(':usuario', $usuario);
    $stmt -> bindParam(':senha', $senha);
    
    $stmt -> execute();

    header("location:../forms/read_form.php?u=1");
}

catch (PDOException $e) { echo "Erro ao atualizar registro: " . $e->getMessage(); } 