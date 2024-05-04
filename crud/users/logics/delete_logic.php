<?php
require("../../../database/db.php");

try {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $stmt = $pdo -> prepare("DELETE FROM usuarios WHERE id = :id");

        $stmt -> bindParam(':id', $id, PDO::PARAM_INT);
        
        $stmt -> execute();

        header("Location:../forms/read_form.php");
        exit();
    } else {
        echo "ID do registro a ser excluído não especificado.";
    }
    } catch (PDOException $e) { echo "Erro ao excluir registro: " . $e->getMessage(); }